<?php
include('conection.php');
$con = connection();

$codigo = $_GET['codigo'];

$sql = "DELETE FROM productos WHERE codigo='$codigo'";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: mant_prod.php");
}

?>