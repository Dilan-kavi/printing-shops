@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Shop Keepers Detail</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('skeepers.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>First Name:</strong>
		            {{ $skeeper->fname }}
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>Last Name:</strong>
		            {{ $skeeper->lname }}
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>E-mail:</strong>
		            {{ $skeeper->email }}
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>Contact No:</strong>
		            {{ $skeeper->contact_no }}
		        </div>
		    </div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>Printing center :</strong>
		            {{ $skeeper->pcenters_id }}
		        </div>
		    </div>

@endsection
