<?php
    //recibo desde el formularito
if(isset($_POST['titulo']) and isset($_POST['tamanio']) and isset($_POST['color']) and isset($_POST['alineacion'])){
    $titulo = $_POST['titulo'];
    $tamanio = $_POST['tamanio'];
    $color = $_POST['color'];
    $alineacion = $_POST['alineacion'];
    if(empty($_POST['titulo'])){
        echo "<p class='text-white'>  Error, el campo 'título' debe contener uno y no puede estar vacío </p>";
        $title = false;
    }else{
        $titulo = $_POST['titulo'];
        $title = true;
    }
    if(empty($_POST['tamanio'])){
        echo " Error, el campo 'tamaño' debe contener una opción válida";
        $tamano = false;
    }else{
        $tamanio = $_POST['tamanio'];
        $tamano = true;
    } 
    if(empty($_POST['color'])){
        echo " Error, el campo 'color' debe contener una opción válida";
        $colo = false;
    }else{
        $color = $_POST['color'];
        $colo = true;
    } 
    if(empty($_POST['alineacion'])){
        echo " Error, el campo 'alineacion' debe contener una opción válida";
        $ali = false;
    }else{
        $alineacion = $_POST['alineacion'];
        $ali = true;
    } 

    //acción
    if($title and $tamano and  $colo and $ali){
        include("class.php");
        $elemento = new Menu($titulo, $tamanio,$color,$alineacion);
        echo "<div class='cajaContieneResultados " . $elemento->tamanio() . " " . $elemento->color() ." " .  $elemento -> alineacion() . "'>";
        echo $elemento -> mostrarTitulo();
        echo "</div>";
    }
 }else{
    echo "<p class='text-white'> Error, ningún campo no puede estar vacío </p>";
 }  
 ?>
    
    
    
