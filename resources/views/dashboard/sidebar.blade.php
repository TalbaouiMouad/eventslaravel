@extends('app')
@section('content')
<div class="row">
<nav class="col-2  d-md-block bg-light sidebar " style="height:100vh;">
    <div class="sticky-top pt-3">
        <ul class="nav flex-column">
            <li class="nav-item"><i class="bi bi-house-door-fill mx-1"></i>Dashboard</li>
            <li class="nav-item"><i class="bi bi-card-checklist mx-1"></i><a href="/eventlist">Events List</a></li>
            <li class="nav-item"><i class="bi bi-person-lines-fill mx-1"></i><a href="{{route('userlist')}}">Users List</a></li>
        </ul>
    </div>
</nav>
    
    <div class="col">
        @yield('admincontent')
    </div>
</div>
@endsection