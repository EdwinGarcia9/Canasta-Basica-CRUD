<?php 
include './model/Connection.php';

$query = $bd->query("SELECT * from productos");
$product = $query->fetchAll(PDO::FETCH_OBJ);
//con fetch nos traemos los datos de los query


?>