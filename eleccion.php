<?php
session_start(); 

$lado1 = isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '';
$lado2 = isset($_SESSION['lado2']) ? $_SESSION['lado2'] : '';
$lado3 = isset($_SESSION['lado3']) ? $_SESSION['lado3'] : '';
$tipoFigura = isset($_POST['figura']) ? $_POST['figura'] : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lados</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <script src="script.js" ></script>
    <style>
        html{
            font-family: "Quicksand", sans-serif;
        }
         .error-message {
            color: red;
        }
        
        .formulario{
            margin-left: 480px;
            margin-top: 50px;
            width: 350px;
            height: 400px;
        }

        .formulario h2{
            padding-top: 15px;
            margin-left: 20px;

        }

        .formulario input{
            margin-left: 20px;
            width: 315px;
            
        }

        .formulario p{
            margin-left: 25px;
            
        }

        .formulario label{
            margin-left: 150px;
            font-size: 20px;
        }

        </style>
</head>
<body>
<?php
if ($tipoFigura) {
    $_SESSION['tipoFigura'] = $tipoFigura;

    switch ($tipoFigura) {
        case 'triangulo':
            echo "<div class='formulario'>";
            echo "<h2>Formulario para Triángulo</h2>";
            echo "<form action='resultado.php' method='POST' onsubmit='return validarForm()'>";
            echo "<label for='lado1'>Lado 1</label><br>";
            echo "<input type='number' id='lado1' name='lado1' onblur='validarForm()'><br>";
            echo "<p class='error-message' id='error-lado1'></p><br>";
            echo "<label for='lado2'>Lado 2</label><br>";
            echo "<input type='number' id='lado2' name='lado2' onblur='validarForm()'><br>";
            echo "<p class='error-message' id='error-lado2'></p><br>";
            echo "<label for='lado3'>Lado 3</label><br>";
            echo "<input type='number' id='lado3' name='lado3' onblur='validarForm()'><br>";
            echo "<p class='error-message' id='error-lado3'></p><br>";
            echo "<input type='submit' value='Calcular Triángulo'>";
            echo "</form>";
            echo "</div>";
            break;

        case 'rectangulo':
            echo "<div class='formulario'>";
            echo "<h2>Formulario para Rectángulo</h2>";
            echo "<form action='resultado.php' method='POST' onsubmit='return validarForm()'>";
            echo "<label for='lado1'>Lado 1</label><br>";
            echo "<input type='number' id='lado1' name='lado1' onblur='validarForm()'><br>";
            echo "<p class='error-message' id='error-lado1'></p><br>";
            echo "<label for='lado2'>Lado 2</label><br>";
            echo "<input type='number' id='lado2' name='lado2' onblur='validarForm()'><br>";
            echo "<p class='error-message' id='error-lado2'></p><br>";
            echo "<input type='submit' value='Calcular Rectángulo'>";
            echo "</form>";
            echo "</div>";
            break;

        case 'circulo':
            echo "<div class='formulario'>";
            echo "<h2>Formulario para Círculo</h2>";
            echo "<form action='resultado.php' method='POST' onsubmit='return validarForm()'>";
            echo "<label for='lado1'>Lado 1</label><br>";
            echo "<input type='number' id='lado1' name='lado1' onblur='validarForm()'><br>";
            echo "<p class='error-message' id='error-lado1'></p><br>";
            echo "<input type='submit' value='Calcular Círculo'>";
            echo "</form>";
            echo "</div>";
            break;

        case 'cuadrado':
            echo "<div class='formulario'>";
            echo "<h2>Formulario para Cuadrado</h2>";
            echo "<form action='resultado.php' method='POST' onsubmit='return validarForm()'>";
            echo "<label for='lado1'>Lado 1</label><br>";
            echo "<input type='number' id='lado1' name='lado1' onblur='validarForm()'><br>";
            echo "<p class='error-message' id='error-lado1'></p><br>";
            echo "<input type='submit' value='Calcular Cuadrado'>";
            echo "</form>";
            echo "</div>";
            break;

        default:
            echo "No se ha seleccionado ninguna figura válida.";
    }
}
?>
</body>
</html>
