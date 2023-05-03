<?php
include ('conection.php');

$con = connection();

$sql = "SELECT * FROM productos";
$query = mysqli_query($con, $sql);
?>
<?php include("../template/header_admin2.php") ?>

<div style="width: 1400px;height:600px;background-image:url('../img/BG_productos.jpg');background-repeat: no-repeat;background-size: cover;">
    <h2>Administracion de Productos</h2></br>
    <div class="row" style="width: 1300px;">
        
        <div class="container">
            <div class="row">
                <div style="width:30px;"></div>
                
                    <div class="col-sm" style="width:100px;height:300px;margin-left: auto;margin-right: auto;background-color:#AAC6F5 ;opacity:0.9;">
                        <form action="insert_prod.php" method="POST">
                            <h1>Agregar Producto</h1>
                            <input type="text" name="codigo" placeholder="Codigo"></br>
                            <input type="text" name="name" placeholder="Nombre"></br>
                            <input type="text" name="description" placeholder="Descripcion"></br>
                            <input type="text" name="stock" placeholder="Stock"></br>
                            <input type="text" name="valor" placeholder="Valor"></br>
                            </br>
                            <input type="submit" value="Agregar Producto">

                        </form>
                    </div>
        
                    <div class="col-md table" style="width:100px;height:300px;margin-left: auto;margin-right: auto;background-color:#AAC6F5 ;opacity:0.9;">
                        <h2>Listado de Productos</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Codigo</th>   
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Stock</th>
                                    <th>Valor</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = mysqli_fetch_array($query)): ?>
                                <tr>
                                    <th> <?= $row['codigo'] ?></th>
                                    <th> <?= $row['name'] ?></th>
                                    <th> <?= $row['description'] ?></th>
                                    <th> <?= $row['stock'] ?></th>
                                    <th> <?= $row['valor'] ?></th>
                                    <th><a href="update_prod.php?codigo=<?=$row['codigo'] ?>" >Editar</a></th>
                                    <th><a href="delete_prod.php?codigo=<?=$row['codigo'] ?>">Eliminar</a></th>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
    