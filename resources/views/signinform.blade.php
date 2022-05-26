@extends('app')
@section('content')
<div class="card container  mx-auto mt-3">
    <div class="card-header text-center">
        <h1>Sign In</h1>
    </div>
    <div class="card-body">
       <form class="form " action="/login" method="POST">
    @csrf
    <div>
        <label class="form-label" for="email" '>Email</label>
        <input class="form-control" type="email" id="email" name="email"  value={{old('email')}}>
    </div>
    <div>
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password">
    </div>
    <button class="btn btn-success mt-2">Login</button>
</form> 

    @error('email')
        <div class="card-footer alert alert-danger mt-1">{{ $message }}</div>
        @enderror

    </div>
</div>
@endsection