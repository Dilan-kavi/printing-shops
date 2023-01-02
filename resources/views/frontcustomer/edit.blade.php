@extends('layouts.customer')


@section('content')
<div class="row justify-content-center">
    <div class="col-xl-10 col-xxl-9">
        <div class="card shadow">
            <div class="card-header d-flex flex-wrap justify-content-center align-items-center justify-content-sm-between gap-3">
                <h5 class="display-6 text-nowrap text-capitalize mb-0">Edit Order</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ 'fcustomers.update',$pdetails[0]->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td class="text-truncate" style="max-width: 200px;">Page Sze</td>
                                <td class="text-truncate" style="max-width: 200px;">
                                <select class="form-select" name="page_size" value="{{ $pdetails[0]->page_size }}">
                                    <option selected>{{ $pdetails[0]->page_size }}</option>
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
                                <td>
                            </tr>
                            <tr>
                                <td class="text-truncate" style="max-width: 200px;">Layout</td>
                                <td class="text-truncate" style="max-width: 200px;">
                                    <select class="form-select" name="orientation">
                                        <option value="portrait" selected>{{ $pdetails[0]->orientation }}</option>
                                        <option value="portrait">Potrait</option>
                                        <option value="Landscape">Landscape</option>
                                    </select>
                                </td>
                                                    </tr>
                            <tr>
                                <td class="text-truncate" style="max-width: 200px;">Pages per sheet</td>
                                <td class="text-truncate" style="max-width: 200px;">
                                    <select class="form-select" name="pp_sheet">
                                    <br>
                                        <option selected>{{ $pdetails[0]->pp_sheet }}</option>
                                        <option value="1" selected="">1</option>
                                        <option value="2">2</option>
                                        <option value="4">4</option>
                                        <option value="6">6</option>
                                    </select>
                                    <br></td>
                            </tr>
                            <tr>
                                <td class="text-truncate" style="max-width: 200px;">Color range</td>
                                <td class="text-truncate" style="max-width: 200px;">
                                    <label class="form-label custom-control-label" for="healthyes" style="margin-right: 0px;padding-left: 15px;">color</label>
                                    <input type="radio" id="healthyes" class="custom-control-input" name="color" value="color" {{ $pdetails[0]->color == 'color' ? 'checked':''}} >
                                    <label class="form-label custom-control-label" for="healthyes" style="padding-left: 14px;">Black and White</label>
                                    <input type="radio" id="healthyes-1" class="custom-control-input" name="color" value="Black and White" {{ $pdetails[0]->color == 'Black and White' ? 'checked':''}}>
                                </td>
                            </tr>
                               
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-warning" text-color="light">Update</button>
                                </td><td></td>
                            </tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection