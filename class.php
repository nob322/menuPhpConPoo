<?php
class Menu{
     public function __construct(private $titulo,private $tamanio,private $color,private $alineacion){
        $this -> titulo = $titulo;
        $this -> tamanio = $tamanio;
        $this -> color = $color;
        $this -> alineacion = $alineacion;
    }
    public function mostrarTitulo(){
        return  $this -> titulo;
    }
    public function tamanio(){
        return  $this -> tamanio;
    }
    public function color(){
        return $this -> color;
    }
    public function alineacion(){
       return $this -> alineacion;
    }

}
?>