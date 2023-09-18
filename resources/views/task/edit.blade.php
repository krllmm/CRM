@extends('layouts.main')
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


@endsection
