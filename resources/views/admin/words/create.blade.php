@extends('layouts.admin')

@section('content')
    <h3>Add new word</h3>
    @include('includes.form_error')
    {!! Form::open(['method' => 'POST', 'action' => 'AdminWordsController@store']) !!}

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
                {!! Form::label('definition','Definition:') !!}
                {!! Form::textarea('definition',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('synonyms','Synonyms:') !!}
                {!! Form::textarea('synonyms',null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('quotes','Quotes:') !!}
                {!! Form::textarea('quotes',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('bmeaning','Bangla meaning:') !!}
                {!! Form::textarea('bmeaning',null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection