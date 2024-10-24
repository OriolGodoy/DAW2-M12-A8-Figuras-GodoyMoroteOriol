<?php

    class Triangulo extends FigurasGeometricas{

    public $lado2;
    public $lado3;
    
    function __construct($tipoFigura, $lado1, $lado2, $lado3){
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    function __destruct(){
        echo "Los objetos de la clase Triangulo ha sido destruido.<br>";
    }

    function setLado2($lado2){
        $this->lado2 = $lado2;
    }

    function setLado3($lado3){
        $this->lado3 = $lado3;
    }

    function getLado2(){
       return $this->lado2;
    }

    function getLado3(){
        return $this->lado3;
    }

    function calcularArea(){
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2; 
        return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
    }

    function calcularPerimetro(){
        return $this->lado1 + $this->lado2 + $this->lado3;
    }
    
    function __toString(){
        return "Área: " . $this->calcularArea() . " Perímetro: " . $this->calcularPerimetro();
    }
    }

?>