<?php
$password ="";
$user = "root";
$name_bd = "stock";


try{
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$name_bd,
        $user,$password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

}catch(Exception $e){
    echo "No funciono la conexion: ".$e->getMessage();
}

?>