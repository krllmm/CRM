<link rel="stylesheet" href="{{ asset('css/table/style.css') }}">
@extends('layouts.main')

@section('title')
    Workers
@endsection

@section('content')

<h1 class="header">Workers</h1>

<div class="table_container">

    <table>
        <thead>
            <tr>
                <th class="column1">Name</th>
                <th class="column2">Email</th>
                <th class="column3">Member since</th>
            </tr>
        </thead>

        <tbody>
            @foreach($workers as $worker)
            <tr>
                <td>
                    <a>{{ $worker->name }}</a>
                    @if(Auth::check())
                        <a href="{{ route('worker.edit', $worker->id) }}">
                            <svg id="edit_icon" width="14" height="14" viewBox="0 0 24 24">
                                <path fill="#fff" d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z"></path>
                            </svg>
                        </a>
                    @endif
                </td>
                <td>{{ $worker->email }}</td>
                <td>{{ $worker->created_at->format('d.m.Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@if(Auth::check())
    <div class="button_container">
        <a class="button-61" href="{{ route('worker.create') }}">New worker</a>
    </div>
@endif


@endsection
