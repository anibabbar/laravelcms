@extends('layouts.content')

@section('content')

<div class="row content_wrapper_{{$content->post_type}} id_{{$content->id}}">
	<div class="container inner_wrapper_{{$content->post_type}}">
		<br>
		<h1 class="content_title">{{$content->title}}</h1>
	    <div clas="content_description">
            {!! $content->description !!}
        </div>

	</div>
</div>
@endsection
