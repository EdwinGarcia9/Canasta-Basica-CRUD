<?php
include './templates/Header.php';
include './model/Connection.php';
$idProduct =$_GET['id'];
$query = $bd->prepare("SELECT * from productos where id = ?");
$query->execute([$idProduct]);

$prod=$query->fetch(PDO::FETCH_OBJ);

//print_r($prod);
?>
<div class="container">
<form action="./Controllers/Update.php" method="POST"><!--aca agarramos los dato del formulario con post y lo manda al register-->
        <legend class="mx-auto">Ingrese los Datos a actualizar</legend>
        <div class="mb-3">
            <label>Nombre del nuevo producto</label>
            <input type="text" class="form-control" value="<?php echo $prod->nombre?>" name="inputName" required>
        </div>
        <div class="mb-3">
            <label>Precio por libra del nuevo producto</label>
            <input type="text" class="form-control"  value="<?php echo $prod->preciolb?>" name="inputPrice" required>
        </div>
        <div class="mb-3">
            <label>Cantidad de libras ingresadas</label>
            <input type="text" class="form-control" value="<?php echo $prod->cantstock?>" name="inputAmount" required>
        </div>
        <input type="hidden" name="id" value="<?php echo $prod->id ?>">
    
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
    </form>
    </div>

<?php
include './templates/Footer.php'
?>