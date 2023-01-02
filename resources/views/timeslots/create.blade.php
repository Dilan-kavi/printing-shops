@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Time Slot</h2>
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

    <form action="{{ route('timeslots.store') }}" method="POST">
    	@csrf
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>Center name</strong>
		            <select name="pcenters_id" class="form-control" id="pcenter" >
                        @foreach($pcenters as $pcenter)
                        <option value="{{ $pcenter->id }}">{{ $pcenter-> cname}}</option>
                        @endforeach
                    </select>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Start time:</strong>
		            <input type="time" min="8:00" name="stime" class="form-control" placeholder="Start time">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>End Time:</strong>
		            <input type="time" max="16:30" name="etime" class="form-control" placeholder="End Time">
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