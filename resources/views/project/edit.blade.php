@extends('layouts.main')
@section('content')

Edit project

<form action="{{ route('project.update', $project->id) }}" method="POST">
    @csrf
    @method('patch')
    <div class="row">
        <div class="input-group">
            <input type="text" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>
    </div>

    <div class="row">
        <div class="input-group">
            <input type="text" name="description" placeholder="Description" value="{{ $project->description }}">
        </div>
    </div>

    <div class="row">
      <div class="input-group">
          <input type="date" name="deadline" placeholder="Deadline" value="{{ $project->deadline }}">
      </div>
  </div>

    <div class="row">
        <div class="input-group">
            <select type="text" name="status" placeholder="Status">
                @foreach ($statuses as $status)
                    <option {{ $status === $project->status ? ' selected' : '' }}
                                        value="{{ $status }}">{{ $status }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
      <div class="input-group">
          <select type="text" name="worker_id" placeholder="Worker">
              @foreach ($workers as $worker)
                <option {{ $worker->name == $project->worker->name ? ' selected' : '' }}
                            value="{{ $worker->id }}">{{ $worker->name }}</option>
              @endforeach
          </select>
      </div>
  </div>

  <div class="row">
      <div class="input-group">
          <select type="text" name="client_id" placeholder="Client">
              @foreach ($clients as $client)
              <option {{ $client->name === $project->client->name ? ' selected' : '' }}
                value="{{ $client->id }}">{{ $client->name }}</option>
              @endforeach
          </select>
      </div>
  </div>

    <div>
        <button type="submit">Update project</button>
    </div>
  </form>


@endsection
