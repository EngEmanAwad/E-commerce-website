@extends('layouts.admin')

@section('content')

<div class="container  w-50 mt-5">
  

        <form  method="post"     action="{{route('products.store')}}"    enctype="multipart/form-data">
        @csrf 
        <div class="mb-3  mt-5">
            <h1 style=" color:#6c5ce7;" class="text-center" > Create New product </h1>

            <label for="exampleInputEmail1" class="form-label">product Name </label>
            <input type="text" class="form-control @error('productName') is-invalid @enderror"   name="productName">
            @error('productName')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror

<label for="exampleInputEmail1" class="form-label mt-4">Product Description</label>
<input type="text" class="form-control @error('desc') is-invalid @enderror"   name="desc">
@error('desc')
<div class="alert alert-danger">{{ $message }}</div>
@enderror


<label for="exampleInputEmail1" class="form-label mt-4">Product Image</label>
<div class="mb-3">
<input type="file" class="form-control"   name="image">

</div>



<label for="exampleInputEmail1" class="form-label mt-4">Product Quantity</label>
<input type="text" class="form-control @error('quantity') is-invalid @enderror"   name="quantity">
@error('quantity')
<div class="alert alert-danger">{{ $message }}</div>
@enderror


<label for="exampleInputEmail1" class="form-label mt-4">Product Price</label>
<input type="text" class="form-control @error('price') is-invalid @enderror"   name="price">
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


      
        <button type="submit" class="btn btn-primary mt-4">Save</button>
      </form>

</div>


@endsection