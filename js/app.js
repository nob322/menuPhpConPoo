// Manejar envío del formulario --------------------------------------------------
const form = document.getElementById('formulario');
const tomoZona = document.getElementById('resultadoActividad');
form.addEventListener('submit', function(event) {
  event.preventDefault(); // Evitar envío del formulario
  const url = 'procesar.php'; // Corregido: especifica el nombre del archivo correcto, "procesar.php"
  const formData = new FormData(form);
  fetch(url, {
    method: 'POST',
    body: formData
  })
    .then(response => response.text())
    .then(result => {
      // Procesar la respuesta del servidor
      console.log(result);
      tomoZona.innerHTML = `${result}`;
    })
    .catch(error => {
      // Manejar errores
      console.error('Error en el ejercicio:', error);
    });
});