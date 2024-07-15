// JavaScript for the popup
document.addEventListener("DOMContentLoaded", function () {
    var editButton = document.getElementById("editButton");
    var popupContainer = document.getElementById("popupContainer");

    editButton.addEventListener("click", function () {
        // Toggle the display property of the popup container
        if (popupContainer.style.display === "none" || popupContainer.style.display === "") {
            popupContainer.style.display = "inline-block";
        } else {
            popupContainer.style.display = "none";
        }
    });
});
