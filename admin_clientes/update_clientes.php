<?php
include('conection.php');
$con = connection();

$rut = $_GET['rut'];


$sql = "SELECT * FROM clientes WHERE rut='$rut'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>


    <div>
        <form action="edit_clientes.php" method="POST">
            <h1>Editar Producto</h1>
            <input type="text" name="rut" placeholder="RUT"></br>
            <input type="text" name="name" placeholder="Nombre"></br>
            <input type="text" name="direccion" placeholder="Dirección"></br>
            <input type="text" name="telefono" placeholder="Fono"></br>
            <input type="text" name="correo" placeholder="Correo"></br>
            <input type="text" name="password" placeholder="Password"></br>
            </br>
            <input type="submit" value="Actualizar Cliente">
        </form>
    </div>    
</body>
</html>