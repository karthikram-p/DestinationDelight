<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Price Listings | Destination Delight</title>
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
        .containerx {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: white;
            font-weight: 700;
        }

        .price-details {
            margin-top: 20px;
        }

        .price-value {
            font-weight: bold;
            font-size: 1.5em;
            color: lightgreen;
        }

        .form-check {
            margin-top: 10px;
        }
    </style>
</head>

<body
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/prices.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; font-family: 'Poppins', sans-serif !important;">

    <?php require 'components/_nav_prices.php'; ?>
    <div class="containerx" style="margin-top: 100px;background: rgba( 211, 226, 253, 0.05 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    padding: 50px 100px 50px 100px;
    margin-top: 100px;
    margin-bottom: 300px;" data-aos="zoom-in" data-aos-offset="300" data-aos-easing="ease-in-sine">
        <h2 class="text-center my-4" style="font-weight: 700;">Price Listings</h2>
        <form id="price-form">
            <div class="form-group">
                <label for="destination">Select Destination:</label>
                <select class="form-control" id="destination" name="destination">
                    <option value="">--SELECT--</option>
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
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="hotel" name="hotel">
                <label class="form-check-label" for="hotel">
                    Hotel Room
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="guide" name="guide">
                <label class="form-check-label" for="guide">
                    Tour Guide
                </label>
            </div>
            <div class="form-group mt-3">
                <label for="trip-type">Trip Type:</label>
                <select class="form-control" id="trip-type" name="trip_type">
                    <option value="one-way" selected>One-Way Trip</option>
                    <option value="round-trip">Round Trip</option>
                </select>
            </div>
        </form>

        <div class="price-details mt-4">
            <p>Minimum Price : <span class="price-value" id="min-price">₹0.00</span></p>
            <p>Average Price : <span class="price-value" id="avg-price">₹0.00</span></p>
            <p>Maximum Price : <span class="price-value" id="max-price">₹0.00</span></p>
        </div>

        <p style="font-weight: 100;">**For further Details and clarifications please login and contact us or chat with
            us.</p>
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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {
            function updatePrices() {
                const destination = $('#destination').val();
                const hotel = $('#hotel').is(':checked') ? 1 : 0;
                const guide = $('#guide').is(':checked') ? 1 : 0;
                const trip_type = $('#trip-type').val();

                if (destination) {
                    $.ajax({
                        url: 'fetch_prices.php',
                        method: 'POST',
                        data: {
                            destination: destination,
                            hotel: hotel,
                            guide: guide,
                            trip_type: trip_type
                        },
                        success: function (response) {
                            const prices = JSON.parse(response);
                            $('#min-price').text(`₹${prices.min_price}`);
                            $('#avg-price').text(`₹${prices.avg_price}`);
                            $('#max-price').text(`₹${prices.max_price}`);
                        }
                    });
                } else {
                    $('#min-price').text('₹0.00');
                    $('#avg-price').text('₹0.00');
                    $('#max-price').text('₹0.00');
                }
            }

            $('#price-form input, #price-form select').on('change', updatePrices);
        });
    </script>
</body>

</html>