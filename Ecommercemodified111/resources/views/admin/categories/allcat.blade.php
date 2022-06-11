@extends('layouts.admin')

@section('content')
<h2 class="text-center mb-5  "  style="color:#e84393; ">All categories</h2>

<div class="container">

     <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Category Name</th>
              <th scope="col">created at</th>
              <th scope="col">control</th>
            </tr>
          </thead>
        <tbody>
          @foreach($cats as  $cat)
            <tr>
            <th scope="row">{{$cat->id}} </th>
            <td>{{$cat->catName}}</td>
            <td>{{$cat->created_at}}</td>
            <td  class="d-flex">      
             <a href="{{ route('category.show', $cat->id) }}"   class="btn btn-primary me-2"> show </a> 
       
            </td>
         
          </tr>
          @endforeach
        </tbody>
     
      {{-- </table>
      <a href="{{route('users.create')}}"   class="btn btn-primary"> Add User</a>  --}}

 





</div>


@endsection




