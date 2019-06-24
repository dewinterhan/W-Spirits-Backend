@extends('layouts.front')
@section('extracss')
    <style>
        p, h2 {
            color: lightgray;
        }
    </style>
@stop
@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h2>Contact Information</h2>
                    </div>
                    <div class="col-md-4 mb-3 text-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.718644697666!2d2.6048215159609045!3d51.09519974857797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dc96f6e676cdb3%3A0x815338b41a0ef8a!2sVeurnestraat+205%2C+8660+De+Panne!5e0!3m2!1snl!2sbe!4v1547472174617" style="border:0; width: 350px; height: 250px" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p>Address: Veurnestraat 317, 8660 De Panne</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p>Phone: <a href="tel://058410784" class="text-warning">0123478524</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p>Email: <a href="mailto:wspirits@gmail.com" class="text-warning">wspirits@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <form action="#" class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="text" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-warning py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
