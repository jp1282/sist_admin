<?php
include('conection.php');
$con = connection();

$id = '';
$rutcte = $_POST['rutcte'];
$codigo = $_POST['codigo'];
$stock = $_POST['stock'];
$stockcritico ='1';
        
$sql = "INSERT INTO stockprodcliente (rut_cte,cod_prod,stock_actual,stock_critico) VALUES('$rutcte', '$codigo', '$stock', '$stockcritico')";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: stock_prod_cte.php?rut=$rutcte");
}else{
    echo ("No se pudo guardar");
}

?>