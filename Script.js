
document.addEventListener('DOMContentLoaded', function() {

    const confirmButton = document.querySelector('.btn-confirm');

    if (confirmButton) {
        confirmButton.addEventListener('click', function() {
            if (confirm("¿Estás seguro de que te gusto este sitio web? ¡Nos gustaria mucho que fueras sincero!")) {
                alert("¡Te gusto! Guardando amor...");
            } else {
                alert("No te gusto. Entonces buscá otro respositorio.");
            }
        });
    }

});