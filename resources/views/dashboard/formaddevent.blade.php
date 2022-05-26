@extends('dashboard.sidebar')
@section('admincontent')
<div class="container mt-3">
    <div class="card">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card-title text-center bg-success text-light">
        <h1>Add Event</h1>
        </div>
        <div class="card-body">
            <form action="/addevent" enctype="multipart/form-data" method="POST">
                @csrf
        <div class="form-group">
            <label class="form-label" for="event_name">Event Name</label>
            <input class="form-control" type="text" id="event_name" name="event_name">
            @error('event_name')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="description">Event Description</label>
            <textarea class="form-control"  id="description" name="description"></textarea>
            @error('description')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="event_date">Event date</label>
            <input class="form-control" type="date" id="event_date" name="event_date">
            @error('event_date')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="event_picture">Event picture</label>
            <input class="form-control" type="file" id="event_picture" name="event_picture">
            @error('event_picture')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-success mt-1">Add Event</button>
    </form>
            </div>
        </div>
</div>
@endsection