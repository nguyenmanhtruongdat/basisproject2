$(window).on("load", function () {
    $(".preloading").fadeOut("slow");
});
var loader = document.getElementById("preloading");
window.addEventListener("load", function () {
    loader.style.display = "none";
})