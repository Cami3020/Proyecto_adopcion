$(document).ready(function() {
    console.log("El sitio está listo.");

    $(".btn").on("click", function() {
        alert("Has clickeado el botón: " + $(this).text());
    });

    $(".navbar-toggler").on("click", function() {
        console.log("Menú de navegación desplegado.");
    });
});
