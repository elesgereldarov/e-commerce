<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function storeList()
    {
        $products = Store::all();
        $store = Store::with( 'products')->get();

        return response()->json(['store' =>  $store]);

    }
}
