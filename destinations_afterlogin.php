<?php error_reporting(E_ALL);
session_start();
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
if (!isset($_SESSION['email'])) {
    header("Location: destinations.php");
    exit();
} ?>
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

    <style>
        body {
            overflow-x: hidden;
            overflow-y: 0;

        }

        .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Curved borders and responsiveness for the video */
        .responsive-video {
            width: 100%;
            height: auto;
            border-radius: 15px;
            max-width: 100%;
            display: block;
            margin: 70px auto;
        }

        @media (max-width: 768px) {
            .responsive-video {
                width: 100%;
                height: auto;
                border-radius: 15px;
            }
        }

        @media (min-width: 769px) and (max-width: 1200px) {
            .responsive-video {
                width: 90%;
                height: auto;
                border-radius: 15px;
            }
        }

        @media (min-width: 1201px) {
            .responsive-video {
                width: 80%;
                height: auto;
                border-radius: 15px;
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
    </style>

    <title>Destinations | Destination Delight</title>
</head>

<body
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/destinations.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; font-family: 'Poppins', sans-serif !important;">
    <!-- Navigation -->
    <?php require 'components/_nav_afterlogin_destinations.php'; ?>


    <!-- Your custom CSS -->
    <link rel="stylesheet" href="css/welcome.css">
    <section class="Destinations">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center" style="background: rgba( 0, 0, 0, 0.2);
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    padding: 50px 50px 50px 50px;
    margin-top: 170px;" data-aos="zoom-in">
                    <h1 style="color: white; font-weight: 700; text-shadow: 2px 2px black;">Explore the popular
                        destinations in India <img src="images/explore.png" alt="Camera"
                            style="width: 70px; height: 70px; margin-left: 10px; margin-bottom: 5px;"></h1>
                    <br>
                    <br>
                    <br>
                    <a href="#featured-destinations" class="btn btn-light btn-lg">Explore Destinations</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Destinations Section -->
    <section class="featured-destinations" id="featured-destinations" style="margin-top: 200px;">
        <!-- Add more destinations here -->
        <section class="featured-destinations" id="featured-destinations">
            <!-- Add more destinations here -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-left" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=ladakh+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/ladakh.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Ladakh</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Ladakh
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Ladakh/@33.9808675,74.80349,7z/data=!3m1!4b1!4m6!3m5!1s0x38fd86bce37d7139:0xc6c2990fdad28ac7!8m2!3d34.2268475!4d77.5619419!16zL20vMDFzNmN5?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Experience the high-altitude desert surrounded by majestic Himalayan peaks.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.7</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                        </div>
                                                        <div>
                                                            908,803 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#ladakhmodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Explore Ladakh's breathtaking landscapes
                                                            and high-altitude
                                                            desert amidst Himalayan peaks.
                                                        </div>
                                                    </div>
                                                    <a href="https://www.zostel.com/blog/leh-ladakh-the-ultimate-travel-guide/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Ladakh</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-right" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Jaipur
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Jaipur,+Rajasthan/@26.8854214,75.6257456,11z/data=!3m1!4b1!4m6!3m5!1s0x396c4adf4c57e281:0xce1c63a0cf22e09!8m2!3d26.9124336!4d75.7872709!16zL20vMDE2NzIy?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700; margin-bottom: 50px;">
                                        Visit the magnificent palaces, forts, and colorful markets of Jaipur.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.0</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            1,050,008 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#jaipurmodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Dive into a Jaipur-centric blog for an immersive journey
                                                            through the city's wonders.
                                                        </div>
                                                    </div>
                                                    <a href="https://blog.untravel.com/jaipur/" class="btn btn-dark"
                                                        target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=jaipur+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/jaipur.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Jaipur</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Jaipur</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-left" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-4 text-center">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <a href="https://www.youtube.com/results?search_query=delhi+travel+vlogs"
                                        target="_blank"><video class="responsive-video" autoplay muted loop>
                                            <source src="images/delhi.mp4" type="video/mp4">
                                        </video></a>
                                    <div class="overlay" style="font-weight: 700; color: white;">
                                        <p>Click on the video to watch vlogs on Delhi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Delhi
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Delhi/@28.6442874,76.7635729,10z/data=!3m1!4b1!4m6!3m5!1s0x390cfd5b347eb62d:0x37205b715389640!8m2!3d28.7040592!4d77.1024902!16zL20vMDlmMDc?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Discover the rich history, culture, and modern attractions of Delhi.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.2</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            1,000,800 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#delhimodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Explore a captivating Delhi-focused blog for insider
                                                            insights about India's bustling
                                                            capital.
                                                        </div>
                                                    </div>
                                                    <a href="https://www.neverendingfootsteps.com/three-days-new-delhi-itinerary/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Delhi</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-right" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Agra
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Agra,+Uttar+Pradesh/@27.1763031,77.8976112,12z/data=!3m1!4b1!4m6!3m5!1s0x39740d857c2f41d9:0x784aef38a9523b42!8m2!3d27.1766701!4d78.0080745!16zL20vMDF6eHg5?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Marvel at the stunning Taj Mahal, one of the Seven Wonders of the World.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.5</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            1,890,000 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#agramodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Discover the enchanting tales and timeless wonders of
                                                            Agra
                                                            through a captivating blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://soultravelindia.com/agra-travel-guide/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=agra+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/agra.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Agra</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Agra</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-left" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=amritsar+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/amritsar.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Amritsar</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Amritsar
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Amritsar,+Punjab/@31.6336639,74.7877187,12z/data=!3m1!4b1!4m6!3m5!1s0x391964aa569e7355:0xeea2605bee84ef7d!8m2!3d31.6339793!4d74.8722642!16zL20vMDI5a3B5?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Experience soulful prayers and visit the sacred Golden Temple.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.0</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            650,800 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#amritsarmodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Explore the spiritual essence and vibrant culture of
                                                            Amritsar in an illuminating blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://www.cityamritsar.com/" class="btn btn-dark"
                                                        target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Amritsar</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-right" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Varanasi
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Varanasi,+Uttar+Pradesh/@25.3208949,82.9087071,12z/data=!3m1!4b1!4m6!3m5!1s0x398e2db76febcf4d:0x68131710853ff0b5!8m2!3d25.3176452!4d82.9739144!16zL20vMDFqOTIy?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Embark on a spiritual journey along the holy river Ganges.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.4</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            2,200,820 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#varanasimodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Dive into the spiritual heart of India with captivating
                                                            insights on Varanasi through a blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://www.taleof2backpackers.com/kashi-varanasi-benaras/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=varanasi+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/varanasi.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Varanasi</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Varanasi</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-left" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=shimla+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/shimla.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Shimla</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Shimla
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Shimla,+Himachal+Pradesh/@31.0782864,77.1178215,13z/data=!3m1!4b1!4m6!3m5!1s0x390578e3e35d6e67:0x1f7e7ff6ff9f54b7!8m2!3d31.1048145!4d77.1734033!16zL20vMDJwM215?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Escape to the beautiful hill station and enjoy the mesmerizing landscapes.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.7</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            3,000,899 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#shimlamodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Explore the tranquil beauty and serene landscapes of
                                                            Shimla
                                                            with an insightful blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://blog.untravel.com/shimla/" class="btn btn-dark"
                                                        target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Shimla</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-right" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Kolkata
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Kolkata,+West+Bengal/@22.5355649,88.2649508,12z/data=!3m1!4b1!4m6!3m5!1s0x39f882db4908f667:0x43e330e68f6c2cbc!8m2!3d22.5743545!4d88.3628734!16zL20vMGN2dzk?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Explore the rich artistic and cultural heritage of Kolkata.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.0</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            4,000,800 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#kolkatamodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Discover the rich cultural tapestry and vibrant charm of
                                                            Kolkata through an engaging blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://traveltriangle.com/blog/kolkata/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=kolkata+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/kolkata.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Kolkata</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Kolkata</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-left" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=darjeeling+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/darjeeling.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Darjeeling</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Darjeeling
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Darjeeling,+West+Bengal/@27.0332654,88.2234752,13z/data=!3m1!4b1!4m6!3m5!1s0x39e42e654cf501bb:0x4175555979d4702a!8m2!3d27.0410218!4d88.2662745!16zL20vMDE5amxx?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Experience unparalleled Himalayan beauty and serene hillside tea
                                        plantations.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.0</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            1,988,800 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#darjeelingmodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Explore the serene beauty of Darjeeling
                                                            through captivating stories and insights on a blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://www.taleof2backpackers.com/darjeeling-travel-guide/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Darjeeling</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-right" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Mumbai
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Mumbai,+Maharashtra/@19.082502,72.716373,11z/data=!3m1!4b1!4m6!3m5!1s0x3be7c6306644edc1:0x5da4ed8f8d648c69!8m2!3d19.0759837!4d72.8776559!16zL20vMDR2bXA?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Explore the city of dreams, beaches, and vibrant nightlife.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.2</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            2,000,800 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#mumbaimodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Discover the vibrant cityscape and beaches of Mumbai
                                                            with a
                                                            captivating blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://traveltriangle.com/blog/mumbai/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=mumbai+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/mumbai.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Mumbai</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Mumbai</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-left" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=pune+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/pune.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Pune</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Pune
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Pune,+Maharashtra/@18.5247614,73.7805654,12z/data=!3m1!4b1!4m6!3m5!1s0x3bc2bf2e67461101:0x828d43bf9d9ee343!8m2!3d18.5204303!4d73.8567437!16zL20vMDE1eTJx?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Discover historical sites and rich cultural traditions in Pune.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.8</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                        </div>
                                                        <div>
                                                            2,560,860 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#punemodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Explore the historical sites and cultural richness of
                                                            Pune
                                                            through a insightful blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://traveltriangle.com/blog/pune/" class="btn btn-dark"
                                                        target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Pune</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-right" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Goa
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Goa/@15.3501487,73.6770295,10z/data=!3m1!4b1!4m6!3m5!1s0x3bbfba106336b741:0xeaf887ff62f34092!8m2!3d15.2993265!4d74.123996!16zL20vMDFjMW5t?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Relax at the tropical paradise with sandy beaches, nightlife, and delicious
                                        seafood.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.5</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            3,045,800 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#goamodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Discover the tropical paradise of Goa with a captivating
                                                            blog and
                                                            delectable seafood.
                                                        </div>
                                                    </div>
                                                    <a href="https://traveltriangle.com/blog/goa/" class="btn btn-dark"
                                                        target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=goa+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/goa.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Goa</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Goa</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-left" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=hyderabad+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/hyderabad.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Hyderabad</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Hyderabad
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Hyderabad,+Telangana/@17.4126086,78.2432322,11z/data=!3m1!4b1!4m6!3m5!1s0x3bcb99daeaebd2c7:0xae93b78392bafbc2!8m2!3d17.406498!4d78.4772439!16zL20vMDljNnc?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Delve into the history of the once ruling dynasties and taste the delectable
                                        biryani.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.3</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            1,000,830 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#hyderabadmodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Explore the historical marvels and exquisite biryani of
                                                            Hyderabad through a blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://polkajunction.com/hyderabad-itinerary-visiting-places-in-hyderabad/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Hyderabad</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-right" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Chennai
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Chennai,+Tamil+Nadu/@13.0478078,80.0441981,11z/data=!3m1!4b1!4m6!3m5!1s0x3a5265ea4f7d3361:0x6e61a70b6863d433!8m2!3d13.0843007!4d80.2704622!16zL20vMGM4dGs?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Explore the rich artistic and cultural heritage of Chennai.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.4</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            809,840 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#chennaimodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Discover the vibrant culture and rich heritage of
                                                            Chennai through an insightful blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://traveltriangle.com/blog/chennai/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=chennai+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/chennai.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Chennai</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Chennai</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-left" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=kochin+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/kochin.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Kochin</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Kochin
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Kochi,+Kerala/@9.9828542,76.13612,11z/data=!3m1!4b1!4m6!3m5!1s0x3b080d514abec6bf:0xbd582caa5844192!8m2!3d9.9312328!4d76.2673041!16zL20vMGZsMnM?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Discover the picturesque backwaters, beaches, and rich history of Kochin.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.2</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            1,000,800 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#kochinmodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            explore Kochin's picturesque
                                                            backwaters through a
                                                            captivating blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://travelshoebum.com/2023/05/29/exploring-kochi-a-travel-guide-for-must-visit-and-offbeat-sights/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Kochin</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-right" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Banglore
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Bengaluru,+Karnataka/@12.9542802,77.4661258,11z/data=!3m1!4b1!4m6!3m5!1s0x3bae1670c9b44e6d:0xf8dfc3e8517e4fe0!8m2!3d12.9715987!4d77.5945627!16zL20vMDljMTc?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Explore the IT hub and beautiful gardens of Banglore.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.3</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            2,304,850 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#bangloremodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Discover the vibrant IT hub and lush gardens of
                                                            Bangalore
                                                            through an insightful blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://traveltriangle.com/blog/bangalore/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=banglore+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/banglore.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Banglore</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Banglore</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-left" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=madurai+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/madurai.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Madurai</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Madurai
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Madurai,+Tamil+Nadu/@9.9179959,78.0404215,12z/data=!3m1!4b1!4m6!3m5!1s0x3b00c582b1189633:0xdc955b7264f63933!8m2!3d9.9252007!4d78.1197754!16zL20vMDE5ZmJw?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Witness the mesmerizing Meenakshi Amman Temple and the rich history of
                                        Madurai.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.2</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            1,350,897 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#maduraimodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Explore the richness and architectural marvels of
                                                            Madurai through a captivating blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://www.savaari.com/blog/things-to-do-in-madurai/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Madurai</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card right-card" data-aos="fade-right" style="background: rgba( 0, 0, 0, 0.2 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    margin-bottom: 70px;">
                        <div class=" row no-gutters">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p style="color: white; border-bottom: 4px solid white; font-weight: 700;">
                                            Mysore
                                            <span style="float: right; font-weight:400;">(click the icon to view
                                                on maps)<a
                                                    href="https://www.google.com/maps/place/Mysuru,+Karnataka/@12.3108011,76.5532877,12z/data=!3m1!4b1!4m6!3m5!1s0x3baf70381d572ef9:0x2b89ece8c0f8396d!8m2!3d12.2958104!4d76.6393805!16zL20vMGo2MDM?entry=ttu"
                                                    target="_blank">
                                                    <img src="images/location.png" class="float-right" alt="Camera"
                                                        style="width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;"></a></span>
                                        </p>
                                    </h4>
                                    <p class="card-text" style="color: white; font-weight: 700;">
                                        Explore the royal city famous for its majestic palace and sandalwood.
                                    </p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Ratings &
                                                        Reviews
                                                    </h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto;">
                                                        <h1 class="rating-num">
                                                            4.0</h1>
                                                        <div class="rating text-center">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star-fill.svg" alt="">
                                                            <img src="images/star.svg" alt="">
                                                        </div>
                                                        <div>
                                                            1,087,809 total
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark" data-bs-toggle="modal"
                                                        data-bs-target="#mysoremodal">
                                                        View Reviews
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card" style="background: rgba(211, 211, 211, 0.7);
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    backdrop-filter: blur(0.25px);">
                                                <div class="card-body text-center">
                                                    <h5 class="card-title" style="font-weight: 700;">Blogs</h5>
                                                    <div class="col-xs-12 col-md-6 text-center" style="margin-left: auto;
                                                        margin-right: auto; margin-bottom: 8px;">
                                                        <div>
                                                            Discover the regal grandeur and cultural heritage of
                                                            Mysore
                                                            through a vibrant blog.
                                                        </div>
                                                    </div>
                                                    <a href="https://www.savaari.com/blog/things-to-do-in-mysore/"
                                                        class="btn btn-dark" target="_blank">Read Blogs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <a href="https://www.youtube.com/results?search_query=mysore+travel+vlogs"
                                    target="_blank"><video class="responsive-video" autoplay muted loop>
                                        <source src="images/mysore.mp4" type="video/mp4">
                                    </video></a>
                                <div class="overlay" style="font-weight: 700; color: white;">
                                    <p>Click on the video to watch vlogs on Mysore</p>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-dark btn-lg" style="font-weight:700;" data-bs-toggle="modal"
                            data-bs-target="#bookingsmodal" onclick="openBookingModal()">Book
                            a
                            trip to
                            Mysore</button>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
        </section>
        <section>
            <?php
            // Include database connection file
            require_once 'database.php';

            // Fetch destination information from the database
            $destinationsQuery = "SELECT * FROM destinations";
            $result = mysqli_query($conn, $destinationsQuery);

            // Check if query was successful
            if ($result) {
                // Fetch and display destination cards
                while ($row = mysqli_fetch_assoc($result)) {
                    // Extract the YouTube video ID from the video URL
                    $video_url = $row['video_url'];
                    if (preg_match('/youtu\.be\/([^\?]*)|youtube\.com\/.*v=([^&]*)/', $video_url, $matches)) {
                        $video_id = !empty($matches[1]) ? $matches[1] : $matches[2];
                        $embed_url = "https://www.youtube.com/embed/" . $video_id . "?autoplay=1&mute=1&controls=0&modestbranding=0&rel=0&showinfo=0";
                    } else {
                        $embed_url = $video_url; // fallback to the original URL if not a YouTube link
                    }

                    $is_even = $row['id'] % 2 === 0;

                    if ($is_even) {
                        echo "<div class='row'>";
                        echo "<div class='col-md-12'>";
                        echo "<div class='card right-card' data-aos='fade-right' style='background: rgba(0, 0, 0, 0.2);";
                        echo "box-shadow: 0 8px 32px 0 black;";
                        echo "backdrop-filter: blur(10px);";
                        echo "-webkit-backdrop-filter: blur(10px);";
                        echo "border-radius: 30px;";
                        echo "margin-bottom: 70px;'>";
                        echo "<div class='row no-gutters'>";
                        echo "<div class='col-md-8'>";
                        echo "<div class='card-body'>";
                        echo "<h4 class='card-title'>";
                        echo "<p style='color: white; border-bottom: 4px solid white; font-weight: 700;'>" . $row['name'];
                        echo "<span style='float: right; font-weight: 400;'>(click the icon to view on maps)";
                        echo "<a href='" . $row['maps_link'] . "' target='_blank'>";
                        echo "<img src='images/location.png' class='float-right' alt='Camera' style='width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;'></a></span>";
                        echo "</p>";
                        echo "</h4>";
                        echo "<p class='card-text' style='color: white; font-weight: 700;'>" . $row['description'] . "</p>";

                        echo "<div class='row'>";
                        echo "<div class='col-sm-6'>";
                        echo "<div class='card' style='background: rgba(211, 211, 211, 0.7);";
                        echo "box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);";
                        echo "backdrop-filter: blur(0.25px);'>";
                        echo "<div class='card-body text-center'>";
                        echo "<h5 class='card-title' style='font-weight: 700;'>Ratings & Reviews</h5>";
                        echo "<div class='col-xs-12 col-md-6 text-center' style='margin-left: auto; margin-right: auto;'>";
                        echo "<h1 class='rating-num'>" . number_format($row['ratings'], 1) . "</h1>";
                        echo "<div class='rating text-center'>";

                        // Display star ratings
                        $full_stars = floor($row['ratings']);
                        $empty_stars = 5 - $full_stars;

                        for ($i = 0; $i < $full_stars; $i++) {
                            echo "<img src='images/star-fill.svg' alt=''>";
                        }
                        for ($i = 0; $i < $empty_stars; $i++) {
                            echo "<img src='images/star.svg' alt=''>";
                        }

                        echo "</div>";
                        echo "<div>{$row['reviews_total']} total</div>";
                        echo "</div>";
                        echo "<button class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#" . strtolower($row['name']) . "modal'>View Reviews</button>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='col-sm-6'>";
                        echo "<div class='card' style='background: rgba(211, 211, 211, 0.7);";
                        echo "box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);";
                        echo "backdrop-filter: blur(0.25px);'>";
                        echo "<div class='card-body text-center'>";
                        echo "<h5 class='card-title' style='font-weight: 700;'>Blogs</h5>";
                        echo "<div class='col-xs-12 col-md-6 text-center' style='margin-left: auto; margin-right: auto; margin-bottom: 8px;'>";
                        echo "<div>Discover the regal grandeur and cultural heritage of " . $row['name'] . " through a vibrant blog.</div>";
                        echo "</div>";
                        echo "<a href='" . $row['blogs_link'] . "' class='btn btn-dark' target='_blank'>Read Blogs</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='col-md-4 text-center'>";
                        echo "<a href='" . $embed_url . "' target='_blank'><iframe class='responsive-video' src='" . $embed_url . "' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen style='border-radius: 20px; width: 80%; height: 60%;'></iframe></a>";
                        echo "<div class='overlay' style='font-weight: 700; color: white;'>";
                        echo "<p style='margin-top: -40px;'>Click on the video to watch vlogs on " . $row['name'] . "</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<button class='btn btn-dark btn-lg' style='font-weight:700;' data-bs-toggle='modal' data-bs-target='#bookingsmodal' onclick='openBookingModal()'>Book a trip to " . $row['name'] . "</button>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<br>";
                    } else {
                        echo "
                <div class='row'>
                    <div class='col-md-12'>
                        <div class='card right-card' data-aos='fade-left' style='background: rgba( 0, 0, 0, 0.2 );
                        box-shadow: 0 8px 32px 0 black;
                        backdrop-filter: blur( 10px );
                        -webkit-backdrop-filter: blur( 10px );
                        border-radius: 30px;
                        margin-bottom: 70px;'>
                            <div class='row no-gutters'>
                                <div class='col-md-4 text-center'>
                                    <a href='" . $embed_url . "' target='_blank'><iframe src='" . $embed_url . "'  class='responsive-video' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen style='border-radius: 20px; width: 80%; height: 60%;'></iframe></a>
                                    <div class='overlay' style='font-weight: 700; color: white;'>
                                        <p>Click on the video to watch vlogs on {$row['name']}</p>
                                    </div>
                                </div>
                                <div class='col-md-8'>
                                    <div class='card-body'>
                                        <h4 class='card-title'>
                                            <p style='color: white; border-bottom: 4px solid white; font-weight: 700;'>{$row['name']}
                                                <span style='float: right; font-weight:400;'>(click the icon to view on maps)
                                                    <a href='{$row['maps_link']}' target='_blank'>
                                                        <img src='images/location.png' class='float-right' alt='Location Icon' style='width: 40px; height: 40px; margin-top: -10px; margin-left: 25px;'></a>
                                                </span>
                                            </p>
                                        </h4>
                                        <p class='card-text' style='color: white; font-weight: 700;'>{$row['description']}</p>
                                        <div class='row'>
                                            <div class='col-sm-6'>
                                                <div class='card' style='background: rgba(211, 211, 211, 0.7); box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); backdrop-filter: blur(0.25px);'>
                                                    <div class='card-body text-center'>
                                                        <h5 class='card-title' style='font-weight: 700;'>Ratings & Reviews</h5>
                                                        <div class='col-xs-12 col-md-6 text-center' style='margin-left: auto; margin-right: auto;'>
                                                            <h1 class='rating-num'>{$row['ratings']}</h1>
                                                            <div class='rating text-center'>";
                        for ($i = 0; $i < floor($row['ratings']); $i++) {
                            echo "<img src='images/star-fill.svg' alt='Star'>";
                        }
                        for ($i = ceil($row['ratings']); $i < 5; $i++) {
                            echo "<img src='images/star.svg' alt='Empty Star'>";
                        }
                        echo "
                                                            </div>
                                                            <div>{$row['reviews_total']}total</div>
                                                        </div>
                                                        <button class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#reviewsModal{$row['id']}'>View Reviews</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='col-sm-6'>
                                                <div class='card' style='background: rgba(211, 211, 211, 0.7); box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); backdrop-filter: blur(0.25px);'>
                                                    <div class='card-body text-center'>
                                                        <h5 class='card-title' style='font-weight: 700;'>Blogs</h5>
                                                        <div class='col-xs-12 col-md-6 text-center' style='margin-left: auto; margin-right: auto; margin-bottom: 8px;'>
                                                            <div>
                                                                Explore the richness and architectural marvels of {$row['name']} through a captivating blog.
                                                            </div>
                                                        </div>
                                                        <a href='{$row['blogs_link']}' class='btn btn-dark' target='_blank'>Read Blogs</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class='btn btn-dark btn-lg' style='font-weight:700;' data-bs-toggle='modal' data-bs-target='#bookingsmodal' onclick='openBookingModal()'>Book a trip to {$row['name']}</button>
                        </div>
                    </div>
                </div>
                <br><br><br><br>";
                    }
                }
            } else {
                // Handle database query error
                echo "Error: " . mysqli_error($conn);
            }
            ?>
        </section>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="ladakhmodal" tabindex="-1" role="dialog" aria-labelledby="ladakhmodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ladakhmodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "ladakh";

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
    <div class="modal fade" id="jaipurmodal" tabindex="-1" role="dialog" aria-labelledby="jaipurmodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jaipurmodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "jaipur";

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
    <div class="modal fade" id="delhimodal" tabindex="-1" role="dialog" aria-labelledby="delhimodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="delhimodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
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
    <div class="modal fade" id="agramodal" tabindex="-1" role="dialog" aria-labelledby="agramodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agramodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "agra";

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
    <div class="modal fade" id="amritsarmodal" tabindex="-1" role="dialog" aria-labelledby="amritsarmodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="amritsarmodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "amritsar";

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
    <div class="modal fade" id="varanasimodal" tabindex="-1" role="dialog" aria-labelledby="varanasimodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="varanasimodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "varanasi";

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
    <div class="modal fade" id="shimlamodal" tabindex="-1" role="dialog" aria-labelledby="shimlamodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shimlamodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "shimla";

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
    <div class="modal fade" id="kolkatamodal" tabindex="-1" role="dialog" aria-labelledby="kolkatamodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kolkatamodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
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
    <div class="modal fade" id="darjeelingmodal" tabindex="-1" role="dialog" aria-labelledby="darjeelingmodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="darjeelingmodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "darjeeling";

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
    <div class="modal fade" id="punemodal" tabindex="-1" role="dialog" aria-labelledby="punemodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="punemodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "pune";

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
                        <span aria-hidden="true" style="color: white;">&times;</span>
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
                        <span aria-hidden="true" style="color: white;">&times;</span>
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
                        <span aria-hidden="true" style="color: white;">&times;</span>
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

    <!-- Modal -->
    <div class="modal fade" id="kochinmodal" tabindex="-1" role="dialog" aria-labelledby="kochinmodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kochinmodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "kochin";

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
    <div class="modal fade" id="bangloremodal" tabindex="-1" role="dialog" aria-labelledby="bangloremodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bangloremodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "banglore";

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
    <div class="modal fade" id="maduraimodal" tabindex="-1" role="dialog" aria-labelledby="maduraimodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="maduraimodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "madurai";

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
    <div class="modal fade" id="mysoremodal" tabindex="-1" role="dialog" aria-labelledby="mysoremodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mysoremodalTitle">Reviews</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                    require_once 'database.php';

                    // Get the destination from the URL parameter
                    $destination = "mysore";

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

    <!--Bookings Modal -->
    <div class="modal fade" id="bookingsmodal" tabindex="-1" role="dialog" aria-labelledby="bookingsmodalTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document" style="max-width: 800px;">
            <div class="modal-content" style="border-radius: 0; padding: 0;">
                <div class="modal-header" style="border-bottom: none; padding: 10px; background-color: white;">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="color: #333;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 20px;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h2 class="text-center"
                                    style="color: black; margin-top: 20px; margin-bottom: 20px; color: #333; font-weight: 700;">
                                    Make Your Reservation</h2>
                                <div class="booking-form">
                                    <form action="process_booking.php" method="post">
                                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['email']; ?>">
                                        <div class="form-group">
                                            <span class="form-label">Your Destination</span>
                                            <select class="form-control" name="location" id="InputLocation" required>
                                                <option value="">Select your destination</option>
                                                <option value="delhi">Delhi</option>
                                                <option value="jaipur">Jaipur</option>
                                                <option value="agra">Agra</option>
                                                <option value="amritsar">Amritsar</option>
                                                <option value="varanasi">Varanasi</option>
                                                <option value="shimla">Shimla</option>
                                                <option value="kolkata">Kolkata</option>
                                                <option value="darjeeling">Darjeeling</option>
                                                <option value="mumbai">Mumbai</option>
                                                <option value="pune">Pune</option>
                                                <option value="goa">Goa</option>
                                                <option value="hyderabad">Hyderabad</option>
                                                <option value="chennai">Chennai</option>
                                                <option value="kochin">Kochin</option>
                                                <option value="banglore">Banglore</option>
                                                <option value="madurai">Madurai</option>
                                                <option value="mysore">Mysore</option>
                                                <option value="ladakh">Ladakh</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <span class="form-label">Check In</span>
                                                    <input class="form-control" type="date" name="check_in" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <span class="form-label">Check Out</span>
                                                    <input class="form-control" type="date" name="check_out" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span class="form-label">Rooms</span>
                                                    <select class="form-control" name="rooms">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span class="form-label">Adults</span>
                                                    <select class="form-control" name="adults">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <span class="form-label">Children</span>
                                                    <select class="form-control" name="children">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Travel Type</span>
                                            <select class="form-control" name="travel_type">
                                                <option>Bus</option>
                                                <option>Train</option>
                                                <option>Flight</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Trip Type</span>
                                            <select class="form-control" name="trip_type">
                                                <option>One Way</option>
                                                <option>Round Trip</option>
                                            </select>
                                        </div>
                                        <div class="form-btn text-center">
                                            <button class="submit-btn"
                                                style="width: 100%; background-color: #333; color: white; padding: 10px; border: none;">Send
                                                Query</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"
                    style="padding: 10px; border-top: none; justify-content: flex-end; background-color: white;">
                </div>
            </div>
        </div>
    </div>


    <hr>

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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 900, // Animation duration
        });
    </script>
    <script>
        // JavaScript function to open the booking modal
        function openBookingModal() {
            <?php if (isset($_SESSION['email'])): ?>
                $('#bookingsmodal').modal('show');
            <?php else: ?>
                window.location.href = 'login.php';
            <?php endif; ?>
        }
    </script>


</body>

</html>