@extends('layouts.front')
@section('contentHeader')
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('images/imagesfront/barrels-background.jpg')}}" alt="First slide">
                    <div class="carousel-caption carouselSlide1Text">
                        <h4 class="d-md-none">Welcome to W-Spirits</h4>
                        <img src="{{asset('images/imagesfront/Logo_White.png')}}" alt="W-Spirits logo" class="d-none d-md-inline carouselLogo">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/imagesfront/whiskey-inside-two.jpg')}}" alt="Second slide">
                    <div class="carousel-caption carouselSlide2Text">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/imagesfront/slider2.jpg')}}" alt="Third slide">
                    <div class="carousel-caption carouselSlide3Text">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
@stop
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
                <img src="assets/images/whiskey_bar.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6 welcomeSection">
                <h2 class="text-white pb-3">Welcome to W-Spirits</h2>
                <p class="text-gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam architecto, cum deserunt dignissimos doloribus hic incidunt ipsa nihil officia quis sint, totam ut vero voluptatum? Accusantium hic pariatur sunt.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus excepturi fuga inventore nisi porro quasi voluptatem? Assumenda culpa eaque ipsa ipsum molestias, nemo, neque perferendis quaerat reiciendis tempore veritatis!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores beatae cupiditate dignissimos distinctio doloremque doloribus eaque in ipsam officiis porro provident quisquam, quo quos ratione recusandae reiciendis saepe totam vel.
                </p>
            </div>
        </section>
    </div>
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
