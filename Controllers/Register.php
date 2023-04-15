<?php
//print_r($_POST); //aca agarramos los datos del post de index 
if(empty($_POST["inputName"]) || empty($_POST["inputPrice"]) || empty($_POST["inputAmount"])){
    echo "Error, complete el formulario";
    exit();
}
$name = $_POST["inputName"];
$price = $_POST["inputPrice"];
$amount = $_POST["inputAmount"];

require '../model/Connection.php';

$query = $bd->prepare("INSERT INTO productos(nombre,preciolb,cantstock) VALUES(?,?,?);");
$result = $query->execute([$name,$price,$amount]);
//aca en la primera Query preparas las bd y usas la consulta insert para agregar datoa a la tabla productos que esta en la base de datos stock (esto lo haces en prepare), y luego en execute mandas esos datos a la bd

if($result){
    header("Location: ../index.php"); //regreso el index
}else{
    echo"Fallo en el Registro";
}
?>