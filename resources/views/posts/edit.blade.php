@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading">Create new post!</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h1>Create new post</h1>
                                <hr>
                                <form method="post" action="{{route('posts.update', $post)}}" accept-charset="utf-8">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Content</label>
                                        <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{$post->body}}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection