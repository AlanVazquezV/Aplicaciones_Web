<?php


if(isset($_GET["numero"])){

    $r = $_GET;


    $op= $r["numero"];
  

    
    switch($op){
        case '1':
            $resultado = "FELICIDADES, TE GANASTE LA PIEDRA VOLADA!!!!!!!!!!";

            break;
        case '2':
            $resultado = "FELICIDADES, TE GANASTE UNA CABRA LECHERA!!!!!!!";
            break;
            
        case '3':
            $resultado = "FELICIDADES, TE GANASTE UNA CHEYENNE NEGRA SIN PLACAS!!!!!!!";
            break;

            
        case '':
            $resultado = "No elegiste ninguna puerta, no te llevas nada, pa que no eliges nada pues.";
            break;



    }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elige una Puerta</title>
</head>
<body>
<h1> ELIGE EL NUMERO DE UNA PUERTA PARA GANARTE UN PREMIO </h1>
<form method="get" action="puerta.php" >
<br>
<label for="">Elige el numero: </label>
    <select name="numero" >
        <option > </option>
        <option > 1</option>
        <option > 2</option>
        <option > 3</option>
    

    </select>
            
            


           <button type="submit"  >Elegir</button>                
    </form>

    <h3><?php echo $resultado; ?></h3>
</body>
</html>