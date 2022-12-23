@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Printing Shops</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pcenters.create') }}"> Create New Printing Center</a>
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
            <th>Center Name</th>
            <th>Location</th>
            <th width="280px">Action</th>
        </tr>

	    @foreach ($pcenters as $pcenter)

	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $pcenter->cname }}</td>
	        <td>{{ $pcenter->clocation }}</td>
	        <td>
                <form action="{{ route('pcenters.destroy',$pcenter->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pcenters.show',$pcenter->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pcenters.edit',$pcenter->id) }}">Edit</a>
                
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>

	    @endforeach
    </table>
    {!! $pcenters->links() !!}

@endsection