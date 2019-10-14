@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-9">
                <div class="row">
                    @foreach($products as $product)
                        <article class="col-md-3 col-10 mb-5 mx-auto">
                            <div class="card bg-light">
                                <a href="{{route('product', $product->id)}}" class="productLink mx-auto">
                                    <div class="card-body pb-0 text-center productbox" >
                                        <img src="{{asset('images/imagesfront/'.$product->image)}}" alt="Product image" class="img-fluid" height="300">
                                        <p class="text-gray pt-3 ">{{$product->name}}</p>
                                    </div>
                                </a>
                                <div class="productboxHover">
                                    <button class="bg-transparent border-0 text-white px-0">
                                        <i class="fas fa-heart productHeartIconHover"></i>
                                    </button>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-2 pl-2 bg-light">
                                    <form action="{{ route('cart.store') }}" method="post" class="float-left">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="image" value="{{ $product->image }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <button type="submit" class="btn bg-transparent text-gray productBasketIconHover"><i class="fas fa-shopping-cart fa-2x"></i></button>
                                    </form>
                                    <span class="float-right pt-2 text-success font-weight-bold">{{$product->price}}</span>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div aria-label="Page navigation example" class="mx-auto mb-4">
               {{$products->links()}}
            </div>
        </div>
    </div>
@stop
