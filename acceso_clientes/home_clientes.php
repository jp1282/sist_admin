<?php include("header.php") ?>
<?php

include('conection.php');
$con = connection();

$correo = $_GET['email'];

$sql = "SELECT * FROM clientes WHERE correo='$correo'";
$query = mysqli_query($con, $sql);

?>
    <div class="col-md">
        <h1>Home Cliente</h1>
        </br>
        <?php while($row = mysqli_fetch_array($query)): ?>
            <h4>RUT: <?= $row['rut'] ?></h4>
            <h4>Razon Social: <?= $row['name'] ?></h4>
            <h4>Dirección: <?= $row['address'] ?></h4>
            <h4>Fono: <?= $row['telefono'] ?></h4>
            <h4>Correo: <?= $row['correo'] ?></h4>
        
    </div>
    <div class="col-md menu">
        <h2>Menu Cliente</h2>

        <a href="stock_prod_cte.php?rut=<?=$row['rut'] ?>"><h3>Matencion Productos</h3></a>
        <a href="solicitar_prod.php?rut=<?=$row['rut'] ?>"><h3>Solicitar Productos</h3></a>
    </div>
    <?php endwhile; ?>

<?php include("footer.php") ?>