<link rel="stylesheet" href="{{ asset('css/client/style.css') }}">
@extends('layouts.main')

@section('title')
    Clients - edit {{ $client->name }}
@endsection

@section('content')

<h1 class="header">Edit client</h1>

<div class="form_container">

    <form action="{{ route('client.update', $client->id) }}" method="POST">
        @csrf
        @method('patch')
        <label for="name">Client`s name</label>
        <input name="name" type="text" autocomplete="off" placeholder="Enter client`s name" value="{{ $client->name }}">

        <label for="company">Company</label>
        <input name="company" type="text" autocomplete="off" placeholder="Company they are working in" value="{{ $client->company }}">

        <label for="address">Address</label>
        <input name="address" type="text" autocomplete="off" placeholder="Adress of their company" value="{{ $client->address }}">

        <div>
            <button type="submit"><span>Update</span></button>
        </div>
    </form>

</div>

@endsection
