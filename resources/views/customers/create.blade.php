@extends('layouts.admin')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Customer</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>

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


    <form action="{{ route('customers.store') }}" method="POST">

    	@csrf


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Index No</strong>
		            <input type="text" name="index_no" class="form-control" placeholder="Name">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>First Name:</strong>
		            <input type="text"  class="form-control" name="fname" placeholder="first name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Name</strong>
                    <input type="text" name="lname" class="form-control" placeholder="last name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Email</strong>
		            <input type="text" name="email" class="form-control" placeholder="email">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                    <br>
		            <strong>Faculty</strong>
                    <select name="faculty" id="faculty">
                        <option value="science">Faculty of Science</option>
                        <option value="management">Management</option>
                        <option value="arts">Arts</option>
                        <option value="fisheries">Fisheries</option>
                        <option value="engineering">Engineering</option>
                        <option value="agri">Agri</option>
                    </select>
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
                    <br>
		            <strong>Contact No</strong>
		            <input type="text" name="contact_no" class="form-control" placeholder="contact number">
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