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


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>

    {!! Form::close() !!}

    <div class="row" data-toggle="dataTable" data-form="deleteForm">

           {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy',$user->id], 'class' =>'form-delete']) !!}
           <div class="col-md-6">
               <div class="form-group">
                   {!! Form::submit('Delete User', ['class' => 'btn btn-danger delete', 'name' => 'delete_modal']) !!}
               </div>
           </div>
           {!! Form::close() !!}
       </div>



    <div class="modal" id="confirm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Delete Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you, want to delete {{ $user->name }}?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" id="delete-btn">Delete</button>
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    @include('includes.delete_script')
@endsection