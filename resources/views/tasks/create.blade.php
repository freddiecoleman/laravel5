@extends('layout')

@section('content')
    <h1>Create a new task</h1>
    {!! Form::open(['route' => 'task.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('task', 'Comment:') !!}
            {!! Form::textarea('task', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn tn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop