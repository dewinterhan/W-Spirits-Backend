<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function products()
    {
        $products = Product::paginate(20);
        return view('products', compact('products'));
    }

    public function productsHome()
    {
        $productsHome = Product::paginate(4);
        return view('welcome', compact('productsHome'));
    }

    public function productdetails($id)
    {
        $product = Product::findOrFail($id);
        return view('productdetails', compact('product'));
    }
}
