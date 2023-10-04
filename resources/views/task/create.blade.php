<link rel="stylesheet" href="{{ asset('css/task/index.css') }}">
@extends('layouts.main')

@section('title')
    Tasks - create
@endsection

@section('content')

<h1 class="header">Create task</h1>

<div class="form_container">

    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        <label for="title">Task title</label>
        <input name="title" type="text" autocomplete="off" placeholder="Enter task`s title">

        <label for="description">Description</label>
        <input name="description" type="text" autocomplete="off" placeholder="Enter task`s description here">

        <label for="status">Status</label>
        <select type="text" name="status" placeholder="Status">
            <option>To-do</option>
            <option>In progress</option>
            <option>Done</option>
            <option>Delayed</option>
        </select>

      <div>
          <button type="submit"><span>Create</span></button>
      </div>
    </form>

</div>

@endsection

