@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List of All Pages {{Auth::user()->id}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    <form action="/Page" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Title">Page Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Add Page" class="btn btn-sm btn-success float-right">
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
