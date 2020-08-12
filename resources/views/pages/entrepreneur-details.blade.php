@extends('layouts.site')

@section('title', 'Entrepreneur Details')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">

            <p class="m-t-10"><a href="javascript:history.go(-1)">Entrepreneur Lists</a> / Details</p>

            <div class="text-center form-padding">
                <h2>Entrepreneur Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">

        <div class="col-lg-12">
            <div>
                <h4>Personal Details</h4>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $entrepreneur->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact Number:</strong>
                {{ $entrepreneur->contact }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $entrepreneur->email }}
            </div>
        </div>

        <div class="col-lg-12 details-padding">
            <div>
                <h4>Business Details</h4>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Business Name:</strong>
                {{ $entrepreneur->business_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $entrepreneur->address }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Business Description:</strong>
                {{ $entrepreneur->business_description }}
            </div>
        </div>

        <div class="col-lg-12 details-padding">
            <div>
                <h4>Status Details</h4>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Approved By:</strong>
                {{ $entrepreneur->approved_by }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Add Date:</strong>
                {{ $entrepreneur->created_at }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Updated Date:</strong>
                {{ $entrepreneur->updated_at }}
            </div>
        </div>

    </div>
</div>
@endsection