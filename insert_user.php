<?php
include('conection.php');
$con = connection();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$Correo = $_POST['email'];
$pin = $_POST['pin'];

$sql = "INSERT INTO usuarios (name,lastname,username,Password,Correo,pin) VALUES ('$name','$lastname','$username','$password','$Correo', '$pin')";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: mant_user.php");
}

?>

