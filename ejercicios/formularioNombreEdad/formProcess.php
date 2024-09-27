<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if ((!empty($_GET["name"]) && !empty($_GET["age"])) && is_numeric($_GET["age"])) {
        echo "Hola: " . ($_GET["name"]) ;
        if (($_GET["age"]) > 18){
            echo  " tienes: " . ($_GET["age"]) . " Eres mayor de edad";        
        } else if (($_GET["age"]) < 18) {
            echo  " tienes: " . ($_GET["age"]) . " Eres menor de edad";
        } 
    }else{
        echo "Nombre incorrecto o Edad incorrecta" ;
    }
   
    ?>
</body>
</html>