<?php

include 'Problema.php';
include 'Problema2.php';
include 'Problema3.php';

class CabeceraPagina {
    
    private $titulo;
    private $alineacion;
    private $colorFondo;
    private $colorFuente;
    
    public function __construct($titulo, $alineacion, $colorFondo, $colorFuente) {
        $this->titulo = $titulo;
        $this->alineacion = $alineacion;
        $this->colorFondo = $colorFondo;
        $this->colorFuente = $colorFuente;
    }
    
    public function mostrarCabecera() {
        echo '<div style="background-color: ' . $this->colorFondo . '; color: ' . $this->colorFuente . '; text-align: ' . $this->alineacion . '">';
        echo '<h1>' . $this->titulo . '</h1>';
        echo '</div>';
    }
}

$cabecera = new CabeceraPagina("Título de la Página", "center", "#f0f0f0", "#333");
$cabecera->mostrarCabecera();

?>
