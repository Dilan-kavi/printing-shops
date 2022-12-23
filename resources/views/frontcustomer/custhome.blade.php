@extends('layouts.customer')


@section('content')
<form action="{{ route('fcustomers.create') }}" method="get">
<button type="submit" class="btn btn-warning" action="">Create new Order</button>
</form>
<form action="{{ route('myorders') }}" method="get">
<button type="submit" class="btn btn-warning" action="">Edit Order</button>
</form>
<img style="width: 1255px;height: 340px;" src="assets/img/Technology-Inline-700x350-Booking%20(1).jpg">
@endsection