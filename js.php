<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button id="miBoton">Haz clic aquí</button>
    <button onclick="clic()">Haz clic aquí</button>
    <a href="./js2.php"><button>otro ejemplo con js</button></a>
</body>

</html>

<script src="./main.js"></script>
<script>
    var boton = document.getElementById("miBoton");
    
    // Definir la función que se ejecutará cuando se haga clic en el botón
    function manejarClic() {
        console.log("¡Has hecho clic en el botón!");
    }
    
    boton.onclick = manejarClic;
</script>