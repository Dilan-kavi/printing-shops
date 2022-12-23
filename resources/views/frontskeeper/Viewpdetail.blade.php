@extends('layouts.customer')


@section('content')
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
                                <td>A4</td>
                            </tr>
                            <tr>
                                <td>Layout</td>
                                <td>Landscape</td>
                            </tr>
                            <tr>
                                <td>Page Color</td>
                                <td>Black & White</td>
                            </tr>
                            <tr>
                                <td>Pages Per Sheet</td>
                                <td>4</td>
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