@extends('layouts.app')

@section('content')
    <form action="/Settings" method="POST">
        @csrf
        @method('put')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
    <div class="card">
        <div class="card-header">Manage CMS Settings</div>
        <div class="card-body">

                <div class="form-group">
                    <label for="Title">Site Title</label>
                    <input type="text" name="name" class="form-control" value="{{$settings->name}}">
                </div>
                <div class="form-group">
                    <label for="Title">Site Tagline</label>
                    <input type="text" name="tagline" class="form-control" value="{{$settings->tagline}}">
                </div>
                <div class="form-group">
                    <label for="Title">Site Logo</label>
                    <input type="file" name="logo" class="form-control">
                </div>

                <div class="form-group">
                    <label for="Title">Address</label>
                    <textarea name="address" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="row form-group">

                <div class="col-md-6">
                    <label for="Title">City</label>
                    <input type="text" name="city" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="Title">State</label>
                    <input type="text" name="state" class="form-control">
                </div>

                </div>

                <div class="row form-group">
                <div class="col-md-6">
                    <label for="Title">Zip Code</label>
                    <input type="text" name="pin" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="Title">Country</label>
                    <input type="text" name="country" class="form-control">
                </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="Title">Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="Title">Alternative Phone</label>
                        <input type="text" name="alt_phone" class="form-control">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="Title">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="Title">Alternative Email</label>
                        <input type="text" name="alt_email" class="form-control">
                    </div>
                </div>

            <div class="row form-group">

                <div class="col-md-6">

                    <input type="submit" value="update" class="btn btn-sm btn-primary">
                </div>
            </div>




        </div>
    </div>




            </div>
        </div>
    </div>
    </form>
@endsection
