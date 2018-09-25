@extends('layouts.admin')


@section('content')

    <h3>Edit word</h3>

    <div class="col-md-12" data-toggle="dataTable" data-form="deleteForm">
        {!! Form::model($word,['method' => 'PATCH', 'action' => ['AdminWordsController@update',$word->id]]) !!}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('title','Title:') !!}
                    {!! Form::text('title',null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('synonyms','Synonyms:') !!}
                    {!! Form::textarea('synonyms',null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('quotes','Quotes:') !!}
                    {!! Form::textarea('quotes',null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('definition','Definition:') !!}
                    {!! Form::textarea('definition',null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('bmeaning','Bangla meaning:') !!}
                    {!! Form::textarea('bmeaning',null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    {!! Form::submit('Update Word', ['class' => 'btn btn-primary col-sm-6']) !!}
                </div>
            </div>
        </div>

        {!! Form::close() !!}


        <br><br><br>
        <div class="row">
            {!! Form::open(['method' => 'DELETE', 'action' => ['AdminWordsController@destroy',$word->id], 'class' =>'form-delete']) !!}

            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    {!! Form::submit('Delete word', ['class' => 'btn btn-danger col-sm-6 delete', 'name' => 'delete_modal']) !!}
                </div>
            </div>
            {!! Form::close() !!}

        </div>

        <br><br>



    </div>
    <div class="modal" id="confirm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Delete Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you, want to delete {{ $word->title }}?</p>
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

