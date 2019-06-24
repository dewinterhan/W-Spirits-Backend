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

    public function productdetails($id)
    {
        $product = Product::findOrFail($id);
        return view('productdetails', compact('product'));
    }


    public function addItemToCart($id){
        $product = Product::findOrFail($id);
        Cart::add($product->id, $product->name, 1, $product->price, $product->image);
        return back();
    }

    public function removeItemFromCart($id){
        Cart::remove($id);
        return back();
    }
}
