@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">

            <ul class="list-group">
                <a href="/Content?post_type=page" target="_blank">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                   Pages
                <span class="badge badge-primary badge-pill">14</span>
                </li></a>

                <a href="/Content?post_type=post" target="_blank">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                   Posts
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                </a>
                <a href="/Content?post_type=category" target="_blank">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                   Categories
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
                </a>
                <a href="/Content?post_type=tags" target="_blank">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tags
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
                </a>
            </ul>



        </div>
    </div>
</div>
@endsection
