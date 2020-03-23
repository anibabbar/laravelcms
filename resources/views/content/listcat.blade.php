@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
    <h3 class="d-inline">Category</h3> &nbsp; <a href="#" class="btn btn-sm btn-dark">Add New</a>
                <hr>
                @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table class="table table-striped table-bordered">

                                <thead class="thead-dark">
                                <tr>
                                    <th>Title</th>
                                    <th>Excerpts</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                        @foreach($category as $cat)
                                <tr>
                                    <td>{{$cat->title}}</td>
                                    <td>{{$cat->excerpts}}</td>
                                    <td><a href="#">Edit</a></td>
                                </tr>
                            @endforeach

                            </table>
                    </div>
                </div>

    </div>
@endsection
