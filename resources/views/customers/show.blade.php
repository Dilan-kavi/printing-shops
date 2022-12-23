@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Customer</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Index No:</strong>
                {{ $customer->index_no }}
            </div>
            <div class="form-group">
                <strong>First Name:</strong>
                {{ $customer->fname }}
            </div>
            <div class="form-group">
                <strong>Last Name:</strong>
                {{ $customer->lname }}
            </div>
            <div class="form-group">
                <strong>Email:</strong>
                {{ $customer->email }}
            </div>
            <div class="form-group">
                <strong>Faculty:</strong>
                {{ $customer->faculty }}
            </div>
            <div class="form-group">
                <strong>Contact No:</strong>
                {{ $customer->contact_no }}
            </div>
        </div>
        
    </div>

@endsection

