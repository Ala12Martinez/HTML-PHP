<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <?php 
        if(isset($_GET["bool"])){
                echo "
                <div class='alert alert-success' role='alert'>
                    Gracias por contactarnos, pronto nos comunicaremos!
                </div>
                ";
        }
        ?>
        <h2 class="h2">Formulario</h2>
        <form class="row g-3" method="POST" action="procesar.php">
            <div class="col-md-4">
                <label class="form-label" for="nombre">Nombre y Apellidos:</label><br>
                <input class="form-control" type="text" id="nombre" name="nombre" required>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="direccion">Dirección:</label><br>
                <input class="form-control" type="text" id="direccion" name="direccion" required>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="ciudad">Ciudad:</label><br>
                <input class="form-control" type="text" id="ciudad" name="ciudad" required>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="provincia">Entidad federativa:</label><br>
                <select class="form-select" id="provincia" name="provincia" required>
                    <?php include 'estados.php'; ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="codigo_postal">Código Postal:</label><br>
                <input class="form-control" type="text" id="codigo_postal" name="codigo_postal" required>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="telefono">Teléfono:</label><br>
                <input class="form-control" type="text" id="telefono" name="telefono" required>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="email">Email:</label><br>
                <input class="form-control" type="email" id="email" name="email" required>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="password">Contraseña:</label><br>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="web">Página Web:</label><br>
                <input class="form-control" type="url" id="web" name="web" required>
            </div>
            
            <input class="btn btn-primary center" type="submit" value="Enviar Datos">
            

            
        </form>
    </div>

</body>
</html>
