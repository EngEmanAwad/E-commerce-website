@extends('layouts.admin')

@section('content')

<div class="container  w-50 mt-5">
    <h1 class="text-center"> Edit User </h1>

        <form  method="post"     action="{{route('users.update',$user->id)}}">
        @csrf 
        @method('PUT')
        <div class="mb-3  mt-5">
            <h1 style=" color:#6c5ce7;" class="text-center" > Edit User </h1>

          <label for="exampleInputEmail1" class="form-label">User Name </label>
          <input type="text" class="form-control @error('name') is-invalid @enderror"   name="name" value="{{$user->name}}">
          @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

          <label for="exampleInputEmail1" class="form-label mb-3">Email address</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" value="{{$user->email}}">
          @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        
  
      
        <button type="submit" class="btn btn-primary mt-3">Save</button>
      </form>





</div>


@endsection