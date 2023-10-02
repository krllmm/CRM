@extends('layouts.main')
@section('content')

Create project

    <form action="{{ route('project.store') }}" method="POST">
      @csrf
      <div class="row">
          <div class="input-group">
              <input type="text" name="title" placeholder="Title">
          </div>
      </div>

      <div class="row">
          <div class="input-group">
              <input type="text" name="description" placeholder="Description">
          </div>
      </div>

      <div class="row">
        <div class="input-group">
            <input type="date" name="deadline" placeholder="Deadline">
        </div>
    </div>

      <div class="row">
          <div class="input-group">
                <select type="text" name="status" placeholder="Status">
                    <option>To-do</option>
                    <option>In progress</option>
                    <option>Done</option>
                    <option>Delayed</option>
                </select>
          </div>
      </div>

      <div class="row">
        <div class="input-group">
            <select type="text" name="worker_id" placeholder="Worker">
                @foreach ($workers as $worker)
                    <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="input-group">
            <select type="text" name="client_id" placeholder="Client">
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

      <div>
          <button type="submit">Create</button>
      </div>
    </form>

@endsection
