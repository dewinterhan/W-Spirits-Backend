@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row pt-5">
            {{--<div class="col-md-3 d-none d-md-block">
                <p class="text-white sidebarTitle">Types of whiskey</p>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label text-white" for="exampleCheck1">Single Malt</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                    <label class="form-check-label text-white" for="exampleCheck2">Blended</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                    <label class="form-check-label text-white" for="exampleCheck3">Bourbon</label>
                </div>
                <hr class="border-warning">
                <p class="text-white sidebarTitle">Common ages</p>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck4">
                    <label class="form-check-label text-white" for="exampleCheck4">8 years</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck5">
                    <label class="form-check-label text-white" for="exampleCheck5">12 years</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck6">
                    <label class="form-check-label text-white" for="exampleCheck6">18 years</label>
                </div>
                <hr class="border-warning">
                <p class="text-white sidebarTitle">Price range</p>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck7">
                    <label class="form-check-label text-white" for="exampleCheck7">0 - 50 pound</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck8">
                    <label class="form-check-label text-white" for="exampleCheck8">50 - 150 pound</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck9">
                    <label class="form-check-label text-white" for="exampleCheck9">150 + pound</label>
                </div>
            </div>--}}
            <div class="col-md-9">
                <div class="row">
                    @foreach($products as $product)
                        <article class="col-md-3 col-10 mb-5 mx-auto">
                            <div class="card bg-light">
                                <a href="{{route('product', $product->id)}}" class="productLink mx-auto">
                                    <div class="card-body pb-0 text-center productbox">
                                        <img src="{{asset('images/imagesfront/'.$product->image)}}" alt="Product image" class="img-fluid">
                                        <p class="text-gray pt-3 ">{{$product->name}}</p>
                                    </div>
                                </a>
                                <div class="productboxHover">
                                    <button class="bg-transparent border-0 text-white px-0">
                                        <i class="fas fa-heart productHeartIconHover"></i>
                                    </button>
                                </div>
                                <div class="card-footer border-0 pt-0 pb-2 pl-2 bg-light">
                                    <button class="btn bg-transparent text-gray productBasketIconHover"><i class="fas fa-shopping-cart fa-2x"></i></button>
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
                <ul class="pagination justify-content-center">
                    <li class="page-item pageHoverPrevious disabled">
                        <a class="page-link text-white bg-transparent" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item pageHover"><a class="page-link bg-transparent text-white" href="#">1</a></li>
                    <li class="page-item pageHover"><a class="page-link bg-transparent text-white" href="#">2</a></li>
                    <li class="page-item pageHover"><a class="page-link bg-transparent text-white" href="#">3</a></li>
                    <li class="page-item pageHoverNext">
                        <a class="page-link bg-transparent text-white" href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@stop
