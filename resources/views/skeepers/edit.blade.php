@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Shop Keeper</h2>
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

    <form action="{{ route('skeepers.update',$skeeper->id) }}" method="POST">
    	@csrf
        @method('PUT')

         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>First Name:</strong>
		            <input type="text" name="fname" value="{{ $skeeper->fname }}" class="form-control" placeholder="Name">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>Last Name:</strong>
		            <input type="text" name="lname" value="{{ $skeeper->lname }}" class="form-control" placeholder="Last Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>E-mail:</strong>
		            <input type="text" name="email" value="{{ $skeeper->email }}" class="form-control" placeholder="email">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                <strong>Contact No:</strong>
		            <input type="text" name="contact_no" value="{{ $skeeper->contact_no }}" class="form-control" placeholder="Contact Number">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
					<strong>Set Password:</strong><br>
                    	<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
		        </div>
		    </div>

			<div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
					<strong>Confirm Password:</strong><br>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="confirm password">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
            
		</div>
    </form>

@endsection