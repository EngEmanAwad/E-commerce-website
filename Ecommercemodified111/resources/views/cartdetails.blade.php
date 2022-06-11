@extends('layouts.admin')

@section('content')


<div class="container  w-50 mt-5">
   

    <form  method=""     action="#">
    @csrf 
    <div class="mb-3  mt-5">
        <h1 style=" color:rgb(192, 28, 118);" class="text-center" > Show {{$products_details->productName}} Information</h1>

      <label for="exampleInputEmail1" class="form-label">Product Name </label>
      <input type="text" class="form-control "  name="product_detail_Name" value="{{$products_details->productName}}">


      <label for="exampleInputEmail1" class="form-label">Product Description</label>
      <input type="text" class="form-control " name="desc_details" value="{{$products_details->desc}}">

      <label for="exampleInputEmail1" class="form-label mt-4">Product Image</label>
      <div class="mb-3"  >
        <img src="{{asset('img')}}/{{$products_details->img}}"  height="70vh" width="70vw">
      
      </div>
  
  
      <label for="exampleInputEmail1" class="form-label">Product Quantity</label>
      <input type="text" class="form-control " name="quantity_details" value="{{$products_details->quantity}}">
      
      <label for="exampleInputEmail1" class="form-label">Product Price</label>
      <input type="text" class="form-control " name="price_details" value="{{$products_details->price}}">



<form     action="  carts.store"          method="POST">
@csrf

<input class="btn  btn-primary mt-4 "     type="submit"     value="Add to cart">

<input class="btn  btn-primary mt-4  ms-5"     type="submit"     value="Buy Now">

{{-- 
      <a href="#"   class="btn btn-primary mb-5 mt-5   me-4"> Add to cart</a> 
 
      <a href="#"   class="btn btn-primary mb-5  mt-5"> Buy Now</a> 
  --}}
  

</form>
    
  </form>





</div>







@endsection