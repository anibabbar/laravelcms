@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">List of All Pages | <a href="/Page/create">Add New </a></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table class="table table-bordered">
                                <tr>
                                    <td>Title</td>
                                    <td>Slug</td>
                                    <td>Description</td>
                                    <td>Action</td>
                                </tr>

                            @foreach($page as $pages)
                                <tr>
                                    <td>{{$pages->title}}</td>
                                    <td>{{$pages->slug}}</td>
                                    <td>{{$pages->description}}</td>
                                    <td><a href="/Page/{{$pages->slug}}">View</a></td>

                                </tr>
                            @endforeach
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
