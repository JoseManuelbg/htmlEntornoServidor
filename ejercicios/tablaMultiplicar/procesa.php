<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $number = $_GET["num"];
    echo "Tabla de multiplicar del: " . $number . "";
    for ($i = 0; $i <= 10; $i++) { 
        echo "<div> | $number x $i = " . ($number * $i) . " | </div>";
    }
?>
    
</body>
</html>