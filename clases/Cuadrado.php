<?php

    class Cuadrado extends FigurasGeometricas {
    
    function __construct($tipoFigura, $lado1){
        parent::__construct($tipoFigura, $lado1);
    }

    function __destruct(){
        echo "Los objetos de la clase Triangulo ha sido destruido.<br>";
    }

    function calcularArea(){
        return $this->lado1 * $this->lado1;
    }

    function calcularPerimetro(){
        return 4 * $this->lado1;
    }

    function __toString(){
        return "Área: " . $this->calcularArea() . ", Perímetro: " . $this->calcularPerimetro();
    }
    }

?>