@extends('layouts.admin')

@section('content')
<h2 class="text-center mb-5  "  style="color:#e84393; ">All Posts</h2>

<div class="container">

     <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">author</th>
            <th scope="col">created_at</th>
          </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                
           
          <tr>
            <th scope="row"></th>
            <td>{{$post->title}}</td>
            <td>{{$post->desc}}</td>
            <td>{{$post->author}}</td>
            <td>{{$post->created_at}}</td>
            
        
          </tr>
          @endforeach
        </tbody>
     
      </table>
      <a href="{{route('posts.create')}}"   class="btn btn-dark"> Add post</a> 


</div>


@endsection