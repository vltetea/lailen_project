<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrepreneur;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $entrepreneurs = Entrepreneur::paginate(10);
        return view('pages.dashboard', compact('entrepreneurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('pages.new-entrepreneur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $post                           = new Entrepreneur;
        $post->name                     = $request->name;
        $post->contact                  = $request->contact;
        $post->email                    = $request->email;
        $post->business_name            = $request->business;
        $post->address                  = $request->address;
        $post->business_description     = $request->description;
        $post->approved_by              = 1;
        $post->save();

        return redirect('/home')->with('success','New Entrepreneur added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Entrepreneur $entrepreneur){

        return view('pages.entrepreneur-details',compact('entrepreneur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Entrepreneur $entrepreneur) {

        return view('pages.edit-entrepreneur',compact('entrepreneur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrepreneur $entrepreneur) {

        $entrepreneur->update($request->all());
        return redirect('/home')->with('success','Entrepreneur details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entrepreneur $entrepreneur) {

        $entrepreneur->delete();
        return redirect('/home')->with('success','Entrepreneur deleted successfully');
    }
}
