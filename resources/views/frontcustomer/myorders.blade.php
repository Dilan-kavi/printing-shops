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
                                                <th style="color: rgb(0,0,4);margin-right: 133px;padding-left: 0px;padding-right: 0px;">Order ID</th>
                                                <th style="color: rgb(0,0,0);width: 315.1px;padding-right: 0px;margin-right: -18px;padding-left: 171px;margin-left: -152px;">Order Date</th>
                                                <th style="color: rgb(0,0,0);width: 186.012px;margin-right: -12px;padding-right: 26px;padding-left: 49px;margin-left: -22px;">Order Time</th>
                                                <th style="color: rgb(0,0,0);width: 175.438px;margin-right: 43px;padding-right: 0px;padding-left: 86px;">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate" style="max-width: 200px;color: rgb(0,0,0);">p100</td>
                                                <td class="text-truncate" style="max-width: 200px;color: rgb(0,0,0);padding-right: 38px;padding-left: 164px;margin-left: -149px;">23/Jun/2022</td>
                                                <td style="color: rgb(0,0,0);padding-left: 58px;margin-left: -49px;padding-right: 23px;margin-right: -13px;">13:20</td>
                                                <td class="text-center" style="color: rgb(0,0,0);margin-right: 43px;padding-right: 0px;padding-left: 68px;margin-left: -50px;">Pending</td>
                                                <td class="text-center" style="padding-left: 54px;">
                                                    <div class="mail-custom-btn">
                                                        <a class="custom-btn light-btn" href="#" role="button" style="margin-right: -9px;">
                                                            <img src="assets/img/edit-property-xxl.png" width="19" height="19">
                                                        </a>
                                                    </div>
                                                    <div class="mail-custom-btn"></div>
                                                </td>
                                                <td class="text-center" style="padding-left: 5px;">
                                                    <a class="custom-btn light-btn" href="#" role="button" style="margin-left: -3px;">
                                                        <i class="fa fa-trash text-warning"></i>
                                                    </a>
                                                    <div class="mail-custom-btn"></div>
                                                    <div class="mail-custom-btn"></div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer " style="border-color: #858796;">
                                <nav>
                                    <ul class="pagination pagination-sm mb-0 justify-content-center">
                                        <li class="page-item" style="color: rgb(255,193,7);">
                                            <a class="page-link" aria-label="Previous" href="#">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="page-item" style="color: rgb(255,193,7);">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item" style="color: rgb(255,193,7);background: #ffffff;">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item" style="color: rgb(255,193,7);">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item" style="color: rgb(255,193,7);">
                                            <a class="page-link" aria-label="Next" href="#">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
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