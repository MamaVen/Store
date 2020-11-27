<?php

namespace App\Http\Controllers;
use App\Store;
use Illuminate\Http\Request;

class storesController extends Controller
{
    public function index()
    {
        $stores = Store::get();
        return view ('stores.index',compact('stores'));
    }

    public function show(Store $store)
    {
        // $stores->products;
   
        return view('stores.show', compact('store'));

}
}
