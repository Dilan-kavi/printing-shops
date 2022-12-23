@extends('layouts.customer')


@section('content')
    <div class="container pt-xl-0 mt-xl-0 mb-xl-0" style="height: 500px;width: 1560px;margin-top: 2px;">
        <h1 class="text-center">
            <a  href="{{ route('fskeepers.index') }}">Order Requests</a>
        </h1>
        <h1 class="text-center" style="margin-bottom: 26px;">Confirmed Orders</h1>
        <img style="width: 1255px;height: 340px;" src="assets/img/Technology-Inline-700x350-Booking%20(1).jpg">
    </div>
    <a class="border rounded d-inline scroll-to-top" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

@endsection