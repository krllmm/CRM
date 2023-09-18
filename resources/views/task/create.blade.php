@extends('layouts.main')
@section('content')

    Create Task

    <form action="{{ route('task.store') }}" method="POST">
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
                <select type="text" name="status" placeholder="Status">
                    <option>To-do</option>
                    <option>In progress</option>
                    <option>Done</option>
                    <option>Delayed</option>
                </select>
          </div>
      </div>
      <div>
          <button type="submit">Create</button>
      </div>
    </form>



@endsection
