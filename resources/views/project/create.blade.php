<link rel="stylesheet" href="{{ asset('css/project/style.css') }}">
@extends('layouts.main')

@section('title')
    Projects - create
@endsection

@section('content')

<h1 class="header">Create project</h1>

<div class="form_container">

    <form action="{{ route('project.store') }}" method="POST">
        @csrf
        <label for="title">Project title</label>
        <input name="title" type="text" autocomplete="off" placeholder="Enter project`s title">

        <label for="description">Description</label>
        <input name="description" type="text" autocomplete="off" placeholder="Enter project`s description here">

        <label for="deadline">Deadline</label>
        <input name="deadline" type="date" autocomplete="off">

        <label for="status">Status</label>
        <select type="text" name="status" placeholder="Status">
            <option>To-do</option>
            <option>In progress</option>
            <option>Done</option>
            <option>Delayed</option>
        </select>

        <label for="worker_id">Worker</label>
        <select type="text" name="worker_id" placeholder="Choose a worker">
            @foreach ($workers as $worker)
                <option value="{{ $worker->id }}">{{ $worker->name }}</option>
            @endforeach
        </select>

        <label for="client_id">Client</label>
        <select type="text" name="client_id" placeholder="Choose a client">
            @foreach ($clients as $client)
                <option value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach
        </select>

      <div>
          <button type="submit"><span>Create</span></button>
      </div>
    </form>

</div>

@endsection
