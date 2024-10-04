<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signup.css">
    <link href='http://fonts.googleapis.com/css?family=Poppins:400,300,700' rel='stylesheet' type='text/css'>
    <title>Sign Up | Destination Delight</title>
</head>

<body
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url('images/form-background.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed; font-family: 'Poppins', sans-serif !important;">
    <div class="navbar-container" style="position: relative;
    z-index: 2;">
        <?php require 'components/_nav_login_signup.php'; ?>
    </div>
    <div class="container d-flex justify-content-center align-items-center vh-100" style="min-height: calc(100vh - 300px);
    padding-top: 300px;">
        <div class="p-4" style="position: relative;
    width: 540px;
    height: 1020px;
    overflow: hidden;
    z-index: 1;
    background: rgba( 211, 226, 253, 0.05 );
box-shadow: 0 8px 32px 0 black;
backdrop-filter: blur( 10px );
-webkit-backdrop-filter: blur( 10px );
    border-radius: 30px;">
            <div class="form-content" style="display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 20px;">
                <p class="text-center" style="font-weight: 600;">already have an account?<a href="login.php"> Login</a>
                </p>
                <h1 class="text-center" style="font-weight: 700;">Sign Up</h1>
                <form id="signupForm" method="POST" action="database/signupdb.php">
                    <div class="form-group">
                        <label for="InputFirstName" style="font-weight: 600;">First Name</label>
                        <input type="text" class="form-control" id="InputFirstName" aria-describedby="emailHelp"
                            placeholder="Enter First Name" name="first_name">
                    </div>
                    <div class="form-group">
                        <label for="InputLastName" style="font-weight: 600;">Last Name</label>
                        <input type="text" class="form-control" id="InputLastName" aria-describedby="emailHelp"
                            placeholder="Enter Last Name" name="last_name">
                    </div>
                    <div class="form-group">
                        <label for="InputDateOfBirth" style="font-weight: 600;">Date of Birth</label>
                        <input type="date" class="form-control" id="InputDateOfBirth" name="date_of_birth">
                    </div>
                    <div class="form-group">
                        <label for="InputLocation" style="font-weight: 600;">Location</label>
                        <select class="form-control" name="location" id="InputLocation">
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
                    <div class="form-group">
                        <label for="InputGender" style="font-weight: 600;">Gender</label>
                        <select class="form-control" id="InputGender" name="gender">
                            <option value="">--SELECT--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="InputEmail" style="font-weight: 600;">Email address</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
                                placeholder="Enter email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword" style="font-weight: 600;">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="InputPassword" placeholder="Password"
                                name="password">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword" style="font-weight: 600;
                                    color: black;">
                                    Show
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputRetypePassword" style="font-weight: 600;">Retype Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="InputRetypePassword"
                                placeholder="Retype Password" name="retype_password">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="toggleRetypePassword" style="font-weight: 600;
                                    color: black;">
                                    Show
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <a href="#" style="font-weight: 600;">Terms and Conditions</a>
                        <br>
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1" style="font-weight: 600;">I agree to the terms &
                            conditions</label>
                    </div>
                    <div id="errorMessages" class="text-danger">
                        <?php if (!empty($errorMessages)): ?>
                            <?php foreach ($errorMessages as $errorMessage): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $errorMessage; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary" style="font-weight: bold;
                    color: white;
                    padding: 10px 20px;
                    width: 100%;">Sign Up</button>
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
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        $(document).ready(function () {
            $('#togglePassword').click(function () {
                var passwordField = $('#InputPassword');
                var passwordFieldType = passwordField.attr('type');
                if (passwordFieldType === 'password') {
                    passwordField.attr('type', 'text');
                    $(this).text('Hide');
                } else {
                    passwordField.attr('type', 'password');
                    $(this).text('Show');
                }
            });

            $('#toggleRetypePassword').click(function () {
                var retypePasswordField = $('#InputRetypePassword');
                var retypePasswordFieldType = retypePasswordField.attr('type');
                if (retypePasswordFieldType === 'password') {
                    retypePasswordField.attr('type', 'text');
                    $(this).text('Hide');
                } else {
                    retypePasswordField.attr('type', 'password');
                    $(this).text('Show');
                }
            });
        });
    </script>
    <script>
        document.getElementById('signupForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from submitting initially

            const firstName = document.getElementById('InputFirstName').value.trim();
            const lastName = document.getElementById('InputLastName').value.trim();
            const email = document.getElementById('InputEmail').value.trim();
            const password = document.getElementById('InputPassword').value.trim();
            const gender = document.getElementById('InputGender').value;
            const agreeTerms = document.getElementById('Check1').checked;
            const dob = document.getElementById('InputDateOfBirth').value.trim();
            const location = document.getElementById('InputLocation').value;
            const retypePassword = document.getElementById('InputRetypePassword').value.trim();

            function validatePassword(password) {
                const regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()\-+.]).{8,15}$/;
                return regex.test(password);
            }

            // Calculate age
            const today = new Date();
            const birthDate = new Date(dob);
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            const errorMessages = [];

            if (firstName === '') {
                errorMessages.push('First Name is required');
            } else if (!/^[A-Za-z]+$/.test(firstName)) {
                errorMessages.push('First Name should contain only alphabets');
            }

            else if (lastName === '') {
                errorMessages.push('Last Name is required');
            } else if (!/^[A-Za-z]+$/.test(lastName)) {
                errorMessages.push('Last Name should contain only alphabets');
            }

            else if (dob === '') {
                errorMessages.push('Date of Birth is required');
            } else if (age < 18) {
                errorMessages.push('You must be at least 18 years old to sign up');
            }

            else if (location === '') {
                errorMessages.push('Location is required');
            }

            else if (gender === '') {
                errorMessages.push('Gender is required');
            }

            else if (email === '') {
                errorMessages.push('Email is required');
            }

            else if (password === '') {
                errorMessages.push('Password is required');
            } else if (password.length < 8 || password.length > 15) {
                errorMessages.push('Password must be between 8 and 15 characters long');
            } else if (!validatePassword(password)) {
                errorMessages.push('Password must contain at least one special character, one uppercase alphabet, and one number');
            }

            else if (retypePassword === '') {
                errorMessages.push('Retype Password is required');
            } else if (password !== retypePassword) {
                errorMessages.push('Passwords do not match');
            }

            else if (!agreeTerms) {
                errorMessages.push('You must agree to the terms & conditions');
            }

            if (errorMessages.length > 0) {
                // Display validation errors
                const errorMessageContainer = document.getElementById('errorMessages');
                errorMessageContainer.innerHTML = '';
                errorMessages.forEach(function (message) {
                    const errorDiv = document.createElement('div');
                    errorDiv.classList.add('alert', 'alert-danger');
                    errorDiv.textContent = message;
                    errorMessageContainer.appendChild(errorDiv);
                });
            } else {
                // Check if email already exists using AJAX
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'database/check_email.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function () {
                    if (xhr.status === 200 && xhr.responseText === 'Email already exists') {
                        // Display email exists error
                        const errorMessageContainer = document.getElementById('errorMessages');
                        errorMessageContainer.innerHTML = '';
                        const errorDiv = document.createElement('div');
                        errorDiv.classList.add('alert', 'alert-danger');
                        errorDiv.textContent = 'Email already exists';
                        errorMessageContainer.appendChild(errorDiv);
                    } else {
                        // If email is unique, submit the form
                        document.getElementById('signupForm').submit();
                    }
                };
                xhr.send('email=' + encodeURIComponent(email));
            }
        });

    </script>
</body>

</html>