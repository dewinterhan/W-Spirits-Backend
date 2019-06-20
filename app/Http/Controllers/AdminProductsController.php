<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Country;
use App\Photo;
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
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::findOrFail($id);
        $photos = Photo::pluck('','id')->all();
        $volumes = Volume::pluck('volume','id')->all();
        $categories = Category::pluck('category','id')->all();
        $brands = Brand::pluck('brand','id')->all();
        $countries = Country::pluck('country','id')->all();
        $regions = Region::pluck('region','id')->all();
        return view('admin.users.create', compact('product','photos', 'volumes', 'categories', 'brands', 'countries', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        Product::create($input);
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
        $photos = Photo::pluck('','id')->all();
        $volumes = Volume::pluck('volume','id')->all();
        $categories = Category::pluck('category','id')->all();
        $brands = Brand::pluck('brand','id')->all();
        $countries = Country::pluck('country','id')->all();
        $regions = Region::pluck('region','id')->all();
        return view('admin.users.edit', compact('product', 'photos', 'volumes', 'categories', 'brands', 'countries', 'regions'));
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
