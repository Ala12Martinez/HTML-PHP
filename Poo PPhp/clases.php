<?php

class Vehiculo
{
    public $color;
    public $peso;

    function __construct($color, $peso)
    {
        $this->color = $color;
        $this->peso = $peso;
    }

    function getColor()
    {
        return $this->color;
    }

    function getPeso()
    {
        return $this->peso;
    }

    function circula()
    {
        return ("El vehiculo circula");
    }

    function anadir_persona($peso)
    {
        $this->peso += $peso;
    }

    function repintar($color)
    {
        $this->color = $color;
    }
}

class dos_ruedas extends Vehiculo
{
    function poner_gasolina($litros)
    {
        $litros_equiv_kilos = $litros;
        $this->peso += $litros_equiv_kilos;
    }
}

class Coche extends dos_ruedas
{
    public $numero_cadenas_nieve;

    function anadir_cadenas_nieve($num)
    {
        $this->numero_cadenas_nieve += $num;
    }

    function quitar_cadenas_nieve($num)
    {
        $this->numero_cadenas_nieve -= $num;
    }
}

class Camion extends dos_ruedas
{
    public $numero_puertas;
    private $remolque;

    function __construct()
    {
        parent::__construct("", 0);
        $this->remolque = 0;
    }

    function anadir_remolque($long_remolque)
    {
        $this->remolque += $long_remolque;
    }
}

// Crear instancias y realizar acciones según tus indicaciones

// Coche verde de 1400 kg
$coche = new Coche("verde", 1400);
$coche->anadir_persona(65);
$coche->anadir_persona(65);
echo "Color del coche: " . $coche->getColor() . "<br>";
echo "Peso del coche: " . $coche->getPeso() . " kg<br>";

// Repintar el coche en rojo y añadir dos cadenas para la nieve
$coche->repintar("rojo");
$coche->anadir_cadenas_nieve(2);
echo "Color del coche: " . $coche->getColor() . "<br>";
echo "Número de cadenas para la nieve: " . $coche->numero_cadenas_nieve . "<br>";

// Dos ruedas negro de 120 kg
$dosRuedas = new dos_ruedas("negro", 120);
$dosRuedas->anadir_persona(80);
$dosRuedas->poner_gasolina(20);
echo "Color de dos ruedas: " . $dosRuedas->getColor() . "<br>";
echo "Peso de dos ruedas: " . $dosRuedas->getPeso() . " kg<br>";

// Camión azul de 10000 kg y 10 metros de longitud
$camion = new Camion("azul", 10000);
$camion->anadir_remolque(5);
$camion->anadir_persona(80);
echo "Color del camión: " . $camion->getColor() . "<br>";
echo "Peso del camión: " . $camion->getPeso() . " kg<br>";
echo "Longitud del camión: " . $camion->remolque . " metros<br>";
echo "Número de puertas del camión: " . $camion->numero_puertas . "<br>";

?>
