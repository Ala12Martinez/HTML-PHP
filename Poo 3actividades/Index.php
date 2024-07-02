<?php 
//Problema:Confeccionar una clase Empleado, definir como atributos su nombre y sueldo.Definir un método inicializar que lleguen como dato el nombre y sueldo. Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos)

class Empleado {
    private $nombre;
    private $sueldo;
    
    public function inicializar($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
    
    public function pagarImpuestos() {
        if ($this->sueldo > 3000) {
            echo $this->nombre . " debe pagar impuestos.";
        } else {
            echo $this->nombre . " no debe pagar impuestos.";
        }
    }
}

$empleado1 = new Empleado();

$empleado1->inicializar("Akan", 25000);

$empleado1->pagarImpuestos();




?>