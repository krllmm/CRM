@extends('layouts.main')
@section('content')

    @foreach ($projects as $project)

        <div>
            {{ $project->title }}
        </div>

    @endforeach

@endsection
