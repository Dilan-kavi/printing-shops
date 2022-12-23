@extends('layouts.admin')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Shop Keepers</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('skeepers.create') }}"> Create Shop Keeper</a>
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Contact No</th>
            <th width="280px">Action</th>
        </tr>

	    @foreach ($skeepers as $skeeper)

	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $skeeper->fname }}</td>
            <td>{{ $skeeper->lname }}</td>
	        <td>{{ $skeeper->email }}</td>
            <td>{{ $skeeper->contact_no }}</td>

	        <td>
                <form action="{{ route('skeepers.destroy',$skeeper->user_id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('skeepers.show',$skeeper->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('skeepers.edit',$skeeper->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>

	    @endforeach
    </table>
  
    {!! $skeepers->links() !!}

@endsection