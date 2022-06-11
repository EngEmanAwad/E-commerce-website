@extends('layouts.admin')

@section('content')

<div class="container  w-50 mt-5">
  

        <form  method="post"     action="{{route('users.store')}}">
        @csrf 
        <div class="mb-3  mt-5">
            <h1 style=" color:#6c5ce7;" class="text-center" > Create New user </h1>

          <label for="exampleInputEmail1" class="form-label">User Name </label>
          <input type="text" class="form-control @error('name') is-invalid @enderror"   name="name">
          @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email">
          @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror"   name="password">
        </div>
        @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="mb-3">
  <select class="form-select" aria-label="Default select example"  name="role_id">
    <option selected>Select your Role</option>
@foreach($roles as $role)
<option value="{{$role->id}}">{{$role->name}}</option>
@endforeach
    
  </select>
</div>


      
        <button type="submit" class="btn btn-primary">Save</button>
      </form>

</div>


@endsection