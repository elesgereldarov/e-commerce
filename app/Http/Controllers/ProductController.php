<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products'));


    //     $role = Store::find(1);	
 
    //    dd($role->products);
    }
} 