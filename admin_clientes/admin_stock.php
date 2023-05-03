<?php include("../template/header_admin2.php") ?>
<?php

include('conection.php');
$con = connection();

$rut = $_GET['rut'];

$sql = "SELECT * FROM stockprodcliente,productos WHERE stockprodcliente.rut_cte='$rut' and stockprodcliente.cod_prod=productos.codigo";
$query = mysqli_query($con, $sql);

$sql2 = "SELECT * FROM clientes WHERE rut='$rut'";
$query2 = mysqli_query($con, $sql2);
?>
    <div class="col-md">
        <h2>Stock Productos Actuales </h2>
        <?php while($row2 = mysqli_fetch_array($query2)): ?>
            <h5>RUT: <?= $row2['rut'] ?></h5>
            <h5>Razon Social: <?= $row2['name'] ?></h5>
        <?php endwhile; ?>
        <table class="table" style="text-align:center;">
            <thead>
                <tr>
                    <th>ID</th>   
                    <th>CODIGO PRODUCTO</th>
                    <th>NOMBRE PRODUCTO</th>
                    <th>STOCK ACTUAL</th>
                    <th>STOCK CRITICO</th>
                    <th>Acciones</th>
                    <!--th></th-->
                </tr>
            </thead>
            <tbody style="text-align:center;">
                <?php while($row = mysqli_fetch_array($query)): 
                    $stockActual=$row['stock_actual']?>

                    <tr>
                        <th> <?= $row['ID'] ?></th>
                        <th> <?= $row['cod_prod'] ?></th>
                        <th> <?= $row['name'] ?></th>
                        <th> <?= $row['stock_actual'] ?></th>
                        <th> <?= $row['stock_critico'] ?></th>
                        <th><a href="update_prod.php?codigo=<?=$row['codigo'] ?>" >Editar</a></th>
                        <!--th><a href="delete_prod.php?codigo=<?=$row['codigo'] ?>">Eliminar</a></th-->
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

<?php include("../template/footer.php") ?>