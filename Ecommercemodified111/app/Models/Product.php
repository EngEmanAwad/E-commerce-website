<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName',
        'desc',
        'img',
        'quantity',
        'price',
        'cat_id',
        
       
    ];

    public function categories() {

        return $this->belongsTo(Category::class,'cat_id','id');
        
        
            }










}
