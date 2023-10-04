<link rel="stylesheet" href="{{ asset('css/worker/style.css') }}">
@extends('layouts.main')

@section('title')
    Workers - create
@endsection

@section('content')

<h1 class="header">Create worker</h1>

<div class="form_container">

    <form action="{{ route('worker.store') }}" method="POST">
        @csrf
        <label for="name">Worker`s name</label>
        <input name="name" type="text" autocomplete="off" placeholder="Enter worker`s name">

        <label for="email">Email</label>
        <input name="email" type="text" autocomplete="off" placeholder="Worker`s email">

        <div>
            <button type="submit"><span>Create</span></button>
        </div>
    </form>

</div>

@endsection
