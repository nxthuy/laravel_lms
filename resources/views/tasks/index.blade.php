@extends('layouts.2_columns')

@section('content')
    @include('layouts.partials.alerts.success')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                @foreach($tasks as $task)
                    <h3>{{ $task->title }}</h3>
                    <p>{{ $task->description }}</p>
                    <p>
                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">View Task</a>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
                    </p>
                @endforeach
            </div>
        </div>
    </div>
@endsection