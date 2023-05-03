<?php
include('conection.php');
$con = connection();

$id = $_POST['id'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$Correo = $_POST['email'];
$pin = $_POST['pin'];

$sql = "UPDATE usuarios SET name='$name', lastname='$lastname',username='$username',Password='$password',Correo='$Correo', pin='$pin' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: mant_user.php");
}

?>