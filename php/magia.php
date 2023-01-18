<?php

$eleccion = $_POST['btn'];


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
                <label for=""><b>NOMBRE:</b><?php echo $nombre;?> <b>LOCALIDAD </b><?php echo $localidad; ?> <b>LINEA </b> <?php echo $linea; ?></label>
                <?php
                if ($eleccion == 1){
                    ?>
                    <br>
                    <img width="60%" height="60%" src="https://theglobalgaming.com/images/article/_webp/505000/Best-Aatrox-Build.webp">
                    <?php
                }else if ($eleccion == 2){
                    ?>
                    <br>
                    <img width="60%" height="60%" src="https://theglobalgaming.com/images/article/_webp/254397/Vex-Best-Build-Spells-Items-Runes-League-of-Legends.webp?transformId=14314">
                    <?php
                }else if ($eleccion == 3){
                ?>
                <br>
                <img width="60%" height="60%" src="https://theglobalgaming.com/assets/legacy/lol/63026665779277c1890862bb_gD8P2QriqEW0Gf79QirSaDpQh8D3JiiV4kVxkTOOrDVW-xna9SozsVo2vuIoNaoDPsjXFJdDPQ_0bh3B05ftM4UnwGWXRiHX3nwcLrVGedqrh1cEs_g21afcbDOCpz66t_10Zo7nmTKTNJbmeOWdtbo.webp">
                <?php
            }                
                ?>
        </div>
    </div>
    <?php
        }
    }
}
?>

