<?php
include('conection.php');
$con = connection();

$id = $_GET['ID'];

$sql2 ="SELECT * FROM stockprodcliente WHERE ID='$id'";
$query2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($query2);
$rut = $row2['rut_cte'];

$sql = "DELETE FROM stockprodcliente WHERE ID='$id'";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: stock_prod_cte.php?rut=$rut");
}

?>