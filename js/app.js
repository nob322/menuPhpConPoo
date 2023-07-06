// Manejar envío del formulario --------------------------------------------------
const form = document.getElementById('formulario');//Selecciona el elemento del DOM con el id "formulario" y lo almacena en la variable form. Esto permite acceder y manipular el formulario en el código JavaScript.
const tomoZona = document.getElementById('resultadoActividad');//Selecciona el elemento del DOM con el id "resultadoActividad" y lo almacena en la variable tomoZona. Esto permite acceder y manipular el elemento donde se mostrará la respuesta del servidor.
form.addEventListener('submit', function(event) {// Agrega un evento de escucha al formulario para detectar cuando se envía (submit). El código dentro de la función anónima se ejecutará cuando se envíe el formulario.
  event.preventDefault(); //Detiene el envío predeterminado del formulario para evitar que la página se recargue sola.
  const url = 'procesar.php'; //especifica el nombre del archivo dónde se mandarán datos y de dónde se recibirá una respuesta(Almacena la URL del archivo PHP donde se enviarán los datos y se espera una respuesta.)
  const formData = new FormData(form);//Crea un objeto FormData a partir del formulario (form). Esto permite recopilar los datos del formulario en un formato adecuado para enviarlos al servidor.
  fetch(url, {//Realiza una solicitud fetch al servidor utilizando el método POST y el objeto formData como cuerpo de la solicitud.
    method: 'POST',
    body: formData
  })
    .then(response => response.text())//Encadena un primer bloque .then() para convertir la respuesta del servidor en texto.
    .then(result => {//Encadena otro bloque .then() para procesar la respuesta del servidor. En este caso, se muestra la respuesta en la consola y se asigna al contenido del elemento tomoZona en el HTML.
      // Procesar la respuesta del servidor
      console.log(result);
      tomoZona.innerHTML = `${result}`;
    })
    .catch(error => {//Agrega un bloque .catch() para manejar errores en caso de que ocurra algún problema durante la solicitud fetch.
      // Manejar errores
      console.error('Error en el ejercicio:', error);
    });
});
//En resumen, este código escucha el envío del formulario, detiene el envío 
//predeterminado, recopila los datos del formulario y los envía al archivo PHP 
//utilizando fetch(). Luego, procesa la respuesta del servidor y muestra la respuesta
//en el elemento tomoZona en el HTML. También maneja errores en caso de que ocurra 
//alguno durante la solicitud.