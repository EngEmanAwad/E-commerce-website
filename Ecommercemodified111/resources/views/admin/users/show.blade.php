@extends('layouts.admin')

@section('content')

<div class="container  w-50 mt-5">
   

        <form  method="post"     action="{{route('users.store')}}">
        @csrf 
        <div class="mb-3  mt-5">
            <h1 style=" color:rgb(192, 28, 118);" class="text-center" > Show {{$user->name}} Information</h1>

          <label for="exampleInputEmail1" class="form-label">User Name </label>
          <input type="text" class="form-control "  name="name" value="{{$user->name}}" readonly>
 

          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control " name="email" value="{{$user->email}}" readonly>
      
        
        
      
        
      </form>





</div>


@endsection