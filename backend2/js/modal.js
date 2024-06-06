window.onload = function() {
    var myModal = new bootstrap.Modal(document.getElementById('cookiesModal'), {
      keyboard: false,
      backdrop: 'static'
    });
    myModal.show();
 };

function redirigirYllenar() {
    // Redirigir a la sección de contacto
    document.getElementById('Contacto').scrollIntoView({ behavior: 'smooth' });

    // Llenar el campo del formulario con id "hola"
    document.getElementById('parcela').value = "San Nicolás - A1.";
}
