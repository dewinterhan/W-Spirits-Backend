<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Country;
use App\Product;
use App\Region;
use App\Volume;
use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $volumes = Volume::pluck('volume','id')->all();
        $categories = Category::pluck('category','id')->all();
        $brands = Brand::pluck('brand','id')->all();
        $countries = Country::pluck('country','id')->all();
        $regions = Region::pluck('region','id')->all();
        return view('admin.products.index', compact('products',  'volumes', 'categories', 'brands', 'countries', 'regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('image');
        //photo upload
        $image = $request->image;
        if ($image){
            $imageName = $image->getClientOriginalName();
            $image->move('images/imagesfront/',$imageName);
            $input['image'] = $imageName;
        }
        Product::create($input);
        return redirect('/admin/products');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $volumes = Volume::pluck('volume','id')->all();
        $categories = Category::pluck('category','id')->all();
        $brands = Brand::pluck('brand','id')->all();
        $countries = Country::pluck('country','id')->all();
        $regions = Region::pluck('region','id')->all();
        return view('admin.products.edit', compact('product',  'volumes', 'categories', 'brands', 'countries', 'regions'));

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
        $input = $request->except('image');
        //photo upload
        $image = $request->image;
        if ($image){
            $imageName = $image->getClientOriginalName();
            $image->move('images/imagesfront/',$imageName);
            $input['image'] = $imageName;
        }

        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/admin/products');
    }
}
