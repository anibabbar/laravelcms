@extends('layouts.app')

@section('content')

    <form action="/Content/{{$content->id}}" method="POST">
        @csrf
        @method('put')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Update  {{$post_type}} </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="Title"> Title</label>
                                <input type="text" name="title" class="form-control" value="{{$content->title}}">
                            </div>

                            <div class="form-group d-none">
                                <label for="Title"> Post Type</label>
                                <input type="text" name="post_type" class="form-control" value="{{ Request::get('post_type') }}">
                            </div>
                            <div class="form-group">
                                <label for="Title"> Slug</label>
                                <input type="text" name="slug" class="form-control" value="{{$content->slug}}">
                            </div>


                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="" cols="30" rows="15" class="form-control">{{$content->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Excerpts</label>
                                <textarea name="excerpts" id="" cols="30" rows="3" class="form-control">{{$content->excerpts}}</textarea>
                            </div>



                            <div class="form-group">
                                <input type="submit" value="Add Content" class="btn btn-sm btn-success float-right">
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">SEO Options </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="Title">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" value="{{$content->meta_title}}">
                            </div>

                            <div class="form-group">
                                <label for="description">Meta Description</label>
                                <textarea name="meta_description" id="" cols="30" rows="3" class="form-control">{{$content->meta_description}}</textarea>
                            </div>

                        </div>
                    </div>
                    @if($post_type != 'category')
                        <div class="card" style="margin-top:30px;">
                            <div class="card-header">Grouping Options </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Title">Category </label>
                                    <select name="category[]" id="" class="select2 form-control" multiple="multiple">
                                        <option value="">NA </option>
                                        @foreach($category as $cat)
                                            <option value="{{$cat->id}}"
                                                @foreach($content->category as $selcat)
                                                        @if($cat->id == $selcat)
                                                            selected="selected"
    @endif
                                                    @endforeach
                                            >
                                                {{$cat->title}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Title">Tags</label>
                                    <select name="tags[]" id="" class="select2 form-control" multiple="multiple">
                                        <option value="">NA</option>
                                        @foreach($tag as $t)
                                            <option value="{{$t->id}}"
                                                    @foreach($content->tags as $seltag)
                                                    @if($t->id == $seltag)
                                                    selected="selected"
                                                    @endif
                                                @endforeach
                                            > {{$t->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                    @endif
                </div>
                {{--            col-md-4 --}}

            </div>
        </div>
        </div>
    </form>
@endsection

<script !src="">
    CKEDITOR.replace( 'description');
</script>
