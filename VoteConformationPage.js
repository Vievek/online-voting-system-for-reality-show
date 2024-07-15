var Edit = document.querySelector("#edit");
var overlay = document.querySelector(".overlay");
var popup = document.querySelector(".popup");

Edit.addEventListener("click", function () {
    overlay.style.display = "inline-block";
    popup.style.display = "inline-block";
    adjustPopupPosition();
});

window.onload = function () {
    var pageHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
    overlay.style.height = pageHeight + "px";
};

