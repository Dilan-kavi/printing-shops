@extends('layouts.customer')


@section('content')
<div class="row justify-content-center mt-4">
                    <div class="col-xl-10 col-xxl-9">
                        <div class="card shadow">
                            <div class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3">
                                <h5 class="display-6 text-nowrap text-capitalize mb-0" style="color: rgb(0,1,6);border-color: #ffffff;">My Orders</h5>
                                <div class="input-group input-group-sm w-auto">
                                    <input class="form-control form-control-sm" type="text">
                                    <button class="btn btn-outline-primary btn-sm" type="button" style="color: rgb(255,193,7);border-color: rgb(255,193,7);">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search mb-1" style="border-color: rgb(255,193,7);">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body" style="border-color: #ffffff;">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th style="color: rgb(0,0,4);">Order ID</th>
                                                <th style="color: rgb(0,0,0);">Ordered Date & Time</th>
                                                <th style="color: rgb(0,0,0);">Center Name</th>
                                                <th style="color: rgb(0,0,0);">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td class="text-truncate" style="max-width: 200px;color: rgb(0,0,0);">{{ $order->id }}</td>
                                                <td class="text-truncate" style="max-width: 200px;color: rgb(0,0,0);">{{ $order->created_at }}</td>
                                                <td class="text-truncate" style="color: rgb(0,0,0);">{{ $order->cname }}</td>
                                                <td class="text-truncate" style="color: rgb(0,0,0);">Pending</td>
                                                <td class="text-center" style="padding-left: 54px;">
                                                    <div class="mail-custom-btn">
                                                        
                                                        <a class="custom-btn light-btn" href="{{ route('fcustomers.edit',$order->id) }}" role="button" style="margin-right: -9px;">
                                                            <img src="assets/img/edit-property-xxl.png" width="19" height="19">
                                                        </a>
                                                    </div>
                                                    <div class="mail-custom-btn"></div>
                                                </td>
                                                <td class="text-center" style="padding-left: 5px;">
                                                <form action="{{ route('fcustomers.destroy',$order->id) }}" method="POST">
                                                    @csrf

                                                    @method('DELETE')
                                                    <a class="custom-btn light-btn" href="" role="button" style="margin-left: -3px;">
                                                        <i class="fa fa-trash text-warning"></i>
                                                    </a>
                                                </form>
                                                    <div class="mail-custom-btn"></div>
                                                    <div class="mail-custom-btn"></div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            <div class="card-footer " style="border-color: #858796;">
                                <div><br></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
    @endsection