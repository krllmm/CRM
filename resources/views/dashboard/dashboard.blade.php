<link rel="stylesheet" href="{{ asset('css/table/style.css') }}">
@extends('layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')


<h1 class="header">Dashboard</h1>

<div class="table_container">

    <h2>Projects in progress</h2>

    <table>
        <thead>
            <tr class="head">
                <th class="column1">Title</th>
                <th class="column2">Description</th>
                <th class="column3">Deadline</th>
                <th class="column4">User</th>
                <th class="column5">Client</th>
                <th class="column6">Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>
                    <a href="{{ route('project.show', $project->id) }}">{{ $project->title }}</a>
                    <a href="{{ route('project.edit', $project->id) }}">
                        <svg id="edit_icon" width="14" height="14" viewBox="0 0 24 24">
                            <path d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z"></path>
                        </svg>
                    </a>
                </td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->deadline }}</td>
                <td>{{ $project->user->name }}</td>
                <td>{{ $project->client->name }}</td>
                <td>{{ $project->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>



<div class="table_container">

    <h2>Recent clients</h2>

    <table>
        <thead>
            <tr class="head">
                <th class="column1">Name</th>
                <th class="column2">Company</th>
                <th class="column3">Address</th>
                <th class="column4">Client since</th>
            </tr>
        </thead>

        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>
                    <a href="{{ route('project.show', $client->id) }}">{{ $client->name }}</a>
                    <a href="{{ route('project.edit', $client->id) }}">
                        <svg id="edit_icon" width="14" height="14" viewBox="0 0 24 24">
                            <path d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z"></path>
                        </svg>
                    </a>
                </td>
                <td>{{ $client->company }}</td>
                <td>{{ $client->address }}</td>
                <td>{{ $client->created_at->format('d.m.Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<div class="table_container">

    <h2>Upcoming tasks</h2>

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
                    <a href="{{ route('task.show', $task->id) }}">{{ $task->title }}</a>
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

@endsection
