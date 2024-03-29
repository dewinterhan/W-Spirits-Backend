@extends('layouts.admin')
@section('content')
    <h1>Create User</h1>
    <div class="col-md-6">
        <img src="" alt="">
    </div>
    <div class="col-md-6">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'E-mail:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', [''=>'Choose options'] + $roles,null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-warning']) !!}
        </div>
        {!! Form::close() !!}
    </div>

@stop
