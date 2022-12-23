@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Customers</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('customers.create') }}"> Create New Customer</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Index No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Faculty</th>
            <th>Contact No</th>
            <th>Value</th>
            <th width="280px">Action</th>
        </tr>

	    @foreach ($customers as $customer)

	    <tr>

	        <td>{{ ++$i }}</td>
	        <td>{{ $customer->index_no }}</td>
            <td>{{ $customer->fname }}</td>
	        <td>{{ $customer->lname  }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->faculty }}</td>
            <td>{{ $customer->contact_no }}</td>
            <td>{{ $customer->value }}</td>

	        <td>
                <form action="{{ route('customers.destroy',$customer->user_id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>

	    @endforeach
    </table>
    {!! $customers->links() !!}

@endsection