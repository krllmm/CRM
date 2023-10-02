@extends('layouts.main')
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

@endsection
