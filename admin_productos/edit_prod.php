<?php
include('conection.php');
$con = connection();

$codigo = $_POST['codigo'];
$name = $_POST['name'];
$description = $_POST['description'];
$stock = $_POST['stock'];
$valor = $_POST['valor'];

$sql = "UPDATE productos SET name='$name', description='$description',stock='$stock',valor='$valor'";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: mant_prod.php");
}

?>