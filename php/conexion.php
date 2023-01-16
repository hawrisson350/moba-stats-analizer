<?php 

$server='localhost';
$user='root';
$pass='';
$bd='lolcito';


$conexion=mysqli_connect($server,$user,$pass,$bd);

if ($conexion) {
    echo "estas conectado";
}else {
    echo "no estas conectado";
};

?>