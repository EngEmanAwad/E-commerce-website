<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductsController;

class SearchController extends Controller
{
    //
   function search (Request $request){
       

    $search_text = $_GET['box-search'];
        
 $product= DB::table('products')->where('productName','like', '%',$search_text,'%')->get();
        
    return view('search',compact('product'));
        
        
        
     }
        
    public function viewsearch(){
        
        
   $products= DB::table('products')->all();
   return view('search',compact('products'));
        
        
        
     return view('search');   
        
        

        
     
    }

}