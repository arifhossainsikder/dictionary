@extends('layouts.admin')

@section('content')
    <h3>Update user</h3>
    @include('includes.form_error')
    {!! Form::model($user,['method' => 'PATCH', 'action' => ['AdminUsersController@update',$user->id]]) !!}

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
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy',$user->id]]) !!}
   <div class="row">
       <div class="col-md-6">
           <div class="form-group">
               {!! Form::submit('Delete User', ['class' => 'btn btn-danger']) !!}
           </div>
       </div>
   </div>


    {!! Form::close() !!}

@endsection