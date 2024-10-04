<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery | Destination Delight</title>
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="lightbox2/dist/css/lightbox.min.css" />
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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .grid-gallery {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-auto-rows: 250px;
            grid-auto-flow: dense;
            grid-gap: 20px;
        }

        .grid-gallery .grid-item {
            position: relative;
            background-color: #efefef;
            overflow: hidden;
        }

        .grid-gallery .grid-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .grid-gallery .grid-item:hover img {
            transform: scale(1.1);
        }

        .grid-gallery .grid-item a {
            cursor: zoom-in;
        }

        .grid-gallery .grid-item:nth-child(3n - 2) {
            grid-column: span 2;
            grid-row: span 2;
        }

        /* Let's make it responsive */
        @media (max-width: 768px) {
            .grid-gallery {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                grid-auto-rows: 250px;
            }

            .grid-gallery .grid-item:nth-child(3n - 2) {
                grid-column: unset;
                grid-row: unset;
            }
        }
    </style>
</head>

<body
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/gallery_background.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; font-family: 'Poppins', sans-serif !important;">
    <?php require 'components/_nav_gallery.php'; ?>
    <h1 class="text-center"
        style="color: white; font-size: 50px; font-weight: 700; text-shadow: 2px 2px black; margin-top:50px; margin-bottom:50px;">
        Adventures of Our Travelers
        <img src="images/journey.png" alt="Camera"
            style="width: 80px; height: 80px; margin-left: 10px; margin-bottom: 5px;">
    </h1>
    <div class="grid-gallery" style="margin-bottom: 200px;">
        <div class="grid-item">
            <a href="images/img-1.jpg" data-lightbox="gridImage">
                <img src="images/img-1.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-2.jpg" data-lightbox="gridImage">
                <img src="images/img-2.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-3.jpg" data-lightbox="gridImage">
                <img src="images/img-3.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-4.jpg" data-lightbox="gridImage">
                <img src="images/img-4.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-5.jpg" data-lightbox="gridImage">
                <img src="images/img-5.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-6.jpg" data-lightbox="gridImage">
                <img src="images/img-6.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-7.jpg" data-lightbox="gridImage">
                <img src="images/img-7.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-8.jpg" data-lightbox="gridImage">
                <img src="images/img-8.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-9.jpg" data-lightbox="gridImage">
                <img src="images/img-9.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-10.jpg" data-lightbox="gridImage">
                <img src="images/img-10.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-11.jpg" data-lightbox="gridImage">
                <img src="images/img-11.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-12.jpg" data-lightbox="gridImage">
                <img src="images/img-12.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-13.jpg" data-lightbox="gridImage">
                <img src="images/img-13.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-14.jpg" data-lightbox="gridImage">
                <img src="images/img-14.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-15.jpg" data-lightbox="gridImage">
                <img src="images/img-15.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-16.jpg" data-lightbox="gridImage">
                <img src="images/img-16.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-17.jpg" data-lightbox="gridImage">
                <img src="images/img-17.jpg" />
            </a>
        </div>
        <div class="grid-item">
            <a href="images/img-18.jpg" data-lightbox="gridImage">
                <img src="images/img-18.jpg" />
            </a>
        </div>
    </div>

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
    <!-- jQuery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Lightbox JS -->
    <script src="lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Custom js -->
    <script>
        lightbox.option({
            resizeDuration: 200,
            wrapAround: true,
            disableScrolling: true,
        });
    </script>
</body>

</html>