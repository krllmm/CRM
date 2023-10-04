<link rel="stylesheet" href="{{ asset('css/client/style.css') }}">
@extends('layouts.main')

@section('title')
    Clients - create
@endsection

@section('content')

<h1 class="header">Create client</h1>

<div class="form_container">

    <form action="{{ route('client.store') }}" method="POST">
        @csrf
        <label for="name">Client`s name</label>
        <input name="name" type="text" autocomplete="off" placeholder="Enter client`s name">

        <label for="company">Company</label>
        <input name="company" type="text" autocomplete="off" placeholder="Company they are working in">

        <label for="address">Address</label>
        <input name="address" type="text" autocomplete="off" placeholder="Adress of their company">

        <div>
            <button type="submit"><span>Create</span></button>
        </div>
    </form>

</div>

@endsection
