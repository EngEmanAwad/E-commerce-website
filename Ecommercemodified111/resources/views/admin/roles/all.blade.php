@extends('layouts.admin')

@section('content')
<h2 class="text-center mb-5  "  style="color:#e84393; ">All Roles</h2>

<div class="container">

     <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">created at</th>
            <th scope="col">control</th>
          </tr>
        </thead>
        <tbody>
            @foreach($roles as $key => $role)
                
           
          <tr>
            <th scope="row">{{$role->id}} </th>
            <td>{{$role->name}}</td>
            <td>{{$role->created_at}}</td>
            <td  class="d-flex">      
             <a href="{{ route('roles.show', $role->id) }}"   class="btn btn-primary me-2"> show </a> 
       
            </td>
         
          </tr>
          @endforeach
        </tbody>
     
      {{-- </table>
      <a href="{{route('users.create')}}"   class="btn btn-primary"> Add User</a>  --}}

 







</div>


@endsection