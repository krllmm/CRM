@extends('layouts.main')
@section('content')

    @foreach ($tasks as $task)
        <div> {{ $task->title }} </div>
    @endforeach

@endsection
