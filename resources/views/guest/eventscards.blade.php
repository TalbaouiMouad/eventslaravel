@extends('app')
@section('content')
@if(count($events)>0)
<div class="d-flex flex-wrap justify-content-between">
@foreach ($events as $event)
<div class="align-self-stretch mt-5">
<div class="card" style="width: 18rem">
    <img src="{{asset($event->event_picture)}}" class="card-img-top" width="22rem" height="180rem" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$event->event_name}}</h5>
      <p class="card-text">{{Str::limit($event->description,20)}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
@endforeach
</div>
@endif
@endsection