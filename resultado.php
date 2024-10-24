<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

</head>
<body>

<?php
session_start(); 
require_once 'clases/FiguraGeometrica.php';
require_once 'clases/Triangulo.php';
require_once 'clases/Rectangulo.php';
require_once 'clases/Circulo.php';
require_once 'clases/Cuadrado.php';

if (isset($_POST['tipoFigura'])) $_SESSION['tipoFigura'] = $_POST['tipoFigura'];
if (isset($_POST['lado1'])) $_SESSION['lado1'] = $_POST['lado1'];
if (isset($_POST['lado2'])) $_SESSION['lado2'] = $_POST['lado2'];
if (isset($_POST['lado3'])) $_SESSION['lado3'] = $_POST['lado3'];


$tipoFigura = $_SESSION['tipoFigura'];

if ($tipoFigura === 'triangulo') {
    $triangulo = new Triangulo('Triángulo', $_SESSION['lado1'], $_SESSION['lado2'], $_SESSION['lado3']);
    $area = $triangulo->calcularArea();
    $perimetro = $triangulo->calcularPerimetro();

    echo "<div class='resultado'>";
    echo "<h2>RESULTADOS</h2>";
    echo "Figura Seleccionada: " . $_SESSION['tipoFigura'] . "<br>" . "<br>";
    echo "Lado 1: " . $_SESSION['lado1'] . "<br>" . "<br>";
    echo "Lado 2: " . $_SESSION['lado2'] . "<br>" . "<br>";
    echo "Lado 3: " . $_SESSION['lado3'] . "<br>" . "<br>";
    echo "Área: " . $area . "<br>" . "<br>";
    echo "Perímetro: " . $perimetro . "<br>" . "<br>";
    echo "<div/>";


} elseif ($tipoFigura === 'rectangulo') {
    $rectangulo = new Rectangulo('Rectángulo', $_SESSION['lado1'], $_SESSION['lado2']);
    $area = $rectangulo->calcularArea();
    $perimetro = $rectangulo->calcularPerimetro();

    echo "<div class='resultado'>";
    echo "<h2>RESULTADOS</h2>";
    echo "Figura Seleccionada: " . $_SESSION['tipoFigura'] . "<br>" . "<br>";
    echo "Base: " . $_SESSION['lado1'] . "<br>" . "<br>";
    echo "Altura: " . $_SESSION['lado2'] . "<br>" . "<br>";
    echo "Área: " . $area . "<br>" . "<br>";
    echo "Perímetro: " . $perimetro . "<br>" . "<br>";
    echo "<div/>";

} elseif ($tipoFigura === 'circulo') {
    $circulo = new Circulo('Círculo', $_SESSION['lado1']);
    $area = $circulo->calcularArea();
    $perimetro = $circulo->calcularPerimetro();

    echo "<div class='resultado'>";
    echo "<h2>RESULTADOS</h2>";
    echo "Figura Seleccionada: " . $_SESSION['tipoFigura'] . "<br>" . "<br>";
    echo "Radio: " . $_SESSION['lado1'] . "<br>" . "<br>";
    echo "Área: " . $area . "<br>" . "<br>";
    echo "Perímetro: " . $perimetro . "<br>" . "<br>";
    echo "<div/>";

} elseif ($tipoFigura === 'cuadrado') {
    $cuadrado = new Cuadrado('Cuadrado', $_SESSION['lado1']);
    $area = $cuadrado->calcularArea();
    $perimetro = $cuadrado->calcularPerimetro();

    echo "<div class='resultado'>";
    echo "<h2>RESULTADOS</h2>";
    echo "Figura Seleccionada: " . $_SESSION['tipoFigura'] . "<br>" . "<br>";
    echo "Lado: " . $_SESSION['lado1'] . "<br>" . "<br>";
    echo "Área: " . $area . "<br>" . "<br>";
    echo "Perímetro: " . $perimetro . "<br>" . "<br>";
    echo "<div/>";

} else {
    echo "No se han recibido datos válidos.";
}

?>


<form method="post" action="index.php"> 
    <input type="submit" value="Volver a la elección de figura" /><br>
</form>
</body>
</html>