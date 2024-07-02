<?php

function calcular_media($array)
{
    $sum = array_sum($array);  
    $count = count($array);    
    $media = $sum / $count;     

    echo "La media de los valores en el array es: $media";
}

function imprimir_array($array)
{
    echo "<table>
            <tr><th>Posición</th><th>Valor</th></tr>";

    foreach ($array as $posicion => $valor) {
        echo "<tr><td>$posicion</td><td>$valor</td></tr>";
    }

    echo "</table>";
}

function multiplicar($argumento)
{
    echo "<table>  
             <tr><td>1*$argumento= " . $resultado = 1 * $argumento . " </td></tr>
             <tr><td>2*$argumento= " . $resultado = 2 * $argumento . " </td></tr> 
             <tr><td>3*$argumento= " . $resultado = 3 * $argumento . " </td></tr> 
             <tr><td>4*$argumento= " . $resultado = 4 * $argumento . " </td></tr> 
             <tr><td>5*$argumento= " . $resultado = 5 * $argumento . " </td></tr> 
             <tr><td>6*$argumento= " . $resultado = 6 * $argumento . " </td></tr> 
             <tr><td>7*$argumento= " . $resultado = 7 * $argumento . " </td></tr> 
             <tr><td>8*$argumento= " . $resultado = 8 * $argumento . " </td></tr> 
             <tr><td>9*$argumento= " . $resultado = 9 * $argumento . " </td></tr>
        </table>";
}

function multiplicar2($inicio, $fin)
{
    for ($i = $inicio; $i <= $fin; $i++) {
        multiplicar($i);
    }
}
if (isset($_GET['dato'])) 
    $dato_recibido = $_GET['dato'];
    echo "Dato enviado: $dato_recibido";


?>

<!-- Formulario con un campo de texto -->
<form action="" method="get">
    <label for="dato">Ingrese un dato:</label>
    <input type="text" name="dato" id="dato">
    <button type="submit">Enviar</button>
</form>
