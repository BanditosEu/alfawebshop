@extends('layouts.app')


@section('title', 'Home Page')

@section('content')


    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Slider Design</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>
<body>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

    <div class="carousel-inner">
        <div class="carousel-item active">

            <div class="centered-image">
                <img src="{{ asset('admin/images/reser.png') }}" class="d-block w-100"  style="max-width: 800px; max-height: 600px;">
            </div>
            <div class="carousel-caption d-none d-md-block">
                <div class="custom-carousel-content">

                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('admin/images/build.jpg') }}" class="d-block w-100"  style="max-width: 1800px; max-height: 600px;">
            <div class="carousel-caption d-none d-md-block">
                <div class="custom-carousel-content">
                    <h1>
                        <span>Best Ecommerce Solutions 1 </span>
                        to Boost your Brand Name &amp; Sales
                    </h1>
                    <p>
                        We offer an industry-driven and successful digital marketing strategy that helps our clients
                        in achieving a strong online presence and maximum company profit.
                    </p>

                    <div>
                        <a href="#" class="btn btn-slider">
                            Get Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

        @endsection



