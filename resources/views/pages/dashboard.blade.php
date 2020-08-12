@extends('layouts.site')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="float-right padding-custom">
            <a href="{{ route('entrepreneur.create') }}"><button class="btn btn-custom">ADD ENTREPRENEUR</button></a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success timeout">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-responsive">
            <thead class="thead-custom">
                <tr>
                    <th style="width: 5%" scope="col">#</th>
                    <th style="width: 25%" scope="col">Name</th>
                    <th style="width: 15%" scope="col">Contact</th>
                    <th style="width: 25%" scope="col">Business Name</th>
                    <th style="width: 25%" scope="col">Address</th>
                    <th style="width: 10%" scope="col">Action</th>
                </tr>
            </thead>

            @foreach ($entrepreneurs as $entrepreneur)
                <tbody>
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><a href="{{ route('entrepreneur.show',$entrepreneur->id) }}">{{ $entrepreneur->name }}</a></td>
                        <td>{{ $entrepreneur->contact }}</td>
                        <td>{{ $entrepreneur->business_name }}</td>
                        <td>{{ $entrepreneur->address }}</td>
                        <td>
                            <form action="{{ route('entrepreneur.destroy',$entrepreneur->id) }}" method="POST">
                
                                <a href="{{ route('entrepreneur.edit',$entrepreneur->id) }}"><i class="fa fa-edit"></i></a>
                                
                                @csrf

                                @method('DELETE')
                                <button class="delete-btn" type="submit"><i class="fa fa-trash"></i></button>

                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach

        </table>
    </div>

    {{ $entrepreneurs->links() }}

@endsection