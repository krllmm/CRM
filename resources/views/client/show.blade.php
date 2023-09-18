@extends('layouts.main')
@section('content')

    Client`s details
    <div>
        {{ $client->name }}
    </div>
    <div>
        {{ $client->company }}
    </div>

    <div>
        {{ $client->address }}
    </div>

@endsection
