@extends('layouts.admin')

@section('content')

<div class="container  w-50 mt-5">
  

        <form  method="post"     action="{{route('posts.store')}}">
        @csrf 
        <div class="mb-3  mt-5">
            <h1 style=" color:#6c5ce7;" class="text-center" > Create New Post </h1>

          <label for="exampleInputEmail1" class="form-label ">title </label>
          <input type="text" class="form-control @error('title') is-invalid @enderror"   name="title">
          @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

        </div>

<div class="mb-3">
    <div class="form-floating">
        <textarea class="form-control mt-4" placeholder="Leave a description here" id="floatingTextarea" name="desc"></textarea>
        <label for="floatingTextarea">description</label>
      </div>


   

</div>


{{-- <a href="{{route('posts.create')}}"   class="btn btn-dark"> Add Post</a>  --}}
      
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

</div>


@endsection