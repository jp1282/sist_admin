<?php
include ('conection.php');

$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>
<?php include("Template/header_admin.php") ?>

<div style="width: 1400px;height:600px;background-image:url('img/BG_usuarios.jpg');background-repeat: no-repeat;background-size: cover;">
    <h2>Administracion de Usuarios</h2></br>
    <div class="row" style="width: 1300px;">
        
        <div class="container">
            <div class="row">
                <div style="width:30px;"></div>

                <div class="col-sm" style="width:100px;height:300px;margin-left: auto;margin-right: auto;background-color:#BAEBEF ;opacity:0.9;">
                    <form action="insert_user.php" method="POST">
                        <h1>Crear usuario</h1>
                        <input type="text" name="email" placeholder="Correo"></br>
                        <input type="text" name="password" placeholder="Password"></br>
                        <input type="text" name="name" placeholder="Nombre"></br>
                        <input type="text" name="lastname" placeholder="Apellido"></br>
                        <input type="text" name="username" placeholder="Username"></br>
                        <input type="text" name="pin" placeholder="PIN"></br>
                        </br>
                        <input type="submit" value="Agregar usuario">

                    </form>
                </div>
        
                <div class="col-md table" style="width:100px;height:300px;margin-left: auto;margin-right: auto;background-color: #BAEBEF;opacity:0.9;">
                    <h2>Usuarios registrados</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>   
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>User Name</th>
                                <th>Password</th>
                                <th>Correo</th>
                                <th>PIN</th>

                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($query)): ?>
                            <tr>
                                <th> <?= $row['id'] ?></th>
                                <th> <?= $row['name'] ?></th>
                                <th> <?= $row['lastname'] ?></th>
                                <th> <?= $row['username'] ?></th>
                                <th> <?= $row['Password'] ?></th>
                                <th> <?= $row['Correo'] ?></th>
                                <th> <?= $row['pin'] ?></th>
                                <th><a href="update.php?id=<?=$row['id'] ?>" >Editar</a></th>
                                <th><a href="delete.php?id=<?=$row['id'] ?>">Eliminar</a></th>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>
    </div>
</div>