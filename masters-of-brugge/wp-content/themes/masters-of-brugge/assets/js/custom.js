// This file contains custom JavaScript for the theme. 

document.addEventListener('DOMContentLoaded', function() {
    const registrationForm = document.getElementById('registration-form');
    
    if (registrationForm) {
        registrationForm.addEventListener('submit', function(event) {
            event.preventDefault();
            // Add form validation and submission logic here
            alert('Registration form submitted!');
        });
    }

    // Additional custom scripts can be added here
    // Example jQuery code
    jQuery(document).ready(function($) {
        console.log("jQuery is working!");
        // Example: Change the background color of the header on click
        $('header').on('click', function() {
            $(this).css('background-color', '#005177');
        });
    });
});