@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('print_details.index') }}"> Back</a>
            </div>
        </div>
    </div>

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

    <form action="{{ route('print_details.store') }}" method="POST">
    	@csrf
        <fieldset> 
                                <label class="form-label mb-0" for="float-input">Page size</label>
                                <select class="form-select" name="page_size" name="page_size">
                                    <option value="12" selected="">Letter</option>
                                    <option value="13">Tabloid</option>
                                    <option value="14">Legal</option>
                                    <option value="">A3</option>
                                    <option value="">A4</option>
                                    <option value="">A5</option>
                                    <option value="">B4(JIS)</option>
                                    <option value="">B5(JIS)</option>
                                    <option value="">Statement</option>
                                    <option value="">Executive</option>
                                </select><br>

                                <label class="form-label mb-0" for="float-input">pages</label>
                                <select class="form-select">
                                    <option value="13" selected="">All</option>
                                    <option value="14">Custom</option>
                                </select><br>

                                <label class="form-label mb-0" for="float-input">Layout</label>
                                <select class="form-select" name="orientation">
                                    <option value="12" selected="">Potrait</option>
                                    <option value="13">Landscape</option>
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
                                <select class="form-select">
                                    <br>
                                    <option value="12" selected="">1</option>
                                    <option value="13">2</option>
                                    <option value="14">4</option>
                                </select><br>

                                <label class="form-label mb-0" for="float-input">scale</label>
                                <select class="form-select">
                                    <option value="12" selected="">Default</option>
                                    <option value="13">Custom</option>
                                </select>
                                <br>

                                <label class="form-label mb-0" for="float-input">Attach document</label>
                                <input class="form-control" type="file" style="margin-top: 25px;padding-top: 1px;padding-bottom: 14px;margin-bottom: -11px;transform: perspective(110px);opacity: 1;"><br>
                                <button type="submit" class="btn btn-primry d-block w-100" type="button">Create Order </button>
                            </fieldset>
    </form>
@endsection