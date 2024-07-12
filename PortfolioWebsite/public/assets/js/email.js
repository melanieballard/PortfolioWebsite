$(document).ready(function() {
    $('#contactForm').submit(function(event) {
        event.preventDefault(); // Prevent default form submission

        // Collect form data
        var formData = $(this).serialize();

        // Send form data to PHP script using AJAX
        $.ajax({
            url: '/email',
            type: 'POST',
            data: formData,
            success: function(response) {
                console.log(response); // Log server response to console
                alert('Email sent successfully!');
                $('#contactForm')[0].reset(); // Reset form
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log error response to console
                alert('Error: Failed to send email. Please try again later.');
            }
        });
    });
});
