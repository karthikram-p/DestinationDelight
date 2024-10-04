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

    if (lastName === '') {
        errorMessages.push('Last Name is required');
    } else if (!/^[A-Za-z]+$/.test(lastName)) {
        errorMessages.push('Last Name should contain only alphabets');
    }

    if (dob === '') {
        errorMessages.push('Date of Birth is required');
    } else if (age < 18) {
        errorMessages.push('You must be at least 18 years old to sign up');
    }

    if (location === '') {
        errorMessages.push('Location is required');
    }

    if (gender === '') {
        errorMessages.push('Gender is required');
    }

    if (email === '') {
        errorMessages.push('Email is required');
    }

    if (password === '') {
        errorMessages.push('Password is required');
    } else if (password.length < 8 || password.length > 15) {
        errorMessages.push('Password must be between 8 and 15 characters long');
    } else if (!validatePassword(password)) {
        errorMessages.push('Password must contain at least one special character, one uppercase alphabet, and one number');
    }

    if (retypePassword === '') {
        errorMessages.push('Retype Password is required');
    } else if (password !== retypePassword) {
        errorMessages.push('Passwords do not match');
    }

    if (!agreeTerms) {
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
