@extends('layouts.main')
@section('content')

    <a href="{{ route('task.create') }}">New Task</a>

    @foreach ($tasks as $task)
        <div> {{ $task->title }} </div>

        <div>
            <a href="{{ route('task.show', $task->id) }}">Details</a>
        </div>

        <div>
            <a href="{{ route('task.edit', $task->id) }}">Edit</a>
        </div>
        <form action="{{ route('task.destroy', $task->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    @endforeach

@endsection
