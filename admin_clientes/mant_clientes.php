<?php
include ('conection.php');

$con = connection();

$sql = "SELECT * FROM clientes";
$query = mysqli_query($con, $sql);
?>
<?php include("../template/header_admin2.php") ?>
<div style="width: 1400px;height:600px;background-image:url('../img/BG_cliente.jpg');background-repeat: no-repeat;background-size: cover;">
    <h2>Administracion de Clientes</h2></br>
    <div class="row" style="height:400px;margin-left:10px;margin-right:10px;text-align:center;">
        
        <div class="col-3" style="height:400px;background-color: lightblue;opacity:0.9;text-align:center;">
            <form action="insert_clientes.php" method="POST">
                <h2>Agregar Cliente</h2>
                <input type="text" name="rut" placeholder="RUT"></br>
                <input type="text" name="name" placeholder="Nombre"></br>
                <input type="text" name="adress" placeholder="Direccion"></br>
                <input type="text" name="telefono" placeholder="Fono"></br>
                <input type="text" name="correo" placeholder="Correo"></br>
                <input type="text" name="password" placeholder="Password"></br>
                </br>
                <input type="submit" value="Agregar Cliente">
            </form>
        </div>

        <div class="col table" style="height:400px;background-color: lightblue;opacity:0.9;text-align:center;">
            <h2>Listado de Clientes</h2>
            <table class="tble" style="text-align:center;">
                <thead style="text-align:center;">
                    <tr>
                        <th></th>
                        <th>RUT</th>   
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Fono</th>
                        <th>Correo</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><a href="admin_stock.php?rut=<?=$row['rut'] ?>" >Stock</a></th>
                        <th> <?= $row['rut'] ?></th>
                        <th> <?= $row['name'] ?></th>
                        <th> <?= $row['address'] ?></th>
                        <th> <?= $row['telefono'] ?></th>
                        <th> <?= $row['correo'] ?></th>
                        <th><a href="update_clientes.php?rut=<?=$row['rut'] ?>" >Editar</a></th>
                        <th><a href="delete_clientes.php?rut=<?=$row['rut'] ?>">Eliminar</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>   

<?php include("../Template/footer.php") ?>
            