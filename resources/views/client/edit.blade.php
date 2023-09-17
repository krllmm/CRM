@extends('layouts.main')
@section('content')

    Edit client`s information

    <form action="{{ route('client.update', $client->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="row">
            <div class="input-group">
                <input type="text" name="name" placeholder="Name" value="{{ $client->name }}">
            </div>
        </div>

        <div class="row">
            <div class="input-group">
                <input type="text" name="company" placeholder="Company" value="{{ $client->company }}">
            </div>
        </div>

        <div class="row">
            <div class="input-group">
                <input type="text" name="address" placeholder="Address" value="{{ $client->address }}">
            </div>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
      </form>

@endsection
