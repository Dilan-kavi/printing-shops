@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Orders</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                {{ $orders->id }}
            </div>
            <div class="form-group">
                <strong>Order Time:</strong>
                {{ $orders->otime }}
            </div>
            <div class="form-group">
                <strong>Order Date:</strong>
                {{ $orders->odate }}
            </div>
            <div class="form-group">
                <strong>Amount:</strong>
                {{ $orders->amount }}
            </div>
        </div>

        
    </div>

@endsection
