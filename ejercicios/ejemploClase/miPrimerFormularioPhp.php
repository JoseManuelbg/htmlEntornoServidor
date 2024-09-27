<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola, Binvenido</h1>
    <form action="procesaFormulario.php">
        <div>
            <p>Introduce tu nombre:</p> <input type="text" name="nombre"
            id="nombre">
            <p>Introduce tu apellido:</p> <input type="text" name="apellido"
            id="apellido">
            <p>Introduce tu edad</p><input type="number" name="edad" id="edad" min="0" max="100" required step="1">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>


    </form>
</body>
</html>