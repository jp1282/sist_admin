<?php
include('conection.php');
$con = connection();

$codigo = $_GET['codigo'];


$sql = "SELECT * FROM productos WHERE codigo='$codigo'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-widith, initial-scale=1.0">
    <title>Editar Producto</title>
</head>    
<body>
    <div>
        <form action="edit_prod.php" method="POST">
            <h1>Editar Producto</h1>
            <input type="text" name="codigo" placeholder="Codigo"></br>
            <input type="text" name="name" placeholder="Nombre"></br>
            <input type="text" name="description" placeholder="Descripcion"></br>
            <input type="text" name="stock" placeholder="Stock"></br>
            <input type="text" name="valor" placeholder="Valor"></br>
            </br>
            <input type="submit" value="Actualizar Producto">
        </form>
    </div>    
</body>
</html>