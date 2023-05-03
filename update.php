<?php
include('conection.php');
$con = connection();

$id = $_GET['id'];


$sql = "SELECT * FROM usuarios WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-widith, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>    
<body>
    <div>
        <form action="edit_user.php" method="POST">
            <h1>Editar usuario</h1>
            <input type="hidden" name="id"      placeholder="id"        value="<?=$row['id']?>"></br>
            <input type="text" name="email"     placeholder="Correo"    value="<?=$row['Correo']?>"></br>
            <input type="text" name="password"  placeholder="Password"  value="<?=$row['Password']?>"></br>
            <input type="text" name="name"      placeholder="Nombre"    value="<?=$row['name']?>"></br>
            <input type="text" name="lastname"  placeholder="Apellido"  value="<?=$row['lastname']?>"></br>
            <input type="text" name="username"  placeholder="Username"  value="<?=$row['username']?>"></br>
            <input type="text" name="pin"       placeholder="PIN"       value="<?=$row['pin']?>"></br>
            </br>
            <input type="submit" value="Actualizar Usuario">
        </form>
    </div>    
</body>
</html>