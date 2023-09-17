@extends('layouts.main')
@section('content')

    <a href="{{ route('client.create') }}">Add client to database</a>

    @foreach ($clients as $client)
        <div> {{ $client->name }} </div>
        <div>
            <a href="{{ route('client.edit', $client->id) }}">Edit</a>
        </div>
        <form action="{{ route('client.destroy', $client->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete</button>
        </form>
    @endforeach

@endsection
