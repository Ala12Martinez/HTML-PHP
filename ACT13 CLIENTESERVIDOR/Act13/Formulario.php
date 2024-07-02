<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>

    <?php 

    if(isset($_GET["bool"])){
            echo "<h1> Gracias por contactarnos, pronto nos comunicaremos </h1>";
    }
    ?>

    <h2>Formulario</h2>

    <form method="POST" action="procesar.php">
        <label for="nombre">Nombre y Apellidos:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="direccion">Dirección:</label><br>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="ciudad">Ciudad:</label><br>
        <input type="text" id="ciudad" name="ciudad" required><br><br>

        <label for="provincia">Entidad federativa:</label><br>
        <select id="provincia" name="provincia" required>
            <?php include 'estados.php'; ?>
        </select><br><br>

        <label for="codigo_postal">Código Postal:</label><br>
        <input type="text" id="codigo_postal" name="codigo_postal" required><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" name="password" placeholder="Ingrese su contraseña">
        
        <label for="web">Página Web:</label><br>
        <input type="url" id="web" name="web" required><br><br>

        <input type="submit" value="Enviar Datos">
    </form>
</body>
</html>