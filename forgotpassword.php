<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-xrVRAdXSFJx7xYUTSv/M3hXklbpnW9rIMI54t3AQ3Hce8z5U+1waIqS25fELbSbBv7tXepYkKVTmQQOxLgE9nA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href='http://fonts.googleapis.com/css?family=Poppins:400,300,700' rel='stylesheet' type='text/css'>

    <title>Forgot Password | Destination Delight </title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/forgot2.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; font-family: 'Poppins', sans-serif !important;">
    <?php require 'components/_nav_login_signup.php'; ?>
    <div class="container mt-5">
        <div class="row justify-content-center" style="margin-top: 150px;">
            <div class="col-md-6 custom-border" style="position: relative;
    width: 400px;
    height: 380px;
    overflow: hidden;
    z-index: 1;
    background: rgba( 211, 226, 253, 0.05 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 30px;">
                <h1 class="text-center" style="font-weight: 700;">Forgot Password</h1>
                <form method="POST" action="sendpasswordreset.php">
                    <div class="form-group">
                        <label for="InputEmail" style="font-weight: 600;">Email address</label>
                        <input type="email" class="form-control <?php echo ($emailError != "") ? 'is-invalid' : ''; ?>"
                            id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" style="font-weight: 600;
                    color: white;
                    padding: 10px 20px;
                    width: 100%;">Send</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


</body>

</html>