<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica de Programación orientda a objetos en php!</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
  <img src="https://www.pngplay.com/wp-content/uploads/8/People-Sitting-Transparent-Background.png" alt="la programaneta" class="imgProgramaneta">
    <div class="caja">
        <form id="formulario" class="formulario">
        <input type="text" name="titulo" id="titulo" placeholder="Ingrese el título" class="inputs">
        <select for="Tamaño" class="inputs" name="tamanio">
        <option value="" disabled selected>Selecciona Tamaño</option>
            <option value="ok20">20</option>
            <option value="ok21">21</option>
            <option value="ok22">22</option>
            <option value="ok24">24</option>
            <option value="ok26">26</option>
            <option value="ok30">30</option>
        </select>
        <select for="Color" class="inputs" name="color">
            <option value="" disabled selected style="display:none;">Elige un colorsito</option>
            <option value="text-blue">Azul</option>
            <option value="text-red">Rojo</option>
            <option value="text-green">Verde</option>
            <option value="text-orange">Naranja</option>
        </select>
        <select for="Alineado" class="inputs" name="alineacion">
        <option value=" " disabled selected>Selecciona alineación</option>
            <option value="izquierda">Izquierda</option>
            <option value="centro">Centro</option>
            <option value="derecha">Derecha</option>
        </select>
        <input type="submit" value="Imprimir en pantalla" class="btn-envíar">
        <
        <div class="margenes aliCajaResultados" id="resultadoActividad"></div>
        </form>
      <!--ya casi lo tengo pero me falta validar todos los campos vacios y no sé si algo más -->
      
      
    </div>

<script src="js/app.js"></script>    
</body>
</html>