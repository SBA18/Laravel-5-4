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
                                {!! Form::open(['route' => 'posts.store', 'data-parsley-validate'=>'']) !!}
                                {{ Form::label('title', 'Title : ') }}
                                {{ Form::text('title', null, array('class' => 'form-control', 'required'=>'')) }}

                                {{ Form::label('body', 'Content : ') }}
                                {{ Form::textarea('body', null, array('class' => 'form-control', 'required'=>'', 'minlength'=>'10')) }}
                                {{ Form::hidden('user_id', auth::user()->id, array('class' => 'form-control', 'required'=>'', 'minlength'=>'10')) }}
                                {{ Form::submit('Create Post', array('class'=>'btn btn-primary btn-lg','style'=>'margin-top: 20px')) }}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection