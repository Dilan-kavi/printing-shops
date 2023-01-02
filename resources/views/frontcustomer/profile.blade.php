@extends('layouts.customer')


@section('content')

<div class="container profile profile-view" id="profile" style="box-shadow: 0px 0px 20px rgb(0,1,4);">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info alert-dismissible absolue center" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <span>Profile save with success</span>
                </div>
            </div>
        </div>
        <form>
            <div class="row profile-row">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div><input class="form-control form-control" type="file" name="avatar-file">
                </div>
                <div class="col-md-8">
                    <h1>Profile </h1>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Firstname </label>
                                <input class="form-control" type="text" name="firstname" value="{{ $customer->fname }}">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Lastname </label>
                                <input class="form-control" type="text" name="lastname" value="{{ $customer->lname }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Email </label>
                        <input class="form-control" type="email" autocomplete="off" required="" name="email" value="{{ $customer->email }}">
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Password </label>
                                <input class="form-control" type="password" name="password" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input class="form-control" type="password" name="confirmpass" autocomplete="off" required="">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 content-right">
                            <button class="btn btn-warning link-light form-btn" type="submit">SAVE </button>
                            <button class="btn btn-danger form-btn" type="reset">CANCEL </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection