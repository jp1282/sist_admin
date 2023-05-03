<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="Stylesheet" href="CSS/bootstrap.min.css" >
    <link rel="Stylesheet" href="../CSS/bootstrap.min.css" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    -->
</head>

<body>
<?php $url="http://".$_SERVER['HTTP_HOST']."/Taller_Mecanico" ?>
<div>
    <!-- 
        barra de navegacion, con vinculos usando variable de php
    -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="nav navbar-nav">
        <!--<li class="nav-item active"><img src="./IMG/logo.png" width="100px"></li>-->
        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item active"><a class="nav-link" href="administracion.php">Administracion</a></li>
        <!--<li class="nav-item active"><a class="nav-link" href="contacto.php">Contacto</a></li>-->
        <!--<li class="nav-item"><a class="nav-link" href="<?php echo $url; ?>/Administrador/index.php">administracion</a></li>-->
            
        </ul>
    </nav>
    
</div>
<br><br>
<div class="container">
    <div class="row">