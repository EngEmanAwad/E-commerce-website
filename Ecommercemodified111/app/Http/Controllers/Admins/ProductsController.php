<?php

namespace App\Http\Controllers\Admins;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return "hello all products";
        $products = Product::all();

        return view('admin.products.allProducts', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    //   return "hello create page";



    $categories = Category::all();
        return view('admin.products.createProduct',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
//    return $request;
$image = $request->file('image');

$ProductImage = time().'_'. $image->getClientOriginalName();
$image->move('img',$ProductImage);

   $request->validated();
   Product::create([

       'productName' => $request->productName,
       'desc' => $request->desc,
       'img' => $ProductImage,
       'quantity' => $request->quantity,
       'price' => $request->price,
       'cat_id' => $request->cat_id,
   ]);

   return redirect()->back();






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $product = Product::findorfail($id);

        return view('admin.products.showProduct', compact('product'));

        return redirect()->back;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $image = $request->file('image');

        // $ProductImage = time().'_'. $image->getClientOriginalName();
        // $image->move('img',$ProductImage);
        
        $product = Product::findorfail($id);
        return view('admin.products.editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        
        $product=Product::findorfail($id);
        $product->update([
       'productName' => $request->productName,
       'desc' => $request->desc,
       'img' => $request->image,
       'quantity' => $request->quantity,
       'price' => $request->price,
       'cat_id' => $request->cat_id,

        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $product=Product::findorfail($id);
        $product->delete();

return redirect()->back();
    }



function detail($id){


    // return "hello".$id;

$products_details= Product::findorfail( $id);

// return $products_details;

return view('admin.products.productdetails',compact('products_details'));

}    




}
