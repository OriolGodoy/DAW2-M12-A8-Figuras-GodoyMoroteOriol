<?php

class Rectangulo extends FigurasGeometricas {

    public $lado2;
    
    function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
    }

    function __destruct() {
        echo "Los objetos de la clase Triangulo ha sido destruido.<br>";
    }

    function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    function getLado2() {
        return $this->lado2;
    }

    function calcularArea() {
        return $this->lado1 * $this->lado2; 
    }

    function calcularPerimetro() {
        return 2 * ($this->lado1 + $this->lado2); 
    }

    function __toString() {
        return "Área: " . $this->calcularArea() . ", Perímetro: " . $this->calcularPerimetro();
    }
}
?>
