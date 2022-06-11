@extends('layouts.admin')


@section('content')

<div class="container">


    <h1 class="text-center mb-5  "  style="color:#e84393; ">Admin Dashboard</h1>


    {{--start sidebar  --}}

   

    <div class="d-flex flex-column flex-shrink-0 p-3 text-white " style="width: 280px; height:400px; margin-top:-1px;background-color: #273c75;">

      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Home
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Dashboard
          </a>
        </li>
     
        <li>
          <a href="{{route('users.index')}}" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
             All Users
          </a>
        </li>
        <li>
          <a href="{{route('roles.index')}}" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Roles
          </a>
        </li>
        <li>
          <a href="{{route('products.index')}}" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
           All Products
          </a>
        </li>
        <li>
          <a href="{{route('category.index')}}" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
           All Categories
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Orders
          </a>
        </li>
      </ul>
      <hr>
    




                                {{--End sidebar  --}}










































































</div>


@endsection