<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style.css">
    <title>Multiplicar</title>
</head>
<body>

    <form method="get">

    <label for="num">Introduce un num </label>
    <input type="number" name="num" id="num">
    <button type="submit">Enviar </button>

    </form>
<?php 
    if(isset($_GET["num"]) && is_numeric(value: $_GET["num"])) {
    $number = $_GET["num"];
    echo "Tabla de multiplicar del: " . $number ;
    for ($i = 0; $i <= 10; $i++) { 
        echo "<div> $number x $i = " . ($number * $i) . " </div>";
    }
}  
?>
</body>
</html>