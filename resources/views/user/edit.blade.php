@extends('layouts.main')
@section('content')

    Edit user`s information

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('patch')
        <div class="row">
            <div class="input-group">
                <input type="text" name="name" placeholder="Name" value="{{ $user->name }}">
            </div>
        </div>

        <div class="row">
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" value="{{ $user->email }}">
            </div>
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
      </form>

@endsection
