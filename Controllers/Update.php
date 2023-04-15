<?php

print_r($_POST);
include '../model/Connection.php';

$id = $_POST['id'];
$name = $_POST["inputName"];
$price = $_POST["inputPrice"];
$amount = $_POST["inputAmount"];

$query = $bd->prepare("UPDATE productos SET nombre = ?, preciolb = ?, cantstock=? WHERE id = ?");
$result = $query->execute([$name,$price,$amount,$id]);

if($result){
    header("Location: ../index.php"); //regreso el index
}else{
    echo"Fallo en la actualizacion de datos";
}

?>