<?php
include('conection.php');
$con = connection();

$rut = $_GET['rut'];

$sql = "DELETE FROM clientes WHERE rut='$rut'";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: mant_clientes.php");
}

?>