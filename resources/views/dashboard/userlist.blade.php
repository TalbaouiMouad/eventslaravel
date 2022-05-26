@extends('dashboard.sidebar')
@section('admincontent')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="d-flex justify-content-between align-items-center">
            <h1>Users List</h1>
            <div class=""><a class="btn btn-info" href="/userform"><i class="bi bi-plus-circle"></i>Add User</a></div>
    </div>
            

<table class="table">
    <thead>
        <th>User id</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @if(count($users)>0)
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('deleteuser',['id'=>$user->id])}}" class="mx-1 btn btn-danger"><i class="bi bi-trash"></i></a><a class="mx-1 btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@endsection