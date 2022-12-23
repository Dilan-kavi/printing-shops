@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Shop Keeper</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('skeepers.index') }}"> Back</a>
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


    <form action="{{ route('skeepers.store') }}" method="POST">
    	@csrf
         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>First Name:</strong>
		            <input type="text" name="fname" class="form-control" placeholder="Name">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>Last Name:</strong>
		            <input type="text" name="lname" class="form-control" placeholder="Last Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>E-mail:</strong>
		            <input type="text" name="email" class="form-control" placeholder="email">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>Contact No:</strong>
		            <input type="text" name="contact_no" class="form-control" placeholder="contact number">
		        </div>
		    </div>

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
		            <strong>Set Password:</strong>
		            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="password"><br>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Confirm password:</strong>
		            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  placeholder="confirm password"><br>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>
    </form>

@endsection