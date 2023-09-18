@extends('layouts.main')
@section('content')

Project details

    <div>
        {{ $project->title }}
    </div>
    <div>
        {{ $project->description }}
    </div>

    <div>
        {{ $project->deadline }}
    </div>

    <div>
        {{ $project->status }}
    </div>
    <div>
        {{ $project->user->name }}
    </div>
    <div>
        {{ $project->client->name }}
    </div>

@endsection
