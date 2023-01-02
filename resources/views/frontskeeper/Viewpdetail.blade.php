@extends('layouts.customer')


@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
</head>
<section id="about">
    <div class="container full-height">
        <div class="row flex center v-center full-height">
            <div class="col-8 col-sm-4">
                <div class="form-box">
                    <div class="table-responsive">
                        <legend>Print Details</legend>
                        <table class="table table-striped table-hover">
                            <tr>
                                <td>Page size</td>
                                <td>{{ $pdetails[0]->page_size}}</td>
                            </tr>
                            <tr>
                                <td>Layout</td>
                                <td>{{ $pdetails[0]->orientation}}</td>
                            </tr>
                            <tr>
                                <td>Page Color</td>
                                <td>{{ $pdetails[0]->color}}</td>
                            </tr>
                            <tr>
                                <td>Pages Per Sheet</td>
                                <td>{{ $pdetails[0]->pp_sheet}}</td>
                            </tr> 
                            <tr>
                                <td>Download File</td>
                        
                                <td><a href="{{ route('download',$pdetails[0]->id) }}">{{ $pdetails[0]->filename}}</a></td>
                          
                            </tr>   
                        </table>
                    <button class="btn btn-primary d-block w-100" type="submit">Accept</button> <br>
                    <button class="btn btn-primary d-block w-100" type="submit">Reject</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection