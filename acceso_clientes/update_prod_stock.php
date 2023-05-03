<?php
include('conection.php');
$con = connection();

$ID = $_GET['ID'];
$codigo = $_GET['codigo'];


$sql = "SELECT * FROM stockprodcliente WHERE ID='$ID'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

$sql2 = "SELECT * FROM productos WHERE codigo='$codigo'";
$query2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($query2);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-widith, initial-scale=1.0">
    <title>Editar Stock Producto</title>
</head>    
<body>
    <div>
        <h1>Editar Stock Producto</h1>
        <h4>Producto: <?= $row2['name'] ?>
        <h4>Descripcion: <?= $row2['description'] ?></h4>
        
        <form action="edit_stock_prod.php" method="POST">    
            <input type="hidden" name="ID"      placeholder="id"        value="<?=$row['ID']?>"></br>
            <label for="stock">Stock Actual: </label>
            <input type="text" name="stockprod"    value="<?=$row['stock_actual']?>"></br>
            </br>
            <input type="submit" value="Actualizar Producto">
        </form>
    </div>    
</body>
</html>