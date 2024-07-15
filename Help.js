// Wait for the DOM content to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Get the checkbox for "General Inquiry"
    var generalInquiryCheckbox = document.querySelector('input[name="services[]"][value="General Inquiry"]');

    // Get the message textarea
    var messageTextarea = document.getElementById('message');

    // Add event listener to the checkbox
    generalInquiryCheckbox.addEventListener('change', function () {
        // If the checkbox is checked, show the message textarea, otherwise hide it
        if (generalInquiryCheckbox.checked) {
            messageTextarea.style.display = 'block';
        } else {
            messageTextarea.style.display = 'none';
        }
    });
});
