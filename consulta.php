<?php 
 
$mysqli = new mysqli("127.0.0.1", "root", "root", "faronoticias",3306);
if (phpmyadmin->connect_errno) {
   echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>
