
<form >

<h1> Formulario de registro  </h1>

Nombre : <input type="text" name="nombre" >
<br>
Apellido : <input type="text" name="apellido" >
<br>
Ciudad : <select name="ciudad" >
    <option > Guaymas</option>
    <option > Hermosillo</option>
    <option > Obregon</option>
    <option > Empalme</option>
    <option > Cajeme</option>
    <option > Nogales</option>
    <option > Cananea</option>
    <option > Navojoa</option>

</select>
<br>
Edad : <input type="number" name ="edad">
<br>
Telefono : <input type="text" name="telefono" >
<br>
Correo : <input type="text" name="correo" >
<br>
Estado civil
<select name="estado" >
    <option > Soltero(a)</option>
    <option > Casado(a)</option>
    

</select>
<br>


<button>Enviar</button>
    
</form>
<?php

if( isset($_GET['nombre'])){

    echo "<h2> Nombre:   ".$_GET['nombre']."</h2>";
    echo "<h2> Apellido: ".$_GET['apellido']."</h2>";
    echo "<h2> Ciudad:   ".$_GET['ciudad']."</h2>";
    echo "<h2> Edad:     ".$_GET['edad']."</h2>";
    echo "<h2> Telefono: ".$_GET['telefono']."</h2>";
    echo "<h2> Correo:   ".$_GET['correo']."</h2>";
    echo "<h2> Estado:   ".$_GET['estado']."</h2>";
    

}

?>
