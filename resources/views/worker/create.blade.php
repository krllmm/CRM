@extends('layouts.main')
@section('content')

  Add worker to database

  <form action="{{ route('worker.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="input-group">
            <input type="text" name="name" placeholder="Name">
        </div>
    </div>

    <div class="row">
        <div class="input-group">
            <input type="email" name="email" placeholder="Email">
        </div>
    </div>

    <div>
        <button type="submit">Create</button>
    </div>
  </form>


@endsection
