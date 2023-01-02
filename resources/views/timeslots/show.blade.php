@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Time Slot</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('timeslots.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Start Time:</strong>
                {{ $tslots->stime }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>End Time:</strong>
                {{ $tslots->etime }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>Printing center :</strong>
		            {{ $tslots->cname }}
		        </div>
		    </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status</strong>
                {{ $tslots->status }}
            </div>
        </div>
    </div>

@endsection