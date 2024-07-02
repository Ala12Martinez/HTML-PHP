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
    return("El vehiculo circula");
  }
  function repintar($color)
  {
    $this->color = $color;
  }
  function poner_gasolina($litros)
  {
    $this->peso = $this->getPeso() + $litros;
  }
  function anadir_persona($peso)
  {
    $this->peso += $peso;
  }
}

class cuatro_ruedas extends Vehiculo
{
  public $numero_puertas;
}

class dos_ruedas extends Vehiculo
{
  public $cilindrada;

}

class Coche extends cuatro_ruedas
{
  public $numero_cadenas_nieve;
  private $coche;
  function __construct($color, $peso)
  {
    $this->color = $color;
    $this->peso = $peso;
  }
  function anadir_cadenas_nieve($num)
  {
    $this->numero_cadenas_nieve = $num;
  }
  function quitar_cadenas_nieve($num)
  {
    $this->numero_cadenas_nieve -= $num;
  }
}
class Camion extends cuatro_ruedas
{
  private $camion;
  public $longitud;
  function __construct($color, $peso)
  {
    $this->color = $color;
    $this->peso = $peso;
  }
  function anadir_remolque($long_remolque)
  {
    $this->longitud += $long_remolque;
  }
}

$color = "amarillo";
$peso = "21 kg";
$obj = new Coche($color, $peso);
$recibe_color = $obj->getColor();
echo $recibe_color;
echo "<br>";
echo $obj->circula();
echo "<br>";
echo "El peso antes:" . $obj->getPeso();
$obj->peso = "25 kg";
echo "<br>";
echo "El peso despues:" . $obj->getPeso();

$peso2 = "25 kg";
$obj2 = new Vehiculo($color, $peso2);

echo "<br>Comprobando creación de mas de un objeto";
echo "<br>";
echo "El peso objeto 1 es:" . $obj->getPeso();
echo "<br>";
echo "El peso objeto 2 es :" . $obj2->getPeso();

echo "<br>";
echo $obj->getColor();
echo "<br>";
$obj->repintar('azulMorado');
echo "Repintar: " . $obj->getColor();
echo "<br>";
echo $obj->getPeso();
echo "<br>";
echo $obj->poner_gasolina(10);
echo "Poner gasolina: " . $obj->getPeso() . "kg";
echo "<br>";
$obj->anadir_cadenas_nieve(10);
echo "Cadenas nieve: " . $obj->numero_cadenas_nieve;
echo "<br>";
$obj->quitar_cadenas_nieve(4);
echo "Elimnar Cadenas nieve: " . $obj->numero_cadenas_nieve;
echo "<br>";

$camion = new Camion("gray", 125);
$camion->longitud = 4;
echo "Longitud: " . $camion->longitud;
echo "<br>";
$camion->anadir_remolque(16);
echo "Agregar longitud: " . $camion->longitud;
?>