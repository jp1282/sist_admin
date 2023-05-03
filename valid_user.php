<?php
include('conection.php');
$con = connection();

$correo = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE Correo='$correo' AND Password='$pass'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($query);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            Header("Location: administracion.php");  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

?>