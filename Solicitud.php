
<?php 
Class Solicitud{
    public $nombre;
    public $email;
    public $fecha;
    public $fono;
    public $edad;

    function __construct($nombre,$email,$fecha,$fono,$edad){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->fecha = $fecha;
        $this->fono = $fono;
        $this->edad = $edad;
    }

    function set_nombre($nombre){
        $this->nombre = $nombre;
    }

    function get_nombre(){
        return  $this->nombre;
    }
    function get_email(){
        return $this->email;
    }

    function get_fecha(){
        return $this->fecha;
    }

    function get_fono(){
        return $this->fono;
    } 
    function get_edad(){
        return $this->edad;
    } 

}

 /**
  * Acceso post de los input del formulario. 
  * Se crean variables para cargarlas con lo que viene de la otra pagina
  */
 $nombre = $_POST['nombre'];
 $email = $_POST['email'] ;
 $fecha = $_POST['fecha'];
 $fono = $_POST['fono'];
 $edad = $_POST['edad'];
 //echo "I love $nombre, $email, $fecha, $fono!";


/**
 * Acceso a la clase y su metodo, ya que se creo un objeto a travez de los datos
 * del formulario obtenido por POST
 * 
 */
//Constructor cargado directamente con el POST
$misolicitud = new Solicitud($_POST['nombre'], $_POST['email'], $_POST['fecha'], $_POST['fono'], $_POST['edad']);

//Constructor cargado con variables declaradas desde la linea 40 a la 43
$misolicitud2 = new Solicitud($nombre, $email, $fecha, $fono, $edad);



// Create connection
$conn= new mysqli("127.0.0.1", "root", "root", "consulta2",3306);

// Check connection
if (!$conn) {
  die("coneccion fallo: " . mysqli_connect_error());
}

$sql = "INSERT INTO subcripcion (nombre,fecha , email, fono, edad)
VALUES ('$nombre', '$fecha', '$email ','$fono', '$edad')";

if (mysqli_query($conn, $sql)) {
  echo "Se ingresaron los datos exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>