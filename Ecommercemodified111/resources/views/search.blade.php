@extends('layouts.app')

@section('content')
 {{-- <div class="product-item">

    @foreach($products as $product)

    <div class="overlay">
        <a href=""     class="product-thumb">
            {{$product->img}}
        </a>
        
    </div>
    <div class="product-info">
        <span>{{$product->productName}}</span>
        <h4> {{$product->price}}</h4>
    </div> --}}

    <ul class="icons">
        <li> <a href="../views/cartview.vue"     class="active">
            <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json"   trigger="loop"
                colors="primary:#121331,secondary:#c71f16"   style="width:50px; height:50px">



            </lord-icon>
            </a></li> 

            <li> <a href="enduser/cart.html" >
                <lord-icon src="https://cdn.lordicon.com/slkvcfos.json"   trigger="loop"
                  style="width:50px; height:50px">        


                </lord-icon>
            </a></li>

    </ul>

Hello search

{{-- 
     @endforeach --}}



</div>






    
{{-- </div>
</div>
</div>
</div>
</div> --}}
@endsection
