@extends('dashboard.sidebar')
@section('admincontent')
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-center bg-success text-light">
        <h1>Add Users</h1>
        </div>
        <div class="card-body">
            <form action="/adduser" method="POST">
                @csrf
        <div class="form-group">
            <label class="form-label" for="user_name">Name</label>
            <input class="form-control" type="text" id="user_name" name="user_name">
            @error('user_name')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="user_email">Email</label>
            <input class="form-control" type="email" id="user_email" name="user_email">
            @error('user_email')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="user_password">Password</label>
            <input class="form-control" type="password" id="user_password" name="user_password">
            @error('user_password')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="c_password">Confirme password</label>
            <input class="form-control" type="password" id="c_password" name="c_password">
            @error('c_password')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-success mt-1">Add User</button>
    </form>
            </div>
        </div>
</div>
@endsection