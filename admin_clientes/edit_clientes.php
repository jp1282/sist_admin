<?php
include('conection.php');
$con = connection();

$rut = $_POST['rut'];
$name = $_POST['name'];
$adress = $_POST['adress'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "UPDATE clientes SET rut='$rut', name='$name',adress='$adress',telefono='$telefono',correo='$correo',password='password'";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: mant_clientes.php");
}

?>