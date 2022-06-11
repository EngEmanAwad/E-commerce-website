
 @extends('layouts.admin')

 @section('content')
 <h2 class="text-center mb-5 mt-5 "  style="color:#e84393; ">All Products</h2>
 
 <div class="container">
 
      <table class="table">
         <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">productName</th>
            <th scope="col">productDescription</th>
            <th scope="col">productimage</th>
            <th scope="col">productQuantity</th>
            <th scope="col">productPrice</th>
            <th scope="col">category</th>
          </tr>
         </thead>
         <tbody>
             @foreach($products as  $product)
                 
            
           <tr>
            <th scope="row"></th>
            <td>{{$product->productName}}</td>
            <td>{{$product->desc}}</td>
            
            <td><img src="{{asset('img')}}/{{$product->img}}"  height="70vh" width="70vw"></td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->cat_id}}</td>
            <td>{{$product->created_at}}</td>

             <td  class="d-flex">  
                   
              <a href="{{ route('products.show', $product->id) }}"   class="btn btn-primary me-2"> showProduct</a> 
            <a href="{{route('products.edit',$product->id) }}"   class="btn btn-warning  me-2"> editProduct</a>  
           

            <form method="post"     action="{{route('products.destroy',$product->id)}}">
              @csrf
               @method('DELETE')
               {{-- <a href="{{route('users.destroy',$user->id) }}"   class="btn btn-danger"> delete </a>  --}}
              <input  type="submit"    class="btn  btn-danger"   value="delete">
            {{-- <input  type="submit"    class="btn  btn-danger"   value="delete"> --}}
             {{-- <a href="{{route('users.showposts', $user->id) }}"   class="btn btn-dark  ms-2"> Posts</a>   --}}
 
            </form>

            <a href="{{route('products.showdetails',$product->id)}}"   class="btn btn-primary mb-5"> Add to cart</a> 
             </td>
         
           </tr>
           @endforeach
         </tbody>
      
       </table>
       <a href="{{route('products.create')}}"   class="btn btn-primary mb-5"> Add Product</a> 
 
      
 

 
 </div>
 
 
 @endsection 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
























