@extends('layouts.main')
@section('content')

<a href="{{ route('project.create') }}">New Project</a>

@foreach ($projects as $project)
    <div> {{ $project->title }} </div>

    <div>
        <a href="{{ route('project.show', $project->id) }}">Details</a>
    </div>

    <div>
        <a href="{{ route('project.edit', $project->id) }}">Edit</a>
    </div>
    <form action="{{ route('project.destroy', $project->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
@endforeach

@endsection
