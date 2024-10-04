$(document).ready(function() {
    $('#loginForm').submit(function(event) {
      event.preventDefault(); // Prevent the form from submitting initially
  
      const email = $('#InputEmail').val().trim();
      const password = $('#InputPasswordLogin').val().trim(); // Update the selector here
  
      let isValid = true;
  
      // Clear any existing error messages
      $('input').removeClass('is-invalid');
      $('.invalid-feedback').remove();
  
      if (email === '') {
        $('#InputEmail').addClass('is-invalid').after('<div class="invalid-feedback">Email is required</div>');
        isValid = false;
      }
  
      if (password === '') {
        $('#InputPasswordLogin').addClass('is-invalid').after('<div class="invalid-feedback">Password is required</div>'); // Update the selector here
        isValid = false;
      }
  
      if (isValid) {
        // If the form is valid, submit it
        this.submit();
      }
    });
  });