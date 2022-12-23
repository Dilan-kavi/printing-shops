@extends('layouts.customer')

@section('content')
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
<section id="about">
        <div class="container full-height">
            <div class="row flex center v-center full-height">
                <div class="col-8 col-sm-4">
                    <div class="form-box">
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
    <legend>Fill print details</legend>
    <form action="{{ route('print_details.store') }}" method="POST">
    	@csrf
        <fieldset> 
            <label class="form-label mb-0" for="float-input">Page size</label>
            <select class="form-select" name="page_size">
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

            <label class="form-label mb-0" for="float-input">pages</label>
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
                <label class="form-label custom-control-label" for="healthyes" style="margin-right: 0px;padding-left: 15px;">color</label>
                <input type="radio" id="healthyes" class="custom-control-input" name="color">
                <label class="form-label custom-control-label" for="healthyes" style="padding-left: 14px;">black and white</label>
                <input type="radio" id="healthyes-1" class="custom-control-input" name="color">
            </div>
            <br>

            <label class="form-label mb-0" for="float-input">pages per sheet</label>
            <select class="form-select" name="pp_sheet">
            <br>
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
                <input class="form-control" type="file" style="margin-top: 25px;padding-top: 1px;padding-bottom: 14px;margin-bottom: -11px;transform: perspective(110px);opacity: 1;"><br>
                <button type="submit" class="btn btn-warning d-block w-100" type="button">Create Order </button>
        </fieldset>
    </form>
</section>
</body>
@endsection