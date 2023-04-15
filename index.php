<?php
include './templates/Header.php';
include './Controllers/getProducts.php';

?>
<div class="container">
    <div>
        <table class="table table-dark table-striped mx-auto">
        <thead class="mx-auto">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio LBs</th>
            <th scope="col">Cantidad LBs</th>
            <th scope="col">Valor en Dolares</th>
            <th scope="col">Cambios</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($product as $dato){  
            ?>
            <tr>
            <th scope="row"><?php echo $dato->id ?></th>
            <td><?php echo $dato->nombre ?></td>
            <td><?php echo $dato->preciolb; echo "$"?></td>
            <td><?php echo $dato->cantstock; echo "Lbs" ?></td>
            <td><?php echo number_format((($dato->cantstock)*($dato->preciolb)),2);echo "$"; ?></td>
            <td><a class="btn btn-primary" href="./Cambio.php?id=<?php echo $dato->id ?>">Editar</a><a class="btn btn-danger" href="./Controllers/Delete.php?id=<?php echo $dato->id ?>">Eliminar</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
        </table>
    </div>
    <form action="./Controllers/Register.php" method="POST"><!--aca agarramos los dato del formulario con post y lo manda al register-->
        <legend class="mx-auto">Ingrese los Datos del nuevo producto</legend>
        <div class="mb-3">
            <label>Nombre del nuevo producto</label>
            <input type="text" class="form-control" placeholder="Ingrese el nombre del nuevo producto" name="inputName" required>
        </div>
        <div class="mb-3">
            <label>Precio por libra del nuevo producto</label>
            <input type="text" class="form-control" placeholder="Ingrese el Precio por libra del nuevo producto en Dolares" name="inputPrice" required>
        </div>
        <div class="mb-3">
            <label>Cantidad de libras ingresadas</label>
            <input type="text" class="form-control" placeholder="Ingrese la cantidad de libras que ingresara del nuevo producto" name="inputAmount" required>
        </div>
    
        <button type="submit" class="btn btn-primary">Registrar Nuevo producto</button>
    </form>

</div>
<?php
include './templates/Footer.php'
?>