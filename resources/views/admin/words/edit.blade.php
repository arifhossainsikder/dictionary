@extends('layouts.admin')


@section('content')

    <h3>Edit word</h3>

    <div class="col-md-6">
        {!! Form::model($word,['method' => 'PATCH', 'action' => ['AdminWordsController@update',$word->id]]) !!}

        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('synonyms','Synonyms:') !!}
            {!! Form::textarea('synonyms',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('quotes','Quotes:') !!}
            {!! Form::textarea('quotes',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('definition','Definition:') !!}
            {!! Form::textarea('definition',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('bmeaning','Bangla meaning:') !!}
            {!! Form::textarea('bmeaning',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Word', ['class' => 'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminWordsController@destroy',$word->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete word', ['class' => 'btn btn-danger col-sm-6']) !!}
        </div>

        {!! Form::close() !!}


    </div>

    @endsection