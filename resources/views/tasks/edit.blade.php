@extends('layouts.2_columns')

@section('content')
    @include('layouts.partials.alerts.errors')
    @include('layouts.partials.alerts.success')

    <h1>Edit Task - Task Name</h1>
    <p class="head">Edit this task below . <a href="{{ route('tasks.index') }}">Go back to all tasks</a></p>

    {!! Form::model($task, [
        'method' => 'PATCH',
        'route'  => ['tasks.update', $task->id]
    ]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection