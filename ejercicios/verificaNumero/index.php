<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        
        if($_SERVER['REQUEST_METHOD'] === "GET" && !empty( $_GET )) {
            $num = $_GET["num"];
            $res = '';
                                  //Si no lo pones no va con el 0
        if(isset($_GET['num']) && $num != "") {
            if($num > 0){
                $res ="Es positivo";

            }elseif($num < 0){
                $res = "Es negativo";
            }else{
                $res = "Es 0";
            }
        }
        else {
            $res = "Introduce un num";
        }
    }
    ?>

    <form method="GET">
        <h1>Number verification</h1>
        <input type="number" name="num" id="num">
        <input type="submit" value="Submit" >
    </form>
    <div>
        <?php 
            echo $res;
        ?>
    </div>
</body>
</html>