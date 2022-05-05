
<?php 

Class Solicitud{
    public $nombre;
    public $email;
    public $fecha;
    public $fono;
    public $edad;
    public $current_year;

    function __construct($nombre, $email, $fecha, $fono, $edad){
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
        return $this->nombre;
    }
    function get_email(){
        return $this->email;
    }
    function get_fecha(){
        return $this->fecha;
    }
    function calc_edad(){
        $this->current_year = date('Y');
        return $this->current_year-$this->edad;
    }
}
$misolicitud = new Solicitud($_POST['nombre'], $_POST['gmail'], $_POST['fecha'], $_POST['fono'], $_POST['edad']);
echo $misolicitud->get_email();
echo '<br>';
echo $misolicitud->calc_edad();

?>