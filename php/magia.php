<?php

$eleccion = $_POST['btn'];
echo $eleccion;


$conx =include("conexion.php");

    if ($conx) {
        $consulta = "SELECT * from campeones WHERE id = $eleccion";
        $resultado = mysqli_query($conex,$consulta); 
        if ($resultado) {
            while ($row = $resultado -> fetch_array()) {
                $id = $row['id'];
                $nombre = $row['nombre'];
                $localidad = $row['localidad'];
                $linea = $row['linea'];
                 
                ?>
    <div>
        <div>
            <p>
                <b>NOMBRE:</b><?php echo $nombre;?> <br>
                <b>LOCALIDAD </b><?php echo $localidad; ?><br>
                <b>LINEA </b> <?php echo $linea; ?>
            </p>
        </div>
    </div>
    <?php
        }
    }
}

?>

