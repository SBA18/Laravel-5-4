@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default panel-primary">
                <div class="panel-heading">Dashboard - My Posts</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>My posts here !!!</h3>
                                @foreach($posts as $post)
                                    @if($post->user_id === auth::user()->id)
                                        <div class="col-md-10">
                                            <h3><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h3>
                                            <p><em>{{ $post->created_at->diffForHumans() }} -- by : ????????</em></p>
                                            <p>{{ $post->body }}</p>
                                            <hr/>
                                            <p><a href="#">Like()</a> | <a href="#">dislike()</a> | <a href="#">comment() see more...</a></p>
                                            @if($post->user_id === auth::user()->id)
                                                <hr/>
                                                <p><a href="{{ route('posts.edit', $post) }}">Edit</a> | <a href="{{ route('posts.destroy', $post) }}">Delete</a></p>
                                            @endif
                                        </div>
                                    @endif
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
