<?php
include '../model/Connection.php';
$idProduct = $_GET['id'];


$query = $bd->prepare("DELETE FROM productos WHERE id = ?");
$result = $query->execute([$idProduct]);


if($result){
    header("Location: ../index.php"); //regreso el index
}else{
    echo"Fallo en la actualizacion de datos";
}
?>