@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('customers.index') }}"> Back</a>
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

    <form action="{{ route('customers.update',$customer->user->id) }}" method="POST" enctype="multipart/form-data">
    	@csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Index No</strong>
		            <input type="text" name="index_no" value="{{ $customer->index_no }}" class="form-control" placeholder="Name">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>First Name:</strong>
		            <input type="text"  class="form-control" value="{{ $customer->user->fname }}" name="fname" placeholder="first name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name</strong>
                    <input type="text" name="lname" value="{{ $customer->lname }}"  class="form-control" placeholder="last name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Email</strong>
		            <input type="text" name="email" value="{{ $customer->user->email }}" class="form-control" placeholder="email">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Faculty</strong>
		            <input type="text" name="faculty" value="{{ $customer->faculty }}" class="form-control" placeholder="faculty">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Contact No</strong>
		            <input type="text" name="contact_no" value="{{ $customer->contact_no }}" class="form-control" placeholder="contact number">
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
		      <button type="submit" class="btn btn-warning">Update</button>
		    </div>

		</div>
    </form>




@endsection