@extends('dashboard.sidebar')
@section('admincontent')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="d-flex justify-content-between align-items-center">
            <h1>Event List</h1>
            <div class=""><a class="btn btn-info" href="/eventform"><i class="bi bi-plus-circle"></i>Add Event</a></div>
    </div>
            

<table class="table align-middle">
    <thead>
        <th>Event id</th>
        <th>Event Name</th>
        <th>Description</th>
        <th>Event Date</th>
        <th>Event Picture</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @if(count($events)>0)
            @foreach ($events as $event)
                <tr >
                    <td >{{$event->id}}</td>
                    <td>{{$event->event_name}}</td>
                    <td>{{Str::limit($event->description,20)}}</td>
                    <td>{{$event->event_date}}</td>
                    <td><img src="{{asset($event->event_picture)}}" alt="..." width="150px"></td>
                    <td><a href="{{route('delete',['id'=>$event->id])}}" class="mx-1 btn btn-danger"><i class="bi bi-trash"></i></a><a href="{{route('update',['id'=>$event->id])}}" class="mx-1 btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot class="card-footer">
       <tr class=" d-flex justify-content-center">
           <th >{!! $events->links()!!}</th>
        </tr> 
    </tfoot>
</table>
@endsection