@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Time Slot</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('timeslots.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('timeslots.update',$tslots->id) }}" method="POST">
    	@csrf

        @method('PUT')
         <div class="row">
         
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Start Time:</strong>
		            <input type="text" name="cname" value="{{ $tslots->stime }}" class="form-control" placeholder="Start Time">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>End Time:</strong>
		            <input type="text" class="form-control" value="{{ $tslots->etime }}" name="clocation" placeholder="End Time">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                    <input type="radio" name="status" value="0" checked>
                    <label>Available</label><br>
                    <input type="radio" name="status" value="1">
                    <label> Booked</label><br>
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>

		</div>
    </form>

@endsection