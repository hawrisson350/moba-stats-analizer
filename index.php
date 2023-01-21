<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/imagenes.css">
    <link rel="stylesheet" media="only screen and (max-width: 768px)" href="estilos.css">
</head>

<body>
    <main>
        <?php
        $conx = include("php/conexion.php");

        if ($conx) {
            $consulta = "SELECT * from campeones";
            $resultado = mysqli_query($conex, $consulta);
            ?>
            <?php
            if ($resultado) {
                while ($row = $resultado->fetch_array()) {
                    ?>
                    <div class="wrap">
                        <div class="champicon">
                            <img src="<?php echo $row['imagen']; ?>" />
                        </div>
                        <div class="champname">

                            <?php echo $row['nombre']; ?>

                        </div>
                    </div>
                    <?php
                    $nombre = $row['nombre'];
                    $localidad = $row['imagen'];
                }
            }
        }
        ?>
    </main>
</body>

</html>