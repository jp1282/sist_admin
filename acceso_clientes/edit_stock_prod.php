<?php
include('conection.php');
$con = connection();

$id = $_POST['ID'];
$stockprod = $_POST['stockprod'];

$sql = "UPDATE stockprodcliente SET stock_actual='$stockprod' WHERE ID='$id'";
$query = mysqli_query($con, $sql);


$sql2 ="SELECT * FROM stockprodcliente WHERE ID='$id'";
$query2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($query2);
$rut = $row2['rut_cte'];

if ($query){
    #echo $rut;
    Header("Location: stock_prod_cte.php?rut=$rut");
}else{
    echo ("No se pudo guardar");
}

?>