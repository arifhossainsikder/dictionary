@extends('layouts.admin')

@section('content')
    <h3>Add new user</h3>
    @include('includes.form_error')
    {!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store']) !!}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::email('email',null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id',[''=>'Choose options'] + $roles, null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
            </div>
        </div>
    </div>


    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection