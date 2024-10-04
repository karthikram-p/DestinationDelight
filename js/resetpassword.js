document.getElementById('resetPassword').addEventListener('submit', function (event) {
  event.preventDefault();

function validatePassword(password) {
  const regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()\-+.]).{6,20}$/;
  return regex.test(password);
}
const password = document.getElementById('new_password').value;
const errorMessages = [];

if (password === '') {
    errorMessages.push('Password is required');
} else if (password.length < 8) {
    errorMessages.push('Password must be at least 8 characters long');
} else if (password.length > 15) {
    errorMessages.push('Password must not exceed 15 characters');
} else if (validatePassword(password) === false) {
    errorMessages.push('Password must contain at least one special character, one uppercase alphabet, and one number');
}

if (errorMessages.length > 0) {
  const errorMessageContainer = document.getElementById('errorMessages');
  errorMessageContainer.innerHTML = '';
  errorMessages.forEach(function (message) {
      const errorDiv = document.createElement('div');
      errorDiv.classList.add('alert', 'alert-danger');
      errorDiv.textContent = message;
      errorMessageContainer.appendChild(errorDiv);
});
} else{
  document.getElementById("resetPassword").submit();
}
});
