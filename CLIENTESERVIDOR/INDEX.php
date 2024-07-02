<?php
session_start();

if (!isset($_SESSION['randomNumber'])) {
    $_SESSION['randomNumber'] = rand(1, 10);
    $_SESSION['attempts'] = 0;
}

if (isset($_GET['guess'])) {
    $userGuess = $_GET['guess'];
    $randomNumber = $_SESSION['randomNumber'];
    $attempts = $_SESSION['attempts'];

    echo "Intento: $attempts <br>";

    if ($userGuess < $randomNumber) {
        echo "El número es mayor.<br>";
    } elseif ($userGuess > $randomNumber) {
        echo "El número es menor.<br>";
    } else {
        echo "¡Felicidades! Has adivinado el número en $attempts intentos.<br>";
        echo "<form name='form1' method='get'>
                <input type='submit' name='reset' value='Jugar de nuevo'>
              </form>";
        session_unset(); // Limpiar las variables de sesión
        session_destroy(); // Destruir la sesión
        exit();
    }
    $_SESSION['attempts']++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el número</title>
</head>
<body>
    <!-- Formulario para ingresar el número -->
    <form name="form1" method="get" style="text-align: center;">
        <p>Ingresa tu número</p>
        <input type="text" name="guess">
        <input type="submit">
    </form>
    
    <?php
    // Reiniciar el juego si se hace clic en "Jugar de nuevo"
    if (isset($_GET['reset'])) {
        session_unset(); // Limpiar las variables de sesión
        session_destroy(); // Destruir la sesión
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
    ?>
</body>
</html>
