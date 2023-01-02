@extends('layouts.customer')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
</head>
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
<section id="about">
        <div class="container full-height">
            <div class="row flex center v-center full-height">
                <div class="col-8 col-sm-4">
                    <div class="form-box">
    <legend>Fill print details</legend>
    <form action="{{ route('fcustomers.store') }}" method="POST" enctype="multipart/form-data">
    	@csrf
        <fieldset> 
            <input type="hidden" name="stime" value="{{$request->timeslot}}">
            <input type="hidden" name="shopid" value="{{$request->shop}}">
            <label class="form-label mb-0" for="float-input">Page size</label>
            <select class="form-select" name="page_size">
                <option>Select page size</option>
                <option value="letter">Letter</option>
                <option value="Tabloid">Tabloid</option>
                <option value="Legal">Legal</option>
                <option value="A3">A3</option>
                <option value="A4">A4</option>
                <option value="A5">A5</option>
                <option value="B4(JIS)">B4(JIS)</option>
                <option value="B5(JIS)">B5(JIS)</option>
                <option value="Statement">Statement</option>
                <option value="Executive">Executive</option>
            </select>
            <br>

            <label class="form-label mb-0" for="float-input">Pages</label>
            <select class="form-select">
                <option value="13" selected="">All</option>
                <option value="14">Custom</option>
            </select>
            <br>

            <label class="form-label mb-0" for="float-input">Layout</label>
            <select class="form-select" name="orientation">
                <option value="portrait" selected="">Potrait</option>
                <option value="Landscape">Landscape</option>
            </select>
    
            <div class="custom-control custom-radio">
                <br>
                <label class="form-label custom-control-label" for="healthyes"  style="margin-right: 0px;padding-left: 15px;">Colour</label>
                <input type="radio" id="healthyes" class="custom-control-input" name="color" value="color">
                <label class="form-label custom-control-label" for="healthyes" style="padding-left: 14px;">Black and white</label>
                <input type="radio" id="healthyes-1" class="custom-control-input" name="color" value="Black and White">
            </div>
            <br>

            <label class="form-label mb-0" for="float-input">Pages per sheet</label>
            <select class="form-select" name="pp_sheet">
            <br>
                <option selected="">No of pages per sheet</option>
                <option value="1" selected="">1</option>
                 <option value="2">2</option>
                <option value="4">4</option>
                <option value="6">6</option>
            </select>
            <br>

            <label class="form-label mb-0" for="float-input">scale</label>
            <select class="form-select">
                <option value="12" selected="">Default</option>
                <option value="13">Custom</option>
            </select>
            <br>
            
                <label class="form-label mb-0" for="float-input">Attach document</label>
                <input name="file" class="form-control" type="file" style="margin-top: 25px;padding-top: 1px;padding-bottom: 14px;margin-bottom: -11px;transform: perspective(110px);opacity: 1;" multiple><br>
                <button type="submit" class="btn btn-warning d-block w-100" type="button">Create Order </button>
        </fieldset>
    </form>
</section>
@endsection