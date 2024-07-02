<?php
include_once 'Funciones.php';

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

if (isset($_GET['dato'])) {
    $dato_recibido = $_GET['dato'];
    echo "Dato enviado: $dato_recibido";
}

if (isset($_POST["cantidad"]) && isset($_POST["tipo_moneda"])) {
    $cantidad = $_POST["cantidad"];
    $tipo_moneda = $_POST["tipo_moneda"];

    if ($cantidad < 1 || $cantidad > 20) {
        echo "<p>La cantidad de monedas debe estar entre 1 y 20.</p>";
    } else {
        echo "<h3>Resultados del lanzamiento de $cantidad monedas de $tipo_moneda:</h3>";
        for ($i = 1; $i <= $cantidad; $i++) {
            $resultado = rand(0, 1); 
            $resultado_texto = ($resultado == 0) ? "Cara" : "Cruz";
            $imagen = ($resultado == 0) ? "img/cara_$tipo_moneda.png" : "img/cruz_$tipo_moneda.png";
            echo "<p>Moneda $i: $resultado_texto <br>";
            echo "<img src='$imagen' alt='$resultado_texto' width='50'></p>";
        }
    }
}

// Verificar si se ha enviado un número desde el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número del formulario
    $numero = $_POST['numero'];

    // Calcular el cuadrado del número
    $cuadrado = $numero * $numero;

    // Mostrar el resultado
    echo "<p>El cuadrado de $numero es: $cuadrado</p>";
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Método GET</title>
</head>
<body>

<!-- Formulario con un campo de texto -->
<form action="" method="get">
    <label for="dato">Ingrese un dato:</label>
    <input type="text" name="dato" id="dato">
    <button type="submit">Enviar</button>
    
</form>


<h2>Lanzamiento de Monedas</h2>
    <form action="" method="post">
        <label for="cantidad">Número de monedas (1 - 20):</label>
        <input type="number" id="cantidad" name="cantidad" min="1" max="20" required><br><br>
        
        <label for="tipo_moneda">Tipo de moneda:</label>
        <select name="tipo_moneda" id="tipo_moneda" required>
            <option value="USD">Dólar Estadounidense</option>
            <option value="EUR">Euro</option>
            <option value="JPY">Yen japonés</option>
            <option value="GBP">Libra esterlina</option>
            <option value="CHF">Franco suizo</option>
        </select><br><br>
        
        <input type="submit" value="Lanzar Monedas">
    </form>
    <h1>Lanzamiento de Dado</h1>

<?php
// Generar un número aleatorio entre 1 y 6
$valorDado = rand(1, 6);

// Mostrar el valor del dado
echo "<p>El dado ha caído en: $valorDado</p>";

// Mostrar la imagen correspondiente al valor del dado
echo "<img src='Img/dado$valorDado.png' alt='Dado' width='200'>";
?>  


<h1>Calculadora de Cuadrados</h1>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="numero">Ingrese un número:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Calcular Cuadrado</button>
  </form>
  <?php

  // Verificar si se ha enviado un número desde el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número del formulario
    $numero = $_POST['numero'];

    // Calcular el cuadrado del número
    $cuadrado = $numero * $numero;

    // Mostrar el resultado
    echo "<p>El cuadrado de $numero es: $cuadrado</p>";
  }
  ?>  
  
  <h1>Comprobación de Dígitos</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="numero">Ingrese un número:</label>
  <input type="number" id="numero" name="numero" required>
  <button type="submit">Comprobar Dígitos</button>
</form>

<?php
// Verificar si se ha enviado un número desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener el número del formulario
  $numero = $_POST['numero'];

  // Comprobar la cantidad de dígitos
  $cantidadDigitos = strlen((string)$numero);

  // Mostrar el resultado
  if ($cantidadDigitos < 3) {
    echo "<p>El número $numero tiene menos de 3 dígitos.</p>";
  } elseif ($cantidadDigitos === 3) {
    echo "<p>El número $numero tiene 3 dígitos.</p>";
  } else {
    echo "<p>El número $numero tiene más de 3 dígitos.</p>";
  }
}
?>


<h1>Ingresar un Nombre de Usuario</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="username">Nombre de usuario:</label>
    <input type="text" name="username" id="username" required>
    <button type="submit">Enviar</button>
</form>

<?php
// Verificar si se ha enviado un nombre de usuario desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el nombre de usuario del formulario
    $nombreUsuario = $_POST['username']; // Corregido el nombre aquí

    // Establecer una cookie con el nombre de usuario
    setcookie("nombreUsuario", $nombreUsuario, time() + (86400 * 30), "/"); // La cookie expirará en 30 días

    // Mostrar un mensaje de saludo
    echo "<p>Hola, $nombreUsuario.</p>";
} else {
    // Verificar si existe la cookie
    if (isset($_COOKIE["nombreUsuario"])) {
        // Mostrar un mensaje de saludo con el nombre almacenado en la cookie
        echo "<p>Hola, " . $_COOKIE["nombreUsuario"] . ".</p>";
    }

    // Mostrar el formulario para ingresar el nombre de usuario
    echo '
    <form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">
        <label for="username">Ingrese su nombre de usuario:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Enviar</button>
    </form>';
}
?>

<h1>Contador de Vocales</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="frase">Ingrese una frase:</label>
    <textarea name="frase" id="frase" rows="4" required></textarea><br>
    <button type="submit">Contar Vocales</button>
</form>
 
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener la frase del formulario
    $frase = $_POST['frase'];

    // Convertir la frase a minúsculas para hacer la cuenta insensible a mayúsculas
    $frase = strtolower($frase);

    // Inicializar un arreglo asociativo para contar las vocales
    $contador_vocales = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];

    // Recorrer cada caracter de la frase
    for ($i = 0; $i < strlen($frase); $i++) {
        $caracter = $frase[$i];

        // Verificar si el caracter es una vocal
        if (in_array($caracter, ['a', 'e', 'i', 'o', 'u'])) {
            // Incrementar el contador de la vocal correspondiente
            $contador_vocales[$caracter]++;
        }
    }

    // Mostrar los resultados
    echo '<h2>Resultados:</h2>';
    foreach ($contador_vocales as $vocal => $contador) {
        echo "<p>La vocal '$vocal' aparece $contador veces.</p>";
    }
}
?>




</body>
</html>

