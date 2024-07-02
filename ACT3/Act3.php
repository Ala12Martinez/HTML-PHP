<?php

class Persona {
    protected $nombre;
    protected $edad;
    
    public function cargarDatos($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
    public function imprimirDatos() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
    }
}

class Empleado extends Persona {
    private $sueldo;
    
    public function cargarSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }
    
    public function imprimirSueldo() {
        echo "Sueldo: $" . $this->sueldo . "<br>";
    }
}

$persona1 = new Persona();
$persona1->cargarDatos("Juan", 30);
echo "Datos de la persona:<br>";
$persona1->imprimirDatos();

$empleado1 = new Empleado();
$empleado1->cargarDatos("Pedro", 35);
$empleado1->cargarSueldo(3000); 
echo "<br>Datos del empleado:<br>";
$empleado1->imprimirDatos();
$empleado1->imprimirSueldo(); 

?>
