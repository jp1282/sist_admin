<?php include("header.php") ?>
<?php

include('conection.php');
$con = connection();

$rut = $_GET['rut'];

$sql = "SELECT * FROM clientes WHERE rut='$rut'";
$query = mysqli_query($con, $sql);


?>
    <div class="col-md">
        
        <h2>Datos Cliente</h2>
        </br>
        <?php while($row = mysqli_fetch_array($query)): ?>
            <h4>RUT: <?= $row['rut'] ?></h4>
            <h4>Razon Social: <?= $row['name'] ?></h4>
            <h4>Dirección: <?= $row['address'] ?></h4>
            <h4>Fono: <?= $row['telefono'] ?></h4>
            <h4>Correo: <?= $row['correo'] ?></h4>
        
    </div>
        
    <div>
        </br></br>
        <h2>Formulario Solicitud de Productos</h2>
        <form action="enviar_solicitud.php" method="POST">
            <input type="hidden" name="rut" value="<?=$row['rut']?>">
            <input type="hidden" name="name" value="<?=$row['name']?>">
            <input type="hidden" name="email" value="<?=$row['correo']?>">
            <input type="text" name="name_1" placeholder="Nombre"><input type="text" name="qty_1" placeholder="cantidad"></br>
            <input type="text" name="name_2" placeholder="Nombre"><input type="text" name="qty_2" placeholder="cantidad"></br>
            <input type="text" name="name_3" placeholder="Nombre"><input type="text" name="qty_3" placeholder="cantidad"></br>
            <input type="text" name="name_4" placeholder="Nombre"><input type="text" name="qty_4" placeholder="cantidad"></br>
            <input type="text" name="name_5" placeholder="Nombre"><input type="text" name="qty_5" placeholder="cantidad"></br>
            <input type="text" name="name_6" placeholder="Nombre"><input type="text" name="qty_6" placeholder="cantidad"></br>
            <input type="text" name="name_7" placeholder="Nombre"><input type="text" name="qty_7" placeholder="cantidad">
            </br></br>
            <input type="submit" value="Enviar Solicitud" class="btn-default">
        </form>
    </div>
    <?php endwhile; ?>

<?php include("footer.php") ?>














    