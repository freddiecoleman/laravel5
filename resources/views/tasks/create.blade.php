@extends('layout')

@section('content')
    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('comment', 'Comment:') !!}
            {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn tn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop