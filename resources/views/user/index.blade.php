@extends('layouts.main')
@section('content')

    <a href="{{ route('user.create') }}">Add user to database</a>

    @foreach ($users as $user)
        <div> {{ $user->name }} </div>

        <div>
            <a href="{{ route('user.show', $user->id) }}">Details</a>
        </div>

        <div>
            <a href="{{ route('user.edit', $user->id) }}">Edit</a>
        </div>
        <form action="{{ route('user.destroy', $user->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    @endforeach

@endsection
