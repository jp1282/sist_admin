<?php
include ('conection.php');

$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<?php include("Template/header.php") ?>


    <div class="container" style="background-color:grey;background-image:url('img/login_clientes.jpg');background-repeat: no-repeat;background-size: cover;">
        <div class="row">
            <div    class="col-md"
                    style="width: 600px;
                            height:600px; 
                            margin-left: auto;
                            margin-right: auto;">
                            
                <div    class="card" 
                        style="width: 350px;
                                margin-top:150px;
                                margin-left: auto;
                                margin-right: auto;
                                background-color: lightgrey;opacity:0.8;
                                text-align:center;">
                    <h3> Acceso Administrador</h3>
                    
                    <div class="card">
                        <form action="valid_user.php" method="POST">
                            <h1>Login</h1>
                            <input type="text" name="email"     placeholder="Correo"></br>
                            </br>
                            <input type="password" name="password"  placeholder="Password"></br>
                            </br>
                            <input type="submit" value="Login"></br></br>
                            
                        </form>
                    </div>
                    
                </div>    
            </div>
        </div>    
    </div>

<?php include("Template/footer.php") ?>