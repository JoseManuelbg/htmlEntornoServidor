<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Ejercicio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--PHP-->
<?php 
$errors = [];
$info = [];
if($_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET)) {
        //Verificar nombre
    if(isset($_GET["name"]) && !empty($_GET["name"])) {
        $info[] = strtoupper($_GET["name"]);  
    }else{
        $errors[] ="Introduzca un nombre";    
    }
        //Verificar edad
        if(isset($_GET["age"]) && !empty($_GET["age"]) && ($_GET["age"] > 0 && $_GET["age"] < 101)) {
            if($_GET["age"] >= 18) {
                $info[] = "Eres mayor de edad";
            } else {
                $info[] = "Eres menor de edad";
            }
        } else {
            $errors[] = "Introduzca una edad válida (entre 1 y 100)";
        }
        
        //Verifica correo
    if(isset($_GET["email"]) && !empty($_GET["email"])){
        if(filter_var( $_GET ["email"], FILTER_VALIDATE_EMAIL)){
            $info[] = "Tu correo es, ". $_GET ["email"] ; 
        }
    }else{
        $errors[] = "Introduce un correo";
    }
        //Verificar comment
    if(isset($_GET["comment"]) && !empty($_GET["comment"])){
        $info[] = $_GET["comment"];
    }else{
        $info[] = "No hay comentario";
    }

        //Verificar Genero
    if(isset($_GET["gender"]) && !empty($_GET["gender"])){
        $info[] = ("Gender: " . $_GET["gender"]);
    }else{
        $errors[] = "Introduzca un genero";
    }
        //Verifica Pais
    if(isset($_GET["country"]) && !empty($_GET["country"])){
        $info[] = ("Country: " . $_GET["country"]);
    }else{
        $errors[] = "Introduzca un pais";
    }
        //Hobbie
        if(isset($_GET["hobby"]) && !empty($_GET["hobby"]) && is_array($_GET["hobby"])) {
            foreach ($_GET["hobby"] as $hobbi) {  
                $info[] = "- ". $hobbi;  
            }
        } else {
            $errors[] = "Debes seleccionar al menos un hobby.";
        }
        
}
?>

    <form method="GET" >
    <h1>Formulario de Usuario</h1>
        <!-- Campo Nombre -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        

        <!-- Campo Edad -->
        <label for="age">Edad:</label>
        <input type="number" name="age" id="age" min="0" max="100" required>
        

        <!-- Campo Correo Electrónico -->
        <label for="email">Correo Electrónico:</label>               <!--Regex del correo, letras, un @, mas letras, punto, mas letras-->
        <input type="email" name="email" id="email" required pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
        

        <!-- Campo Comentario (opcional) -->
        <label for="comment">Comentario (opcional):</label>
        <textarea name="comment" id="comment" rows="4" cols="50"></textarea>
        

        <!-- Género (radio buttons) -->
        <label>Género:</label>
        <div class="gender">
        <input type="radio" id="male" name="gender" value="Masculino" required>
        <label for="male">Masculino</label>
        <input type="radio" id="female" name="gender" value="Femenino" required>
        <label for="female">Femenino</label>
        <input type="radio" id="other" name="gender" value="Otro" required>
        <label for="other">Otro</label>
        </div>

        <!-- País (lista desplegable) -->
        <label for="country">País:</label>
        <select name="country" id="country" required>
            <option value="">Seleccione su país</option>
            <option value="Argentina">Argentina</option>
            <option value="Brasil">Brasil</option>
            <option value="España">España</option>
            <option value="México">México</option>
            <option value="Estados Unidos">Estados Unidos</option>
        </select>

    <label>Hobby:</label>
    <div class="hobbies">
    <input type="checkbox" name="hobby" value="Leer" id="hobby">
    <label for="leer">Leer</label>
    
    <input type="checkbox" name="hobby" value="Viajar" id="hobby">
    <label for="viajar">Viajar</label>
    
    <input type="checkbox" name="hobby" value="Deportes" id="hobby">
    <label for="deportes">Deportes</label>
    
    <input type="checkbox" name="hobby" value="Cerveza" id="hobby">
    <label for="cerveza">Cerveza</label>
    
    <input type="checkbox" name="hobby" value="Videojuegos" id="hobby">
    <label for="videojuegos">Videojuegos</label>
    </div>


        <!-- Botón Enviar -->
        <input type="submit" value="Enviar">
    </form>
    <div id="errors">
        <?php
        if(!empty($errors)) {
        foreach($errors as $error){
            echo "<div>".$error."</div>";
        } 
    }
        ?>
    </div>
    <div id="info">
        <?php 
         if(empty($errors)){
            foreach($info as $i){
                echo "<div>".$i."</div>";
         }
        }
        ?>
    </div>
</body>
</html>
