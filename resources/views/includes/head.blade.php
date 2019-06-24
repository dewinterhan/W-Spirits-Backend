<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bootstrap template met sass">
    <meta name="keywords" content="CSS,SCSS,Bootstrap">
    <meta name="author" content="Dewinter Han">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/imagesfront/Celtic_Symbol.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/cssfront/bootstrap.min.css')}}">
    <style>
        .backgroundboard {
    background: url("{{asset('images/imagesfront/Login_Bg.jpg')}}"), no-repeat, fixed;
        }
    </style>
@yield('extracss')
<title>Home</title>
</head>
<body>
<header>
    <section class="headerandfooterbg fixedNav">
        <nav class="navbar navbar-expand-sm container">
            <a href="index.html" class="navbar-brand"><img class="navbarimg" src="{{asset('images/imagesfront/Logo_White.png')}}" alt=""></a>
            <button class="navbar-toggler bg-transparent" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse mx-auto" id="navbarMenu">
                <ul class="navbar-nav text-center ml-lg-auto">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link underline text-gray">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('products')}}" class="nav-link underline text-gray">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="404.html" class="nav-link underline text-gray">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link underline text-gray">Contact Us</a>
                    </li>
                </ul>
                <div class="ml-lg-5 text-center">
                    <div class=" my-auto d-inline">
                        <a href="login.html"><i class="fas fa-user fa-lg text-warning"></i></a>
                    </div>
                    <div class=" my-auto d-inline ml-4">
                        <a href="shoppingcart.html"><i class="fas fa-shopping-cart fa-lg text-warning"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </section>
