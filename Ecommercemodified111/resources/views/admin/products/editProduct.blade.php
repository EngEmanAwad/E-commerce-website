@extends('layouts.admin')

@section('content')

<div class="container  w-50 mt-5">
    <h1 class="text-center"> Edit a product </h1>

        <form  method="post"     action="{{route('products.update',$product->id)}}">
        @csrf 
        @method('PUT')
        <div class="mb-3  mt-5">
            <h1 style=" color:#6c5ce7;" class="text-center" > Edit Product </h1>

          <label for="exampleInputEmail1" class="form-label">Product Name </label>
          <input type="text" class="form-control @error('productName') is-invalid @enderror"   name="productName" value="{{$product->productName}}">
          @error('productName')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

          <label for="exampleInputEmail1" class="form-label mb-3">Product Description</label>
          <input type="text" class="form-control @error('desc') is-invalid @enderror"  name="desc" value="{{$product->desc}}">
          @error('desc')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<label for="exampleInputEmail1" class="form-label mt-4">Product Image</label>
<div class="mb-3">
<input type="file" class="form-control"   name="image"   >

</div>

<label for="exampleInputEmail1" class="form-label">Product Quantity </label>
<input type="text" class="form-control @error('quantity') is-invalid @enderror"   name="quantity" value="{{$product->quantity}}">
@error('quantity')
<div class="alert alert-danger">{{ $message }}</div>
@enderror


<label for="exampleInputEmail1" class="form-label">Product Price </label>
<input type="text" class="form-control @error('price') is-invalid @enderror"   name="price" value="{{$product->price}}">
@error('price')
<div class="alert alert-danger">{{ $message }}</div>
@enderror


<div class="mb-3">
  <select class="form-select mt-4" aria-label="Default select example"  name="cat_id">
    <option selected>Select Product Category</option>
@foreach($categories as $category)
<option value="{{$category->id}}">{{$category->catName}}</option>
@endforeach
    
  </select>
</div>












{{-- <div class="mb-3">
    <select class="form-select mt-4" aria-label="Default select example"  name="cat_id">
      <option selected>Edit Product Category</option>
  @foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->catName}}</option>
  @endforeach
      
    </select>
  </div> --}}


        
  
      
        <button type="submit" class="btn btn-primary mt-3">Edit</button>
      </form>





</div>


@endsection