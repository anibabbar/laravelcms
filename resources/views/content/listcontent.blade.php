@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="d-inline">{{ ucfirst(trans($post_type)) }}</h3> &nbsp; <a href="/Content/create?post_type={{$post_type}}" class="btn btn-sm btn-dark">Add New</a>
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

                    @foreach($content as $data)
                        <tr>
                            <td>{{$data->title}}</td>
                            <td>{{$data->excerpts}}</td>
                            <td>
                                <div class="btn-group">
                                <a href="Content/{{$data->id}}/edit?post_type={{$data->post_type}}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="/Content/{{$data->id}}/destroy" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>

    </div>
@endsection
