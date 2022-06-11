@extends('layouts.admin')

@section('content')
<h2 class="text-center mb-5  "  style="color:#e84393; ">All Users</h2>

<div class="container ">

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

          @foreach ($users as $user)
 
            {{-- @foreach($users as $key => $user) --}}
                
           
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>




            @if ($user->role_id == 1)
            <td  class="d-flex">  
          
             <a href="{{ route('users.show', $user->id) }}"   class="btn btn-primary me-2"> show </a> 
           <a href="{{route('users.edit',$user->id) }}"   class="btn btn-warning  me-2"> edit</a>  
           <form method="post"     action="{{route('users.destroy',$user->id)}}">
            @csrf
             @method('DELETE')
             {{-- <a href="{{route('users.destroy',$user->id) }}"   class="btn btn-danger"> delete </a>  --}}
            <input  type="submit"    class="btn  btn-danger"   value="delete">
            <a href="{{route('users.showposts', $user->id) }}"   class="btn btn-dark  ms-2"> Posts</a> 

           </form>  
           @endif

            @if ($user->role_id == 2)
            <td  class="d-flex">  
          
             <a href="{{ route('users.show', $user->id) }}"   class="btn btn-primary me-2"> show </a> 
           <a href="{{route('users.edit',$user->id) }}"   class="btn btn-warning  me-2"> edit</a>  
         
 
           @endif
      
         
          
         
            </td>
         
          </tr>
        
          @endforeach
        </tbody>
     
      </table>
      <a href="{{route('users.create')}}"   class="btn btn-primary mb-5"> Add User</a> 

 



































</div>


@endsection