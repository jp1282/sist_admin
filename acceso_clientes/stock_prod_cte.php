<?php include("header.php") ?>
<?php

include('conection.php');
$con = connection();

$rut = $_GET['rut'];

$sql = "SELECT * FROM stockprodcliente,productos WHERE stockprodcliente.rut_cte='$rut' and stockprodcliente.cod_prod=productos.codigo";
$query = mysqli_query($con, $sql);

?>
    <div class="row">
        <div class="col">
            <h2>Agregar producto</h2>
            <form action="insert_prod_stock.php" method="POST">
                <input type="hidden" name="rutcte" value="<?php echo $rut; ?>">
                <input type="text"   name="codigo" placeholder="codigo">
                <input type="text"   name="stock"  placeholder="stock">
                <input type="submit" value="Guardar">
            </form>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md">
            </br></br>
            <h2>Stock Productos Actuales</h2>
            <table class="table" style="text-align:center;">
                <thead>
                    <tr>
                        <th>ID</th>   
                        <th>CODIGO PRODUCTO</th>
                        <th>NOMBRE PRODUCTO</th>
                        <th>DESCRIP. PRODUCTO</th>
                        <th>STOCK ACTUAL</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    <?php while($row = mysqli_fetch_array($query)): 
                        $stockActual=$row['stock_actual']?>

                    <tr>
                        <th> <?= $row['ID'] ?></th>
                        <th> <?= $row['cod_prod'] ?></th>
                        <th> <?= $row['name'] ?></th>
                        <th> <?= $row['description'] ?></th>
                        <th> <?= $row['stock_actual'] ?></th>
                        <th><a href="update_prod_stock.php?ID=<?=$row['ID'] ?>&codigo=<?=$row['cod_prod'] ?>" >Editar</a></th>
                        <th><a href="delete_prod_stock.php?ID=<?=$row['ID'] ?>">Eliminar</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

</html>
</body>














    