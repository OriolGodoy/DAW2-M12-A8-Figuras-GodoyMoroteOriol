<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras Geometricas</title>
    <link rel="stylesheet" href="estilos/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
        <h1 class="titulo">ELECCIÓN FIGURA</h1>
        <form action="eleccion.php" method="POST">
        <div class="card">
        <img src="img/triangulo.png" alt="" class="imgTriangulo"><br>
        <label for="triangulo" class="lbl">TRIANGULO</label><br>
        <input type="submit" class="boton" name="figura" value="triangulo">
        </div>
        <div class="card">
        <img src="img/rectangulo.png" alt="" class="imgRectangulo"><br><br>
        <label for="rectangulo" class="lbl">RECTANGULO</label><br>
        <input type="submit" class="boton2" name="figura" value="rectangulo">
        </div>
        <div class="card">
        <img src="img/circulo.png" alt="" class="imgCirculo"><br><br>
        <label for="circulo" class="lbl3">CIRCULO</label><br>
        <input type="submit" class="boton3" name="figura" value="circulo">
        </div>
        <div class="card">
        <img src="img/cuadrado.png" alt="" class="imgCuadrado"><br><br>
        <label for="cuadrado" class="lbl4">CUADRADO</label><br>
        <input type="submit" class="boton4" name="figura" value="cuadrado">
        </div>
        </form>
</body>
</html>