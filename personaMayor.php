<?php

$enviado=false;

if(isset($_GET["nombre1"])){
    $enviado=true;
    $r= $_GET;

    $nom1= $r["nombre1"];
    $edad1= $r["edad1"];
    $nom2= $r["nombre2"];
    $edad2= $r["edad2"];

    if($edad1>$edad2){
        $resultado= $nom1." es mayor que ". $nom2;
    }elseif($edad2>$edad1){
        $resultado= $nom2." es mayor que ". $nom1;
    }elseif($edad1 == $edad2){
        $resultado= $nom1." y ".$nom2." tienen la misma edad" ;
    }

}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PersonaMayor</title>
</head>
<body>
    <h1> Persona Mayor  </h1>

    <form method="get" action="personaMayor.php">

        <label for=""> Introduzca el primer nombre:</label>
        <input type= "text" name= "nombre1">

        <br>

        <label for=""> Introduzca la primer edad:</label>
        <input type= "number" name= "edad1">

        <br>
        <br>

        <label for=""> Introduzca el segundo nombre:</label>
        <input type= "text" name= "nombre2">

        <br>

        <label for=""> Introduzca la segunda edad:</label>
        <input type= "number" name= "edad2">

        <br>
        <br>

        <button type="submit" >Enviar</button>
    </form>

    <?php if($enviado){ ?>
   

    <h2> <?= $resultado; ?>  </h2>


    <?php } ?>
</body>
</html>