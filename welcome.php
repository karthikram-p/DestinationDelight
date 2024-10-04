<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href='http://fonts.googleapis.com/css?family=Poppins:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet"
        href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ver=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Your custom CSS -->
    <link rel="stylesheet" href="css/welcome.css">

    <style>
        body {
            overflow-x: hidden;
        }

        #what-we-do .card:hover {
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }

        #what-we-do .card .card-block {
            padding-left: 50px;
            position: relative;
        }

        #what-we-do .card .card-block a {
            color: #007b5e !important;
            font-weight: 700;
            text-decoration: none;
        }

        #what-we-do .card .card-block a i {
            display: none;

        }

        #what-we-do .card:hover .card-block a i {
            display: inline-block;
            font-weight: 700;

        }

        #what-we-do .card .card-block:before {
            font-family: FontAwesome;
            position: absolute;
            font-size: 39px;
            color: #007b5e;
            left: 0;
            -webkit-transition: -webkit-transform .2s ease-in-out;
            transition: transform .2s ease-in-out;
        }

        .daterangepicker {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
            border: none;
        }

        .daterangepicker td.in-range {
            background-color: #dc354529;
        }

        .daterangepicker td.active,
        .daterangepicker td.active:hover {
            background-color: #DC3545;
            border-color: transparent;
            color: #fff;
        }

        .daterangepicker td.available:hover,
        .daterangepicker th.available:hover {
            background-color: #dc3545e0;
            color: #fff;
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            background-color: #c82333;
            border-color: #c82333;
        }

        .ripple {
            position: relative;
            overflow: hidden;
            transform: translate3d(0, 0, 0)
        }

        .ripple:after {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            background-image: radial-gradient(circle, #000 10%, transparent 10.01%);
            background-repeat: no-repeat;
            background-position: 50%;
            transform: scale(10, 10);
            opacity: 0;
            transition: transform .5s, opacity 1s
        }

        .ripple:active:after {
            transform: scale(0, 0);
            opacity: .2;
            transition: 0s
        }

        .btn-primary {
            color: #fff;
            background-color: #DC3545;
            border-color: #DC3545;
        }

        .btn-primary:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .btn-primary:focus {
            background-color: #c82333;
            border-color: #bd2130;
            box-shadow: 0 0 0 0.2rem rgba(200, 35, 51, 0.5) !important;
        }

        .nice-select.wide {
            width: 100%
        }

        .nice-select.wide .list {
            left: 0 !important;
            right: 0 !important
        }

        .custom-select-form .nice-select {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            border: 1px solid #d2d8dd;
            height: 45px;
            line-height: 42px
        }

        .custom-select-form .nice-select:hover {
            border-color: #d2d8dd
        }

        .custom-select-form .nice-select:active,
        .custom-select-form .nice-select.open,
        .custom-select-form .nice-select:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25)
        }

        .custom-select-form select {
            display: none
        }

        section.banner {
            position: relative;
        }

        .custom-select-form .nice-select {
            border: none;
            height: 50px;
            line-height: 50px;
            border-radius: 4px 0 0 4px;
            border-right: 1px solid #d2d8dd !important;
        }

        .nice-select .list {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
            width: 100%;
        }

        .nice-select.open .list {
            height: 250px;
            overflow-y: auto;
        }

        .custom-select-form .nice-select:active,
        .custom-select-form .nice-select.open,
        .custom-select-form .nice-select:focus {
            border-color: #fff;
            outline: 0;
            box-shadow: none;
        }

        .wrn-btn span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: .5s
        }

        .wrn-btn span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: -8px;
            right: -20px;
            transition: .5s;
            font-size: 24px;
        }

        .wrn-btn:hover span {
            padding-right: 20px
        }

        .wrn-btn:hover span:after {
            opacity: 1;
            right: 0
        }

        .wrapper-grid {
            padding: 0 20px
        }

        .box_grid {
            background-color: #fff;
            display: block;
            position: relative;
            margin-bottom: 30px;
            -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1)
        }

        .box_grid .price {
            display: inline-block;
            font-weight: 500;
            color: #999
        }

        .box_grid .price strong {
            color: #32a067
        }

        .box_grid a.wish_bt {
            position: absolute;
            right: 15px;
            top: 15px;
            z-index: 1;
            background-color: #000;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 7px 10px 7px 10px;
            display: inline-block;
            color: #fff;
            line-height: 1;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px
        }

        .box_grid a.wish_bt:after {
            content: "\2661";
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            font-size: 20px;
        }

        .box_grid a.wish_bt.liked:after {
            content: "\e089";
            color: #fc5b62
        }

        .box_grid a.wish_bt:hover.liked:after {
            color: #fc5b62
        }

        .box_grid a.wish_bt:hover:after {
            content: "\e089";
            color: #fff
        }

        .box_grid figure {
            margin-bottom: 0;
            overflow: hidden;
            position: relative;
            height: 210px
        }

        .box_grid figure small {
            position: absolute;
            background-color: #000;
            background-color: rgba(0, 0, 0, 0.6);
            left: 20px;
            top: 22px;
            text-transform: uppercase;
            color: #ccc;
            font-weight: 600;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            padding: 5px 10px 5px 10px;
            line-height: 1
        }

        .box_grid figure .read_more {
            position: absolute;
            top: 50%;
            left: 0;
            margin-top: -12px;
            -webkit-transform: translateY(10px);
            -moz-transform: translateY(10px);
            -ms-transform: translateY(10px);
            -o-transform: translateY(10px);
            transform: translateY(10px);
            text-align: center;
            opacity: 0;
            visibility: hidden;
            width: 100%;
            -webkit-transition: all 0.6s;
            transition: all 0.6s;
            z-index: 2
        }

        .box_grid figure .read_more span {
            background-color: #fcfcfc;
            background-color: rgba(255, 255, 255, 0.8);
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            -ms-border-radius: 20px;
            border-radius: 20px;
            display: inline-block;
            color: #222;
            font-size: 12px;
            font-size: 0.75rem;
            padding: 5px 10px
        }

        .box_grid figure:hover .read_more {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0)
        }

        .box_grid figure a img {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%) scale(1.1);
            -moz-transform: translate(-50%, -50%) scale(1.1);
            -ms-transform: translate(-50%, -50%) scale(1.1);
            -o-transform: translate(-50%, -50%) scale(1.1);
            transform: translate(-50%, -50%) scale(1.1);
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
            width: 100%;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out
        }

        .box_grid figure a:hover img {
            -webkit-transform: translate(-50%, -50%) scale(1);
            -moz-transform: translate(-50%, -50%) scale(1);
            -ms-transform: translate(-50%, -50%) scale(1);
            -o-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1)
        }

        .box_grid .wrapper {
            padding: 25px
        }

        .box_grid .wrapper h3 {
            font-size: 20px;
            font-size: 1.25rem;
            margin-top: 0
        }

        .box_grid ul {
            padding: 20px 15px;
            border-top: 1px solid #ededed
        }

        .box_grid ul li {
            display: inline-block;
            margin-right: 15px
        }

        .box_grid ul li .score {
            margin-top: -10px
        }

        .box_grid ul li:last-child {
            margin-right: 0;
            float: right
        }

        .score strong {
            background-color: #0054a6;
            color: #fff;
            line-height: 1;
            -webkit-border-radius: 5px 5px 5px 0;
            -moz-border-radius: 5px 5px 5px 0;
            -ms-border-radius: 5px 5px 5px 0;
            border-radius: 5px 5px 5px 0;
            padding: 10px;
            display: inline-block
        }

        .score span {
            display: inline-block;
            position: relative;
            top: 7px;
            margin-right: 8px;
            font-size: 12px;
            font-size: 0.75rem;
            text-align: right;
            line-height: 1.1;
            font-weight: 500
        }

        .score span em {
            display: block;
            font-weight: normal;
            font-size: 11px;
            font-size: 0.6875rem
        }

        .main_title_2 h2 {
            margin: 25px 0 0 0;
            color: #333;
        }

        .main_title_2 h3 {
            margin: 25px 0 0 0;
            color: #727272;
        }

        .main_title_2 p {
            margin: 8px 0 0 0;
            color: #727272;
        }

        #places .item {
            margin: 0 15px
        }

        #places .owl-item {
            opacity: 0.5;
            transform: scale(0.85);
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateZ(0) scale(0.85, 0.85);
            transition: all 0.3s ease-in-out 0s;
            overflow: hidden
        }

        #places .owl-item.active.center {
            opacity: 1;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transform: translateZ(0) scale(1, 1);
            transform: scale(1)
        }

        #places .owl-item.active.center .item .title h4,
        #places .owl-item.active.center .item .views {
            opacity: 1
        }

        .owl-theme .owl-dots {
            margin-top: 10px !important;
            margin-bottom: 25px
        }

        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel button.owl-dot {
            background: rgba(0, 0, 0, 1) !important;
            color: inherit;
            border: none;
            padding: 5px 14px !important;
            position: absolute;
            top: 50%;
            color: white !important;
            border-radius: 3px !important;
        }

        .owl-carousel .owl-nav .owl-prev {
            left: 0;
        }

        .owl-carousel .owl-nav .owl-prev span {
            font-size: 20px;
            line-height: 22px;
        }

        .owl-carousel .owl-nav .owl-prev:focus {
            outline: none;
            border: none;
            box-shadow: none;
        }

        .owl-carousel .owl-nav .owl-next {
            right: 0;
        }

        .owl-carousel .owl-nav .owl-next span {
            font-size: 20px;
            line-height: 22px;
        }

        .owl-carousel .owl-nav .owl-next:focus {
            outline: none;
            border: none;
            box-shadow: none;
        }

        #places {
            margin-top: 40px;
        }

        @media (max-width: 767px) {
            #places {
                margin-top: 0;
            }
        }

        .modal-content {
            background-color: rgba(255, 255, 255);
            /* Semi-transparent white */
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            /* Soft shadow */
        }

        /* Modal header */
        .modal-header {
            border-bottom: none;
            border-radius: 15px 15px 0 0;
            background-color: rgba(0, 0, 0, 0.8);
            /* Semi-transparent white */
            backdrop-filter: blur(5px);
        }

        /* Modal title */
        .modal-title {
            color: white;
            /* Dark text color */
        }

        /* Close button */
        .close {
            color: #333;
            /* Dark text color */
            opacity: 0.7;
            /* Semi-transparent */
        }

        .close:hover {
            opacity: 1;
            /* Full opacity on hover */
        }

        /* Modal body */
        .modal-body {
            background-color: transparent;
            /* Transparent background */
            padding: 20px;
        }

        /* Modal footer */
        .modal-footer {
            border-top: none;
            border-radius: 0 0 15px 15px;
            background-color: rgba(0, 0, 0, 0.8);
            /* Semi-transparent white */
            backdrop-filter: blur(5px);
        }

        /* Close button in footer */
        .modal-footer .btn-close {
            color: #333;
            /* Dark text color */
            opacity: 0.7;
            /* Semi-transparent */
        }

        .modal-footer .btn-close:hover {
            opacity: 1;
            /* Full opacity on hover */
        }

        .footer .footer-col {
            margin-bottom: 30px;
            padding-right: 20px;
            padding-left: 20px;
        }

        #advertisement {
            width: 100%;
        }

        #advertisement .card {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 20px;
            transition: transform 0.3s ease;
        }

        #advertisement .card:hover {
            transform: translateY(-10px);
        }

        #advertisement .card-block {
            padding: 50px;
        }

        #advertisement .btn-primary {
            margin-top: 20px;
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        #advertisement .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>

    <title>Home | Destination Delight</title>
</head>

<body
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/welcome-background.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; font-family: 'Poppins', sans-serif !important;">
    <!-- Navigation -->
    <?php require 'components/_nav_welcome.php'; ?>

    <section class="Destinations">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" style="background: rgba( 211, 226, 253, 0.05 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    padding: 50px 50px 50px 50px;
    margin-top: 100px;
    margin-bottom: 300px;" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <h1 style="color: white; font-size: 50px; font-weight: 700; text-shadow: 2px 2px black;">
                        Welcome to Destination Delight
                        <img src="images/destination.png" alt="Camera"
                            style="width: 40px; height: 40px; margin-left: 10px; margin-bottom: 5px;">
                    </h1>

                    <br>
                    <br>
                    <p style="color: white; font-weight: 700; font-size: x-large; text-shadow: 2px 2px black;">Wherever
                        you
                        go , go with all your heart.
                    </p>
                    <br>
                    <a class="button btn btn-light btn-lg" href="#what-we-do" role="button"><span>Learn more</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services section -->
    <section style="width: 100%;">
        <div class="container-fluid" id="what-we-do" style="padding: 1rem!important;
          border: none;
          margin-bottom:1rem;
          -webkit-transition: .5s all ease;
          -moz-transition: .5s all ease;
          transition: .5s all ease;
          margin-bottom: 200px;
          background: rgba( 0, 0, 0, 0.5 );
          box-shadow: 0 8px 32px 0 black;
          backdrop-filter: blur( 10px );
          -webkit-backdrop-filter: blur( 10px );
          border-radius: 30px;
          padding: 50px 100px 50px 100px;" data-aos="fade-left" data-aos-easing="ease-in-sine">
            <h2 class="section-title h1 text-center" style="color:white; font-weight:700; text-shadow: 2px 2px black;">
                OUR SERVICES
            </h2>
            <p class="text-center mb-2 h5" style="color:white; text-shadow: 1px 1px black;">You’ll always have
                fascinating places to be and friendly
                people to see.</p>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card" data-aos="fade-right"
                        style="padding-top: 50px; padding-bottom: 120px; padding-right: 50px; background-color: rgb(255,255,255,0.7); border-radius: 20px;">
                        <div class="card-block block-1">
                            <img src="images/ticket.png" alt="Camera"
                                style="width: 50px; height: 50px; margin-bottom: 20px;">
                            <h3 class="card-title" style="font-weight: 700; color: black;">Ticket Bookings</h3>
                            <p class="card-text" style="color: black;">Experience seamless travel planning with
                                our
                                comprehensive ticket booking services. From flights to car rentals, we've got
                                you
                                covered. Explore enticing vacation packages, ensure peace of mind with travel
                                insurance options, and enjoy dedicated customer support every step of the way.
                                Your
                                dream getaway begins here, effortlessly organized and tailored to
                                your preferences.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card" data-aos="fade-down"
                        style="padding-top: 50px; padding-bottom: 75px; padding-right: 50px; background-color: rgb(255,255,255,0.7); border-radius: 20px;">
                        <div class="card-block block-2">
                            <img src="images/booking.png" alt="Camera"
                                style="width: 50px; height: 50px; margin-bottom: 20px;">
                            <h3 class="card-title" style="font-weight: 700; color: black;">Hotel Bookings</h3>
                            <p class="card-text" style="color: black;">Indulge in effortless hotel
                                booking with our
                                user-friendly platform. Browse through a vast selection of accommodations
                                tailored
                                to your taste and budget. From cozy boutique hotels to luxurious resorts, find
                                the
                                perfect stay for your dream getaway. With easy comparison tools, secure booking
                                options, and dedicated customer support, we ensure a seamless experience from
                                start
                                to finish. Your ideal escape awaits – book now and make your travel
                                dreams a reality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                    <div class="card" data-aos="fade-left"
                        style="padding-top: 50px; padding-bottom: 55px; padding-right: 50px; background-color: rgb(255,255,255,0.7); border-radius: 20px;">
                        <div class="card-block block-3">
                            <img src="images/guide.png" alt="Camera"
                                style="width: 50px; height: 50px; margin-bottom: 20px;">
                            <h3 class="card-title" style="font-weight: 700; color: black;">Tour Guides</h3>
                            <p class="card-text" style="color: black;">Embark on unforgettable adventures with
                                our
                                expert tour guides. Discover hidden gems, historical landmarks, and local
                                culture
                                like never before. Our passionate guides provide insider knowledge, personalized
                                itineraries, and immersive experiences tailored to your interests. Whether
                                you're
                                exploring bustling cities or tranquil countryside, our guides ensure a seamless
                                journey filled with memorable moments. Join us and let our knowledgeable experts
                                turn your travel dreams into extraordinary realities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services section -->

    <hr>

    <section class="container-fluid container-custom margin_80_0 py-4" style="margin-bottom: 100px;">
        <div class="main_title_2 py-4 text-center">
            <span><em></em></span>
            <h2 style="font-weight: 700; color: white; text-shadow: 2px 2px black;">Our Popular Tours</h2>
        </div>
        <div id="places" class="owl-carousel owl-theme places pt-4 position-relative">
            <div class="item">
                <div class="box_grid" style="border-radius: 20px;">
                    <figure>
                        <a><img src="images/delhi4.jpg" class="img-fluid" alt="" width="800" height="533">
                            <div class="read_more"><span><button class="btn btn-transparent" data-bs-toggle="modal"
                                        data-bs-target="#delhimodal">Read
                                        reviews</button></span></div>
                        </a>
                        <small>Delhi</small>
                    </figure>
                    <div class="wrapper">
                        <h3 style="font-weight: 700;">Delhi</h3>
                        <p>
                            Delhi: Where history meets modernity in a vibrant fusion of culture and life.</p>
                        <span class="price">From <strong> &#8377; 1,999</strong> /per person</span>
                    </div>
                    <ul>
                        <li></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="box_grid" style="border-radius: 20px;">
                    <figure>
                        <a href="#!"><img src="images/mumbai.jpg" class="img-fluid" alt="" width="800" height="533">
                            <div class="read_more"><span><button class="btn btn-transparent" data-bs-toggle="modal"
                                        data-bs-target="#mumbaimodal">Read
                                        reviews</button></span></div>
                        </a>
                        <small>Mumbai</small>
                    </figure>
                    <div class="wrapper">
                        <h3 style="font-weight: 700;">Mumbai</h3>
                        <p>
                            Mumbai: Vibrant urban hub embodying dreams and diversity amid bustling charm.</p>
                        <span class="price">From <strong> &#8377; 1,499</strong> /per person</span>
                    </div>
                    <ul>
                        <li></li>
                        <li>
                            <div class="score"><span>Good<em>331 Reviews</em></span><strong>8.0</strong></div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="box_grid" style="border-radius: 20px;">
                    <figure>
                        <a href="#!"><img src="images/goa2.jpg" class="img-fluid" alt="" width="800" height="533">
                            <div class="read_more"><span><button class="btn btn-transparent" data-bs-toggle="modal"
                                        data-bs-target="#goamodal">Read
                                        reviews</button></span></div>
                        </a>
                        <small>Goa</small>
                    </figure>
                    <div class="wrapper">
                        <h3 style="font-weight: 700;">Goa</h3>
                        <p>
                            Goa: Tropical paradise adorned with sun-kissed beaches and vibrant nightlife.</p>
                        <span class="price">From <strong> &#8377; 2,499</strong> /per person</span>
                    </div>
                    <ul>
                        <li></li>
                        <li>
                            <div class="score"><span>Good<em>350 Reviews</em></span><strong>8.3</strong></div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="box_grid" style="border-radius: 20px;">
                    <figure>
                        <a href="#!"><img src="images/kolkata.jpg" class="img-fluid" alt="" width="800" height="533">
                            <div class="read_more"><span><button class="btn btn-transparent" data-bs-toggle="modal"
                                        data-bs-target="#kolkatamodal">Read
                                        reviews</button></span></div>
                        </a>
                        <small>Kolkata</small>
                    </figure>
                    <div class="wrapper">
                        <h3 style="font-weight: 700;">Kolkata</h3>
                        <p>
                            Kolkata: Vibrant city boasting rich artistic and cultural heritage.</p>
                        <span class="price">From <strong> &#8377; 1,999</strong> /per person</span>
                    </div>
                    <ul>
                        <li></li>
                        <li>
                            <div class="score"><span>Good<em>350 Reviews</em></span><strong>8.0</strong></div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="box_grid" style="border-radius: 20px;">
                    <figure>
                        <a href="#!"><img src="images/hyderabad.jpg" class="img-fluid" alt="" width="800" height="533">
                            <div class="read_more"><span><button class="btn btn-transparent" data-bs-toggle="modal"
                                        data-bs-target="#hyderabadmodal">Read
                                        reviews</button></span></div>
                        </a>
                        <small>Hyderabad</small>
                    </figure>
                    <div class="wrapper">
                        <h3 style="font-weight: 700;">Hyderabad</h3>
                        <p>Hyderabad: A blend of historical charm and delectable cuisine awaits in this vibrant city.
                        </p>
                        <span class="price">From <strong> &#8377; 2,199</strong> /per person</span>
                    </div>
                    <ul>
                        <li></li>
                        <li>
                            <div class="score"><span>Superb<em>350 Reviews</em></span><strong>9.0</strong></div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="item">
                <div class="box_grid" style="border-radius: 20px;">
                    <figure>
                        <a href="#!"><img src="images/chennai.jpg" class="img-fluid" alt="" width="800" height="533">
                            <div class="read_more"><span><button class="btn btn-transparent" data-bs-toggle="modal"
                                        data-bs-target="#chennaimodal">Read
                                        reviews</button></span></div>
                        </a>
                        <small>Chennai</small>
                    </figure>
                    <div class="wrapper">
                        <h3 style="font-weight: 700;">Chennai</h3>
                        <p>Chennai: Blend of tradition and modernity, rich in culture with stunning coastline.</p>
                        <span class="price">From <strong> &#8377; 1,999</strong> /per person</span>
                    </div>
                    <ul>
                        <li></li>
                        <li>
                            <div class="score"><span>Good<em>350 Reviews</em></span><strong>7.5</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <hr>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="delhimodal" tabindex="-1" role="dialog" aria-labelledby="delhimodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delhimodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "delhi";

                    // Fetch reviews for the selected destination from the database
                    $query = "SELECT reviews.*, CONCAT(users.first_name, ' ', users.last_name) AS fullname FROM reviews JOIN users ON reviews.user_id = users.user_id WHERE destination_name = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("s", $destination);
                    $stmt->execute();
                    $reviews = $stmt->get_result();
                    ?>
                    <h1 class="text-center" style="font-weight: 700; margin-top: 10px; margin-bottom: 30px;">
                        <?php echo ucfirst($destination); ?>
                    </h1>
                    <div class="review-container">
                        <?php if ($reviews->num_rows > 0): ?>
                            <?php while ($review = $reviews->fetch_assoc()): ?>
                                <div class="review-box"
                                    style="margin-top: 40px; border: 1px solid grey; border-radius: 10px; padding-left:20px; padding-bottom: 10px; padding-top:10px;">
                                    <div class="review-header" style="display: flex; justify-content: space-between;">
                                        <span class="author-name"
                                            style="font-weight: 700;"><?php echo $review['fullname']; ?></span>
                                        <span style="padding-right: 20px; font-weight: 700;">Rating:
                                            <span class="rating">
                                                <?php
                                                $rating = $review['rating'];
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($i <= $rating) {
                                                        echo '<i class="fa fa-star"></i>';
                                                    } else {
                                                        echo '<i class="fa fa-star-o"></i>';
                                                    }
                                                }
                                                ?>
                                            </span></span>
                                    </div>
                                    <hr>
                                    <div class="review-text">
                                        <?php echo $review['review_text']; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No reviews available for this destination.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="kolkatamodal" tabindex="-1" role="dialog" aria-labelledby="kolkatamodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kolkatamodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "kolkata";

                    // Fetch reviews for the selected destination from the database
                    $query = "SELECT reviews.*, CONCAT(users.first_name, ' ', users.last_name) AS fullname FROM reviews JOIN users ON reviews.user_id = users.user_id WHERE destination_name = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("s", $destination);
                    $stmt->execute();
                    $reviews = $stmt->get_result();
                    ?>
                    <h1 class="text-center"
                        style="color: black; font-weight: 700; margin-top: 10px; margin-bottom: 30px;">
                        <?php echo ucfirst($destination); ?>
                    </h1>
                    <div class="review-container">
                        <?php if ($reviews->num_rows > 0): ?>
                            <?php while ($review = $reviews->fetch_assoc()): ?>
                                <div class="review-box"
                                    style="margin-top: 40px; border: 1px solid grey; border-radius: 10px; padding-left:20px; padding-bottom: 10px; padding-top:10px;">
                                    <div class="review-header" style="display: flex; justify-content: space-between;">
                                        <span class="author-name"
                                            style="font-weight: 700;"><?php echo $review['fullname']; ?></span>
                                        <span style="padding-right: 20px; font-weight: 700;">Rating:
                                            <span class="rating">
                                                <?php
                                                $rating = $review['rating'];
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($i <= $rating) {
                                                        echo '<i class="fa fa-star"></i>';
                                                    } else {
                                                        echo '<i class="fa fa-star-o"></i>';
                                                    }
                                                }
                                                ?>
                                            </span></span>
                                    </div>
                                    <hr>
                                    <div class="review-text">
                                        <?php echo $review['review_text']; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No reviews available for this destination.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="mumbaimodal" tabindex="-1" role="dialog" aria-labelledby="mumbaimodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mumbaimodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "mumbai";

                    // Fetch reviews for the selected destination from the database
                    $query = "SELECT reviews.*, CONCAT(users.first_name, ' ', users.last_name) AS fullname FROM reviews JOIN users ON reviews.user_id = users.user_id WHERE destination_name = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("s", $destination);
                    $stmt->execute();
                    $reviews = $stmt->get_result();
                    ?>
                    <h1 class="text-center"
                        style="color: black; font-weight: 700; margin-top: 10px; margin-bottom: 30px;">
                        <?php echo ucfirst($destination); ?>
                    </h1>
                    <div class="review-container">
                        <?php if ($reviews->num_rows > 0): ?>
                            <?php while ($review = $reviews->fetch_assoc()): ?>
                                <div class="review-box"
                                    style="margin-top: 40px; border: 1px solid grey; border-radius: 10px; padding-left:20px; padding-bottom: 10px; padding-top:10px;">
                                    <div class="review-header" style="display: flex; justify-content: space-between;">
                                        <span class="author-name"
                                            style="font-weight: 700;"><?php echo $review['fullname']; ?></span>
                                        <span style="padding-right: 20px; font-weight: 700;">Rating:
                                            <span class="rating">
                                                <?php
                                                $rating = $review['rating'];
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($i <= $rating) {
                                                        echo '<i class="fa fa-star"></i>';
                                                    } else {
                                                        echo '<i class="fa fa-star-o"></i>';
                                                    }
                                                }
                                                ?>
                                            </span></span>
                                    </div>
                                    <hr>
                                    <div class="review-text">
                                        <?php echo $review['review_text']; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No reviews available for this destination.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="goamodal" tabindex="-1" role="dialog" aria-labelledby="goamodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="goamodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "goa";

                    // Fetch reviews for the selected destination from the database
                    $query = "SELECT reviews.*, CONCAT(users.first_name, ' ', users.last_name) AS fullname FROM reviews JOIN users ON reviews.user_id = users.user_id WHERE destination_name = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("s", $destination);
                    $stmt->execute();
                    $reviews = $stmt->get_result();
                    ?>
                    <h1 class="text-center"
                        style="color: black; font-weight: 700; margin-top: 10px; margin-bottom: 30px;">
                        <?php echo ucfirst($destination); ?>
                    </h1>
                    <div class="review-container">
                        <?php if ($reviews->num_rows > 0): ?>
                            <?php while ($review = $reviews->fetch_assoc()): ?>
                                <div class="review-box"
                                    style="margin-top: 40px; border: 1px solid grey; border-radius: 10px; padding-left:20px; padding-bottom: 10px; padding-top:10px;">
                                    <div class="review-header" style="display: flex; justify-content: space-between;">
                                        <span class="author-name"
                                            style="font-weight: 700;"><?php echo $review['fullname']; ?></span>
                                        <span style="padding-right: 20px; font-weight: 700;">Rating:
                                            <span class="rating">
                                                <?php
                                                $rating = $review['rating'];
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($i <= $rating) {
                                                        echo '<i class="fa fa-star"></i>';
                                                    } else {
                                                        echo '<i class="fa fa-star-o"></i>';
                                                    }
                                                }
                                                ?>
                                            </span></span>
                                    </div>
                                    <hr>
                                    <div class="review-text">
                                        <?php echo $review['review_text']; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No reviews available for this destination.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="hyderabadmodal" tabindex="-1" role="dialog" aria-labelledby="hyderabadmodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hyderabadmodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "hyderabad";

                    // Fetch reviews for the selected destination from the database
                    $query = "SELECT reviews.*, CONCAT(users.first_name, ' ', users.last_name) AS fullname FROM reviews JOIN users ON reviews.user_id = users.user_id WHERE destination_name = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("s", $destination);
                    $stmt->execute();
                    $reviews = $stmt->get_result();
                    ?>
                    <h1 class="text-center"
                        style="color: black; font-weight: 700; margin-top: 10px; margin-bottom: 30px;">
                        <?php echo ucfirst($destination); ?>
                    </h1>
                    <div class="review-container">
                        <?php if ($reviews->num_rows > 0): ?>
                            <?php while ($review = $reviews->fetch_assoc()): ?>
                                <div class="review-box"
                                    style="margin-top: 40px; border: 1px solid grey; border-radius: 10px; padding-left:20px; padding-bottom: 10px; padding-top:10px;">
                                    <div class="review-header" style="display: flex; justify-content: space-between;">
                                        <span class="author-name"
                                            style="font-weight: 700;"><?php echo $review['fullname']; ?></span>
                                        <span style="padding-right: 20px; font-weight: 700;">Rating:
                                            <span class="rating">
                                                <?php
                                                $rating = $review['rating'];
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($i <= $rating) {
                                                        echo '<i class="fa fa-star"></i>';
                                                    } else {
                                                        echo '<i class="fa fa-star-o"></i>';
                                                    }
                                                }
                                                ?>
                                            </span></span>
                                    </div>
                                    <hr>
                                    <div class="review-text">
                                        <?php echo $review['review_text']; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No reviews available for this destination.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="chennaimodal" tabindex="-1" role="dialog" aria-labelledby="lchennaimodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chennaimodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "chennai";

                    // Fetch reviews for the selected destination from the database
                    $query = "SELECT reviews.*, CONCAT(users.first_name, ' ', users.last_name) AS fullname FROM reviews JOIN users ON reviews.user_id = users.user_id WHERE destination_name = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->bind_param("s", $destination);
                    $stmt->execute();
                    $reviews = $stmt->get_result();
                    ?>
                    <h1 class="text-center"
                        style="color: black; font-weight: 700; margin-top: 10px; margin-bottom: 30px;">
                        <?php echo ucfirst($destination); ?>
                    </h1>
                    <div class="review-container">
                        <?php if ($reviews->num_rows > 0): ?>
                            <?php while ($review = $reviews->fetch_assoc()): ?>
                                <div class="review-box"
                                    style="margin-top: 40px; border: 1px solid grey; border-radius: 10px; padding-left:20px; padding-bottom: 10px; padding-top:10px;">
                                    <div class="review-header" style="display: flex; justify-content: space-between;">
                                        <span class="author-name"
                                            style="font-weight: 700;"><?php echo $review['fullname']; ?></span>
                                        <span style="padding-right: 20px; font-weight: 700;">Rating:
                                            <span class="rating">
                                                <?php
                                                $rating = $review['rating'];
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($i <= $rating) {
                                                        echo '<i class="fa fa-star"></i>';
                                                    } else {
                                                        echo '<i class="fa fa-star-o"></i>';
                                                    }
                                                }
                                                ?>
                                            </span></span>
                                    </div>
                                    <hr>
                                    <div class="review-text">
                                        <?php echo $review['review_text']; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>No reviews available for this destination.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Advertisement and Anchor Buttons Section -->
    <section style="width: 100%; padding-bottom: 300px;">
        <div class="container-fluid" id="advertisement" style="padding: 1rem!important;
        margin-top: 200px;
            margin-bottom: 1rem;
            background: rgba(0, 0, 0, 0.5);
            box-shadow: 0 8px 32px 0 black;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 50px 100px 50px 100px;" data-aos="fade-down" data-aos-easing="ease-in-sine">
            <h2 class="section-title h1 text-center"
                style="color: white; font-weight: 700; text-shadow: 2px 2px black;">
                Discover More
            </h2>
            <p class="text-center mb-2 h5" style="color: white; text-shadow: 1px 1px black;">
                Explore our destinations and check out the experiences of our happy customers.
            </p>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" data-aos="fade-right">
                    <div class="card" style="background-color: rgb(255, 255, 255, 0.7); border-radius: 20px;">
                        <div class="card-block block-1 text-center" style="padding: 50px;">
                            <img src="images/travel.png" alt="Location Marker"
                                style="width: 50px; height: 50px; margin-bottom: 20px;">
                            <h3 class="card-title" style="font-weight: 700; color: black;">Destinations in India</h3>
                            <p class="card-text" style="color: black;">
                                Discover the most beautiful places in India. From historical landmarks to scenic natural
                                wonders, explore all that India has to offer.
                            </p>
                            <a href="destinations.php" class="btn btn-dark" style="margin-top: 20px;">See
                                Destinations</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" data-aos="fade-left">
                    <div class="card" style="background-color: rgb(255, 255, 255, 0.7); border-radius: 20px;">
                        <div class="card-block block-2 text-center" style="padding: 50px;">
                            <img src="images/gallery.png" alt="Camera"
                                style="width: 50px; height: 50px; margin-bottom: 20px;">
                            <h3 class="card-title" style="font-weight: 700; color: black;">Photo Gallery</h3>
                            <p class="card-text" style="color: black;">
                                Take a look at the amazing moments captured by our customers during their trips. See
                                their joyous experiences and beautiful destinations.
                            </p>
                            <a href="gallery.php" class="btn btn-dark" style="margin-top: 20px;">See Photo Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer" style="background-color: rgba(0,0,0,0.5); padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="footer-col col-xs-12 col-sm-4 col-md-4" style="color: white; text-shadow: 2px 2px black;"
                    id="aboutus">
                    <h4 style="color: white; font-weight: 700; margin-bottom: 30px;">About Us</h4>
                    <p style="color: white;">We are a travel and tourism company dedicated to providing exceptional
                        travel experiences to our customers. Our mission is to make every journey memorable and
                        hassle-free.</p>
                </div>
                <div class="footer-col col-xs-12 col-sm-4 col-md-4" style="color: white; text-shadow: 2px 2px black;"
                    id="contactus">
                    <h4 style="color: white; font-weight: 700; margin-bottom: 30px;">Contact Us</h4>
                    <p style="color: white;">If you have any questions or inquiries, feel free to reach out to us:</p>
                    <ul style="color: white;">
                        <li>Email: destinationdelight@gmail.com</li>
                        <li>Phone: +91 9996663330</li>
                        <li>Address: ABC complex, XYZ street, Hyderabad</li>
                    </ul>
                </div>
                <div class="footer-col col-xs-12 col-sm-4 col-md-4" style="color: white; text-shadow: 2px 2px black;">
                    <h5 style="color: white; font-weight: 700; margin-bottom: 30px;">Quick links</h5>
                    <ul class="list-unstyled quick-links" style="color: white;">
                        <li><a href="javascript:void();" style="color: white; text-shadow: 2px 2px black;"><i
                                    class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="javascript:void();" style="color: white; text-shadow: 2px 2px black;"><i
                                    class="fa fa-angle-double-right"></i>Destinations</a></li>
                        <li><a href="javascript:void();" style="color: white; text-shadow: 2px 2px black;"><i
                                    class="fa fa-angle-double-right"></i>About us</a></li>
                        <li><a href="javascript:void();" style="color: white; text-shadow: 2px 2px black;"><i
                                    class="fa fa-angle-double-right"></i>Contact us</a></li>
                        <li><a href="javascript:void();" style="color: white; text-shadow: 2px 2px black;"><i
                                    class="fa fa-angle-double-right"></i>Login/Sign up</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"
                                    style="color: white; text-shadow: 2px 2px black;"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"
                                    style="color: white; text-shadow: 2px 2px black;"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"
                                    style="color: white; text-shadow: 2px 2px black;"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i
                                    class="fa fa-envelope" style="color: white; text-shadow: 2px 2px black;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script
        src="https://www.jqueryscript.net/demo/Customizable-Animated-Dropdown-Plugin-with-jQuery-CSS3-Nice-Select/js/jquery.nice-select.js"></script>
    <script>
        AOS.init({
            duration: 900, // Animation duration
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.main_banner').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 0,
                nav: false,
                center: true,
                lazyLoad: true,
                autoWidth: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            });
            $('#city').niceSelect();
        });
        $(document).ready(function () {
            $('.places').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 0,
                nav: true,
                center: true,
                lazyLoad: true,
                autoWidth: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });

        /********** Panel_Dropdown ***********/
        function close_panel_dropdown() {
            $(".panel-dropdown").removeClass("active")
        }
        $(".panel-dropdown a").on("click", function (event) {
            if ($(this).parent().is(".active")) {
                close_panel_dropdown()
            } else {
                close_panel_dropdown();
                $(this).parent().addClass("active")
            };
            event.preventDefault()
        });
        var mouse_is_inside = false;
        $(".panel-dropdown").hover(function () {
            mouse_is_inside = true
        }, function () {
            mouse_is_inside = false
        });
        $("body").mouseup(function () {
            if (!mouse_is_inside) {
                close_panel_dropdown()
            }
        });


        /********** Quality ***********/
        function qtySum() {
            var arr = document.getElementsByName('qtyInput');
            var tot = 0;
            for (var i = 0; i < arr.length; i++) {
                if (parseInt(arr[i].value))
                    tot += parseInt(arr[i].value);
            }
            var cardQty = document.querySelector(".qtyTotal");
            cardQty.innerHTML = tot;
        }
        qtySum();

        $(function () {
            $(".qtyButtons input").after('<div class="qtyInc"></div>');
            $(".qtyButtons input").before('<div class="qtyDec"></div>');
            $(".qtyDec, .qtyInc").on("click", function () {

                var $button = $(this);
                var oldValue = $button.parent().find("input").val();

                if ($button.hasClass('qtyInc')) {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }

                $button.parent().find("input").val(newVal);
                qtySum();
                $(".qtyTotal").addClass("rotate-x");
            });

            function removeAnimation() { $(".qtyTotal").removeClass("rotate-x"); }
            const counter = document.querySelector(".qtyTotal");
            counter.addEventListener("animationend", removeAnimation);
        });

        $(function () {
            'use strict';
            $('input[name="dates"]').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
                $(this).val(picker.startDate.format('MM-DD-YYYY') + ' > ' + picker.endDate.format('MM-DD-YYYY'));
            });
            $('input[name="dates"]').on('cancel.daterangepicker', function (ev, picker) {
                $(this).val('');
            });
        });

        /********** Side_Menu ***********/
        $(function () { var e = $("body"), i = $(".navbar-collapse"); e.append('<div class="side-menu-overlay"></div>'); var s = $(".side-menu-overlay"); e.append('<div id="side-menu"></div>'); var n = $("#side-menu"); n.append('Logo <button class="close"><span aria-hidden="true">x</span></button>'); var o = n.find(".close"); n.append('<div class="contents"></div>'); var a = n.find(".contents"); function d() { e.removeClass("side-menu-visible"), s.fadeOut(), setTimeout(function () { n.hide(), e.removeClass("overflow-hidden") }, 400) } i.on("show.bs.collapse", function (i) { i.preventDefault(); var o = $(this).html(); a.html(o), e.addClass("overflow-hidden"), n.show(), setTimeout(function () { e.addClass("side-menu-visible"), s.fadeIn() }, 50) }), o.on("click", function (e) { e.preventDefault(), d() }), s.on("click", function (e) { d() }), $(window).resize(function () { !i.is(":visible") && e.hasClass("side-menu-visible") ? (n.show(), s.show()) : (n.hide(), s.hide()) }) });
    </script>

</body>

</html>