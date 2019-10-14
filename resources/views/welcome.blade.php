@extends('layouts.frontHome')
@section('content')
    <div class="container-fluid px-0">
        <section class="row mx-0 px-0">
            <div class="col-12 col-md-8 infoSection">
                <div class="row mt-3 mx-auto">
                    <div class="col-md-4 text-center">
                        <h5 class="text-white font-weight-bold"><i class="fas fa-car-side mr-2 text-warning"></i>Fast delivery</h5>
                        <p class="text-gray">Order before 23:59h and enjoy it the next day</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h5 class="text-white font-weight-bold"><i class="fas fa-users mr-2 text-warning"></i>Something for everyone</h5>
                        <p class="text-gray">We've got all kinds of whiskeys for all kind of different people.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h5 class="text-white font-weight-bold"><i class="fas fa-question mr-2 text-warning"></i>For any questions:</h5>
                        <p><a href="mailto:w-spirits@gmail.com" class="text-gray underline">w-spirits@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 bg-warning">
                <ul class="list-unstyled d-flex mt-4">
                    <li class="my-2 mr-3"><a href="https://www.facebook.com"><i class="fab fa-facebook-f fa-2x text-white"></i></a></li>
                    <li class="my-2 mr-3"><a href="https://www.twitter.com"><i class="fab fa-twitter fa-2x text-white"></i></a></li>
                    <li class="my-2"><a href="https://www.instagram.com"><i class="fab fa-instagram fa-2x text-white"></i></a></li>
                </ul>
            </div>
        </section>
        <section class="row mx-0">
            <div class="col-12 col-md-6 px-0">
                <img src="{{asset('images/imagesfront/whiskey_bar.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 welcomeSection">
                <h2 class="text-white pb-3">Welcome to W-Spirits</h2>
                <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam architecto, cum deserunt dignissimos doloribus hic incidunt ipsa nihil officia quis sint, totam ut vero voluptatum? Accusantium hic pariatur sunt.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus excepturi fuga inventore nisi porro quasi voluptatem? Assumenda culpa eaque ipsa ipsum molestias, nemo, neque perferendis quaerat reiciendis tempore veritatis!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores beatae cupiditate dignissimos distinctio doloremque doloribus eaque in ipsam officiis porro provident quisquam, quo quos ratione recusandae reiciendis saepe totam vel.
                </p>
            </div>
        </section>
        <section class="row mx-0 py-md-5">
            <div class="container">
            <header class="mx-auto mb-4">
                <h2 class="text-white">Best selling products:</h2>
            </header>
            <div class="col-md-9">
                    <div class="row">
                        @foreach($productsHome as $product)
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
        </section>
    </div>
@stop
