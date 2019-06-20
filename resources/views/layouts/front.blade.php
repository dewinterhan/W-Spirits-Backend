<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bootstrap template met sass">
    <meta name="keywords" content="CSS,SCSS,Bootstrap">
    <meta name="author" content="Dewinter Han">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/Celtic_Symbol.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/cssfront/bootstrap.min.css')}}">
    <style>
        .backgroundboard {
            background: url("../../../public/images/imagesfront/Login_Bg.jpg"), no-repeat;
            background-attachment: fixed;
        }
    </style>
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
                        <a href="index.html" class="nav-link underline text-gray">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="products.html" class="nav-link underline text-gray">Products</a>
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
    @yield('contentHeader')
</header>
<main class="backgroundboard">
    @yield('content')
</main>
<footer class="headerandfooterbg font-small pt-4">
    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col-md-3 mt-md-0 mt-3">
                <h5 class="text-uppercase text-white">Where to find us</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.7188272630838!2d2.604821515721731!3d51.09519637956958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc96f6e676cdb3%3A0x815338b41a0ef8a!2sVeurnestraat+317%2C+8660+De+Panne!5e0!3m2!1snl!2sbe!4v1548404105379" style="border:0; width:225px; height:225px;" allowfullscreen></iframe>

            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase text-white">useful links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#" class="underline text-gray">Single Malt Whiskey</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="underline text-gray">Blended Whiskey</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="underline text-gray">12 Years Old</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="underline text-gray">18 Years Old</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="underline text-gray">Top 10</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase text-white">useful links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#" class="underline text-gray">Single Malt Whiskey</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="underline text-gray">Blended Whiskey</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="underline text-gray">12 Years Old</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="underline text-gray">18 Years Old</a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="underline text-gray">Top 10</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase text-white">Our social media</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="https://www.facebook.com" class="underline text-gray"><i class="fab fa-facebook pr-2"></i>Facebook</a>
                    </li>
                    <li class="mb-2">
                        <a href="https://www.instagram.com" class="underline text-gray"><i class="fab fa-instagram pr-2"></i>Instagram</a>
                    </li>
                    <li class="mb-2">
                        <a href="https://www.twitter.com" class="underline text-gray"><i class="fab fa-twitter pr-2"></i>Twitter</a>
                    </li>
                    <li class="mb-2">
                        <a href="https://www.youtube.com" class="underline text-gray"><i class="fab fa-youtube pr-2"></i>Youtube</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-5">© 2019 Copyright: Dewinter Han</div>
    <!-- Copyright -->

</footer>
<script src="{{asset('js/jsfront/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="{{asset('js/jsfront/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jsfront/main.js')}}"></script>
</body>
</html><?php
