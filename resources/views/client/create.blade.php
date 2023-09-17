@extends('layouts.main')
@section('content')

  Add client to database

  <form action="{{ route('client.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="input-group">
            <input type="text" name="name" placeholder="Name">
        </div>
    </div>

    <div class="row">
        <div class="input-group">
            <input type="text" name="company" placeholder="Company">
        </div>
    </div>

    <div class="row">
        <div class="input-group">
            <input type="text" name="address" placeholder="Address">
        </div>
    </div>
    <div>
        <button type="submit">Create</button>
    </div>
  </form>


@endsection
