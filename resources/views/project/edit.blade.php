<link rel="stylesheet" href="{{ asset('css/project/style.css') }}">
@extends('layouts.main')

@section('title')
    Project - edit {{$project->title}}
@endsection

@section('content')

<h1 class="header">Edit project</h1>

<div class="form_container">

    <form action="{{ route('project.update', $project->id) }}" method="POST">
        @csrf
        @method('patch')

        <label for="title">Project title</label>
        <input name="title" type="text" autocomplete="off" placeholder="Enter project`s title" value="{{ $project->title }}">

        <label for="description">Description</label>
        <input name="description" type="text" autocomplete="off" placeholder="Enter project`s description here" value="{{ $project->description }}">

        <label for="deadline">Deadline</label>
        <input name="deadline" type="date" autocomplete="off" value="{{ $project->deadline }}">

        <label for="status">Status</label>
        <select type="text" name="status" placeholder="Status">
            @foreach ($statuses as $status)
                <option {{ $status === $project->status ? ' selected' : '' }}
                           value="{{ $status }}">{{ $status }}</option>
            @endforeach
        </select>

        <label for="worker">Worker</label>
        <select type="text" name="worker" placeholder="Choose a worker">
            @foreach ($workers as $worker)
                <option {{ $worker->name == $project->worker->name ? ' selected' : '' }}
                           value="{{ $worker->id }}">{{ $worker->name }}</option>
            @endforeach
        </select>

        <label for="client">Client</label>
        <select type="text" name="client" placeholder="Choose a client">
            @foreach ($clients as $client)
                <option {{ $client->name === $project->client->name ? ' selected' : '' }}
                            value="{{ $client->id }}">{{ $client->name }}</option>
            @endforeach
        </select>

        <div>
            <button type="submit"><span>Update</span></button>
        </div>
    </form>

</div>

@endsection
