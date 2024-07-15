// Function to toggle the visibility of terms and conditions
function toggleTerms() {
    const termsParagraphs = document.querySelectorAll('.terms');
    termsParagraphs.forEach(paragraph => {
        paragraph.classList.toggle('hidden');
    });
}

// Function to display an alert when terms are accepted
function acceptTerms() {
    alert('You have accepted the terms and conditions!');
}

// Function to display an alert when terms are declined
function declineTerms() {
    alert('You have declined the terms and conditions!');
}

// Add event listeners for the toggle button and accept/decline buttons
document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.getElementById('toggleButton');
    const acceptButton = document.getElementById('acceptButton');
    const declineButton = document.getElementById('declineButton');

    toggleButton.addEventListener('click', toggleTerms);
    acceptButton.addEventListener('click', acceptTerms);
    declineButton.addEventListener('click', declineTerms);
});
