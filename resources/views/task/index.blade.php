<link href="{{ asset('css/table/style.css') }}" rel="stylesheet">
@extends('layouts.main')
@section('title')
    Tasks
@endsection

@section('content')

<h1 class="header">Tasks</h1>

<div class="table_container">

    <table>
        <thead>
            <tr>
                <th class="column1">Title</th>
                <th class="column2">Description</th>
                <th class="column3">Creation date</th>
                <th class="column4">Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>
                    {{ $task->title }}
                    <a href="{{ route('task.edit', $task->id) }}">
                        <svg id="edit_icon" width="14" height="14" viewBox="0 0 24 24">
                            <path d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z"></path>
                        </svg>
                    </a>
                </td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->created_at->format('Y-m-d') }}</td>
                <td>{{ $task->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<div class="button_container">
    <a class="button-61" href="{{ route('task.create') }}">New task</a>
</div>




{{--
    <h1 class="header">Manage tasks</h1>

    <a class="button-61" href="{{ route('task.create') }}">New task</a>

<div class="container">
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
</div> --}}


@endsection
