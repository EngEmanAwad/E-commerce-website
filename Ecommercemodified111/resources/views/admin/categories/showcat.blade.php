@extends('layouts.admin')

@section('content')
<h2 class="text-center mb-5  "  style="color:#e84393; ">Show All products </h2>





<div class="container">

     <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ProductName</th>
            <th scope="col">productDesciption</th>
            <th scope="col">productQuantity</th>
            <th scope="col">productPrice</th>
            <th scope="col">created at</th>
          </tr>
        </thead>
        <tbody>
            @foreach($cats_product as $cat_product) 
                
           
          <tr>
            <th scope="row">{{$cat_product->id}}</th>
            <td>{{$cat_product->productName}}</td>
            <td>{{$cat_product->desc}}</td>
            <td>{{$cat_product->quantity}}</td>
            <td>{{$cat_product->price}}</td>
            <td>{{$cat_product->created_at}}</td>
            <td  class="d-flex">      
         
            </td>
        
          </tr>
          @endforeach
        </tbody>
     
      </table>
      <a href="{{route('products.create')}}"   class="btn btn-primary"> Add product</a> 

 







</div>


@endsection