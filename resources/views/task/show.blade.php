@extends('layouts.main')
@section('content')

    Task details

    <div>
        {{ $task->title }}
    </div>
    <div>
        {{ $task->description }}
    </div>
    <div>
        {{ $task->status }}
    </div>


@endsection
