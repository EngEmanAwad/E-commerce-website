<?php

namespace App\Http\Controllers;

use App\Models\AddCart;
use Illuminate\Http\Request;

class AddtocartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 

       $allcartproducts = AddCart::all();

    //    return  $allcartproducts;

return view('alladdtocart');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $carts = AddCart::all();

  
        return view('cart',compact('carts'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validated();
        AddCart::create([

            'product_detail_Name' => $request->productName,
            'desc_details' => $request->desc,
            'img' => $request->img,
            'quantity_details' => $request->quantity,
            'price_details' => $request->price,
            
        ]);



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
        $allcartproducts = AddCart::findorfail($id);

        // return $allcartproducts;

        return view('cartdetails', compact('allcartproducts'));

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
    }
}
