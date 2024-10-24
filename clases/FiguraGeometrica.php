<?php

class FigurasGeometricas{

public $tipoFigura;
public $lado1;

function setTipoFigura (){
    $this->lado1 = $lado1;
}

function setLado1(){
    $this->tipoFigura = $tipoFigura;
}

function getTipo (){
    return $this->tipoFigura;
}

function getLado1 (){
    return $this->lado1;
}

function __construct($tipoFigura, $lado1) {  
    $this->tipoFigura = $tipoFigura;  
    $this->lado1= $lado1;  
  }  

function calcularArea(){

}
}
?>