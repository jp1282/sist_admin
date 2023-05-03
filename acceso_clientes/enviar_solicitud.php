<?php
$rut = $_POST['rut'];
$correo = $_POST['email'];

$prod1 = $_POST['name_1'];
$prod2 = $_POST['name_2'];
$prod3 = $_POST['name_3'];
$prod4 = $_POST['name_4'];
$prod5 = $_POST['name_5'];
$prod6 = $_POST['name_6'];
$prod7 = $_POST['name_7'];

$qty1 = $_POST['qty_1'];
$qty2 = $_POST['qty_2'];
$qty3 = $_POST['qty_3'];
$qty4 = $_POST['qty_4'];
$qty5 = $_POST['qty_5'];
$qty6 = $_POST['qty_6'];
$qty7 = $_POST['qty_7'];

$productos = "producto 1: ".$prod1 ."cantidad: ". $qty1 ."producto 2: ".$prod2 ."cantidad: ". $qty2 ."producto 3: ".$prod3 ."cantidad: ". $qty3 . "producto 4: ".$prod4 ."cantidad: ". $qty4 ."producto 5: ".$prod5 ."cantidad: ". $qty5 ."producto 6: ".$prod6 ."cantidad: ". $qty6 ."producto 7: ".$prod7 ."cantidad: ". $qty7 ;

$destinatario = 'juanp.mbb@gmail.com'; // en esta línea va el mail del destinatario.
$asunto = 'Solicitud Productos'; // acá se puede modificar el asunto del mail

$cuerpo = "Nombre y apellido: " . $_POST['name'] . "\r\n"; 
$cuerpo .= "Email: " . $_POST['email'] . "\r\n";
$cuerpo .= "Solicita: " . $productos . "\r\n";
//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
// Si se agrega un campo al formulario, hay que agregarlo acá.

$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/plain; charset=utf-8\n";
$headers .= "X-Priority: 3\n";
$headers .= "X-MSMail-Priority: Normal\n";
$headers .= "X-Mailer: php\n";
$headers .= "from : Systema mantenedor de productos";

mail($destinatario, $asunto, $cuerpo, $headers);

#echo $correo
Header("Location: home_clientes.php?email=$correo");

?>