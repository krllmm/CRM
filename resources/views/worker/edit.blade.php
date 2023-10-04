<link rel="stylesheet" href="{{ asset('css/worker/style.css') }}">
@extends('layouts.main')

@section('title')
    Workers - edit {{ $worker->name }}
@endsection

@section('content')

<h1 class="header">Edit worker</h1>

<div class="form_container">

    <form action="{{ route('worker.update', $worker->id) }}" method="POST">
        @csrf
        @method('patch')
        <label for="name">Worker`s name</label>
        <input name="name" type="text" autocomplete="off" placeholder="Enter worker`s name" value="{{ $worker->name }}">

        <label for="email">Email</label>
        <input name="email" type="text" autocomplete="off" placeholder="Worker`s email" value="{{ $worker->email }}">

        <div>
            <button type="submit"><span>Update</span></button>
        </div>
    </form>

</div>

@endsection

{{-- @extends('layouts.main')
@section('content')

    Edit worker`s information

    <form action="{{ route('worker.update', $worker->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="row">
            <div class="input-group">
                <input type="text" name="name" placeholder="Name" value="{{ $worker->name }}">
            </div>
        </div>

        <div class="row">
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" value="{{ $worker->email }}">
            </div>
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
      </form>

@endsection --}}
