@extends('layouts.admin')

@section('content')

<div class="container  w-50 mt-5">
   

        <form  method="post"     action="{{route('products.store')}}">
        @csrf 
        <div class="mb-3  mt-5">
            <h1 style=" color:rgb(192, 28, 118);" class="text-center" > Show {{$product->productName}} Information</h1>

          <label for="exampleInputEmail1" class="form-label">Product Name </label>
          <input type="text" class="form-control "  name="productName" value="{{$product->productName}}" readonly>
 

          <label for="exampleInputEmail1" class="form-label">Product Description</label>
          <input type="text" class="form-control " name="desc" value="{{$product->desc}}" readonly>

          <label for="exampleInputEmail1" class="form-label mt-4">Product Image</label>
          <div class="mb-3">
            <img src="{{asset('img')}}/{{$product->img}}"  height="70vh" width="70vw">
          
          </div>
      
      
          <label for="exampleInputEmail1" class="form-label">Product Description</label>
          <input type="text" class="form-control " name="quantity" value="{{$product->quantity}}" readonly>
          
          <label for="exampleInputEmail1" class="form-label">Product Description</label>
          <input type="text" class="form-control " name="price" value="{{$product->price}}" readonly>

      


        
      
        
      </form>





</div>


@endsection