@extends('layout')

@section('content')
    <h1>Create a new task</h1>
    {!! Form::open(['route' => 'tasks.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('comment', 'Comment:') !!}
            {!! Form::textarea('comment', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn tn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop