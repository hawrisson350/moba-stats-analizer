<?php
$sql = mysqli_connect("localhost","root","","lolcito");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aca se mostrara lo prron</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>localidad</td>
            <td>linea</td>
        </tr>
    <?php 

    $consulta = "SELECT * from campeones";

    $tabla = mysqli_query($sql,$consulta);

    while($arreglo = mysqli_fetch_array($tabla)){
    ?>

    <tr>
        <td><?php echo $mostrar['id'] ?></td>
        <td><?php echo $mostrar['nombre'] ?></td>
        <td><?php echo $mostrar['localidad'] ?></td>
        <td><?php echo $mostrar['inea'] ?></td>
    </tr>

    <?php 
    }
    ?>
    </table>
</body>
</html>