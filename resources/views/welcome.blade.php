@extends('layouts.front')
@section('content')
    <section class="row mx-0 py-md-5">
        <header class="mx-auto mb-4">
            <h2 class="text-white">Best selling products:</h2>
        </header>
        <div class="row mx-auto">
            <article class="col-md-3 col-10 mb-5 mx-auto">
                <div class="card bg-light">
                    <a href="productpage.html" class="productLink mx-auto">
                        <div class="card-body pb-0 text-center productbox">
                            <img src="assets/images/articletester.png" alt="Product image" class="img-fluid">
                            <p class="text-gray pt-3 ">GlenAllachie 10 Years Cask Strength 70cl</p>
                        </div>
                    </a>
                    <div class="productboxHover">
                        <button class="bg-transparent border-0 text-white px-0">
                            <i class="fas fa-heart productHeartIconHover"></i>
                        </button>
                    </div>
                    <div class="card-footer border-0 pt-0 pb-2 pl-2 bg-light">
                        <button class="btn bg-transparent text-gray productBasketIconHover"><i class="fas fa-shopping-cart fa-2x"></i></button>
                        <span class="float-right pt-2 text-success font-weight-bold">£56,50</span>
                    </div>
                </div>
            </article>
        </div>
    </section>
@stop
