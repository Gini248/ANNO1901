document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".caixa").forEach(function (element) {
        element.addEventListener("click", function () {
            window.location.href = element.getAttribute("data-href");
        });
    });
});