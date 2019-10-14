@extends('layouts.front')
@section('content')

    <div class="container">
        <div class="row py-5">
            <section class="col-12 col-md-3 mb-5 mb-md-0">
                <div class="card bg-light">
                    <div class="card-body mx-auto">
                        <img src="{{asset('images/imagesfront/'.$product->image)}}" alt="{{$product->name}}" class="img-fluid">
                    </div>
                </div>
            </section>
            <section class="col-12 col-md-8 mb-5 mb-md-0">
                <div class="card bg-light">
                    <div class="card-header bg-light border-bottom-0 pb-0">
                        <h2 class="text-uppercase">{{$product->name}}</h2>
                    </div>
                    <hr class="border-warning">
                    <div class="card-body pt-0">
                        <div class="row mx-auto border-bottom border-warning pb-2">
                            <p class="display-4 font-weight-light mr-lg-5 ml-lg-5">£ {{$product->price}}</p>
                            <div class="ml-3 ml-lg-5 pt-3">
                                <a href="{{route('addToCart', $product->id)}}" class="btn btn-success">Add to cart</a>
                            </div>
                        </div>
                        <div class="row pt-4 mx-auto border-bottom border-warning">
                            <div class="col">
                                <h3>Description:</h3>
                                <p>
                                    {!! $product->description !!}
                                </p>
                            </div>
                        </div>
                        <div class="row mx-auto pt-4">
                            <h3>Specifications:</h3>
                            <table class="col-12">
                                <tr class="row">
                                    <td class="col-6 font-weight-bold">Volume</td>
                                    <td class="col-6">{{$product->volume->volume}} cl</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-6 font-weight-bold">Categories</td>
                                    <td class="col-6">{{$product->category->category}}</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-6 font-weight-bold">Brand</td>
                                    <td class="col-6">{{$product->brand->brand}}</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-6 font-weight-bold">County</td>
                                    <td class="col-6">{{$product->country->country}}</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-6 font-weight-bold">Region</td>
                                    <td class="col-6">{{$product->region->region}}</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-6 font-weight-bold">Age</td>
                                    <td class="col-6">{{$product->age}} years</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-6 font-weight-bold">Characteristic</td>
                                    <td class="col-6">{{$product->characteristics}}</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-6 font-weight-bold">Alcohol Percentage</td>
                                    <td class="col-6">{{$product->alcohol_percentage}} %</td>
                                </tr>
                                <tr class="row">
                                    <td class="col-6 font-weight-bold">Status</td>
                                    <td class="col-6">{{$product->stock}} in sotck</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@stop
