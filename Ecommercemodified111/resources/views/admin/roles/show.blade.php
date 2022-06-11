@extends('layouts.admin')

@section('content')
<h2 class="text-center mb-5  "  style="color:#e84393; ">All members</h2>

<div class="container">

     <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">UserName</th>
            <th scope="col">Email</th>
            <th scope="col">created at</th>
          </tr>
        </thead>
        <tbody>
            @foreach($roles_user as $role_user)
                
           
          <tr>
            <th scope="row">{{$role_user->id}}</th>
            <td>{{$role_user->name}}</td>
            <td>{{$role_user->email}}</td>
            <td>{{$role_user->created_at}}</td>
            <td  class="d-flex">      
         
            </td>
        
          </tr>
          @endforeach
        </tbody>
     
      </table>
      <a href="{{route('users.create')}}"   class="btn btn-primary"> Add User</a> 

 



































</div>


@endsection