<?php
include('conection.php');
$con = connection();

$correo = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM clientes WHERE correo='$correo' AND password='$pass'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($query);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            Header("Location: acceso_clientes/home_clientes.php?email=$correo"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

?>
