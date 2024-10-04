<head>
    <style>
        .navbar-brand,
        .navbar-brand .form-text {
            color: white !important;
            font-size: 50px;
            font-weight: bold;
            text-shadow: 3px 3px black;
            padding-left: 80px;
            padding-top: 10px;
        }

        .navbar-nav {
            display: flex;
            justify-content: flex-end;
            /* Align items to the right */
            align-items: flex-end;
            flex-grow: 5;
            /* Allow items to take up available space */
            margin-right: 5px;
            /* Right spacing */
        }

        .navbar-nav .nav-item .nav-link {
            color: white;
            font-size: 20px;
            font-weight: 600;
            -webkit-text-stroke-width: 0.25px;
            -webkit-text-stroke-color: black;
            margin-right: 15px;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: white;
            -webkit-text-stroke-width: 0.25px;
            -webkit-text-stroke-color: black;
            text-shadow: 2px 2px black;
            border-bottom: 4px solid white;
        }

        .navbar-nav .nav-item.active .nav-link {
            color: white;
            -webkit-text-stroke-width: 0.25px;
            -webkit-text-stroke-color: black;
            text-shadow: 2px 2px black;
            border-bottom: 4px solid white;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <a class="navbar-brand" href="/DestinationDelight/welcome.php">D<>D</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/DestinationDelight/welcome.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/DestinationDelight/destinations.php">Destinations</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/DestinationDelight/gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/DestinationDelight/prices.php">Prices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#aboutus">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contactus">Contact Us</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php" style="margin-right: 0px;">Login/Sign Up <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
        </form>
    </div>
</nav>