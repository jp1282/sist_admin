<?php
include('conection.php');
$con = connection();

$rut = $_POST['rut'];
$name = $_POST['name'];
$address = $_POST['address'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "INSERT INTO clientes VALUES('$rut', '$name','$address','$telefono','$correo','$password')";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: mant_clientes.php");
}

?>

