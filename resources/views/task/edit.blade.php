<link rel="stylesheet" href="{{ asset('css/task/index.css') }}">
@extends('layouts.main')

@section('title')
    Tasks - edit {{ $task->title }}
@endsection

@section('content')

<h1 class="header">Edit task</h1>

<div class="form_container">

    <form action="{{ route('task.update', $task->id) }}" method="POST">
        @csrf
        @method('patch')

        <label for="title">Task title</label>
        <input name="title" type="text" autocomplete="off" placeholder="Enter task`s title" value="{{ $task->title }}">

        <label for="description">Description</label>
        <input name="description" type="text" autocomplete="off" placeholder="Enter task`s description here" value="{{ $task->description }}">

        <label for="status">Status</label>
        <select type="text" name="status" placeholder="Status">
            @foreach ($statuses as $status)
                <option {{ $status === $task->status ? ' selected' : '' }}
                           value="{{ $status }}">{{ $status }}</option>
            @endforeach
        </select>

      <div>
          <button type="submit"><span>Update</span></button>
      </div>
    </form>

</div>

@endsection




{{-- @extends('layouts.main')
@section('content')

    Edit task

    <form action="{{ route('task.update', $task->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="row">
            <div class="input-group">
                <input type="text" name="title" placeholder="Title" value="{{ $task->title }}">
            </div>
        </div>

        <div class="row">
            <div class="input-group">
                <input type="text" name="description" placeholder="Description" value="{{ $task->description }}">
            </div>
        </div>

        <div class="row">
            <div class="input-group">
                <select type="text" name="status" placeholder="Status">
                    @foreach ($statuses as $status)
                        <option {{ $status === $task->status ? ' selected' : '' }}
                                                value="{{ $status }}">{{ $status }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
      </form>


@endsection --}}
