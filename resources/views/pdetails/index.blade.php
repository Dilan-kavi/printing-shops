@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Print Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('print_details.create') }}"> Create New Product</a>
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
            <th>Page size</th>
            <th>Layout </th>
            <th>Color</th>
            <th width="280px">Action</th>
        </tr>

	    @foreach ($pdetails as $pdetail)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $pdetail->page_size }}</td>
	        <td>{{ $pdetail->orientation }}</td>
            <td>{{ $pdetail->color}}</td>
	        <td>
                <form action="{{ route('print_details.destroy',$pdetail->orders_id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('print_details.show',$pdetail->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('print_details.edit',$pdetail->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>    
                </form>
	        </td>
	    </tr>

	    @endforeach
    </table>
@endsection