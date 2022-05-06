
<?php 
 $nombre = $_POST['nombre'];
 $email = $_POST['email'] ;
 $fecha = $_POST['fecha'];
 $fono = $_POST['fono'];
 $edad = $_POST['edad'];
 //echo "I love $nombre, $email, $fecha, $fono!";
$misolicitud = new Solicitud($_POST['nombre'], $_POST['email'], $_POST['fecha'], $_POST['fono'], $_POST['edad']);

$misolicitud2 = new Solicitud($nombre, $email, $fecha, $fono, $edad);
echo "Se realiza GET desde la clase creada como 'misolicitud \n";
echo $misolicitud->get_nombre(); 
echo $misolicitud->get_email();
echo $misolicitud->get_fecha();
echo $misolicitud->get_fono();
echo $misolicitud->get_edad();
?>
