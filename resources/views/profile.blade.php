@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading">My profile</div>

                    <div class="panel-body">
                        <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Here is information about my profile!
                    <hr/>
                        <p>{{ $user->name }}</p>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection