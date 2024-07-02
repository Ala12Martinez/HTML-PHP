<?php
function validarNombreApellidos($nombreApellidos) {
    if (preg_match('/[0-9]/', $nombreApellidos)) {
        return "El nombre y apellidos no pueden contener números.";
    }
    return "";
}

function validarCiudad($ciudad) {
    if (preg_match('/[0-9]/', $ciudad)) {
        return "La ciudad no puede contener números.";
    }
    return "";
}

function validarTelefono($telefono) {
    if (preg_match('/[a-zA-Z]/', $telefono)) {
        return "El teléfono no puede contener letras.";
    }
    return "";
}

function validarLongitudTelefono($telefono) {
    if (strlen($telefono) > 10) {
        return "El teléfono no puede tener más de 10 dígitos.";
    }
    return "";
}

function validarCodigoPostal($codigoPostal) {
    if (preg_match('/[a-zA-Z]/', $codigoPostal)) {
        return "El código postal no puede contener letras.";
    }
    return "";
}

// function validarLongitudCodigoPostal($codigoPostal) {
//     $tamanio = strlen($codigoPostal);
//     if($tamanio < 5){
//         return "El código postal debe contener 5 numeros.";
//     }
//     return lidarCodigoPostalProvincia($codigoPostal, $provincia) {

//     // $codigosPostales = array(
//     //     "20000" => "Aguascalientes",
//     //     "21000" => "Baja California",
//     //     "23000" => "Baja California Sur",
//     //     "24000" => "Campeche",
//     //     "29000" => "Chiapas",
//     //     "31000" => "Chihuahua",
//     //     "01000" => "Ciudad de Mexico",
//     //     "25000" => "Coahuila",
//     //     "28000" => "Colima",
//     //     "34000" => "Durango",
//     //     "50000" => "Estado de Mexico",
//     //     "36000" => "Guanajuato",
//     //     "39000" => "Guerrero",
//     //     "42000" => "Hidalgo",
//     //     "44100" => "Jalisco",
//     //     "58000" => "Michoacan",
//     //     "62000" => "Morelos",
//     //     "63000" => "Nayarit",
//     //     "64000" => "Nuevo Leon",
//     //     "68000" => "Oaxaca",
//     //     "72000" => "Puebla",
//     //     "76000" => "Queretaro",
//     //     "77000" => "Quintana Roo",
//     //     "78000" => "San Luis Potosi",
//     //     "80000" => "Sinaloa",
//     //     "83000" => "Sonora",
//     //     "86000" => "Tabasco",
//     //     "87000" => "Tamaulipas",
//     //     "90000" => "Tlaxcala",
//     //     "91000" => "Veracruz",
//     //     "97000" => "Yucatan",
//     //     "98000" => "Zacatecas",
//     // );
//     // }

//     //$InicialCodPostal = substr($codigoPostal, 0, 2);

//     // if (isset($codigosPostales[$codigoPostal]) && $codigosPostales[$codigoPostal] != $provincia) {
//     //     return "El código postal no coincide con la provincia seleccionada.";
//     // }

//     return "";
// }

function validarEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "El email no es válido";
    }
    return "";
}

function validarPassword($password) {
    $errores = [];

    if (strlen($password) < 8 || strlen($password) > 16) {
        $errores[] = "La contraseña debe tener entre 8 y 16 caracteres.";
    }

    if (!preg_match('/\d/', $password)) {
        $errores[] = "La contraseña debe contener al menos un número.";
    }

    if (!preg_match('/[A-Z]/', $password)) {
        $errores[] = "La contraseña debe contener al menos una letra mayúscula.";
    }

    if (!preg_match('/[a-z]/', $password)) {
        $errores[] = "La contraseña debe contener al menos una letra minúscula.";
    }

    if (!preg_match('/[\W_]/', $password)) {
        $errores[] = "La contraseña debe contener al menos un caracter especial.";
    }

    return $errores;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST["password"];
    $errores = validarPassword($password);

    if (count($errores) > 0) {
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "La contraseña es válida.";
    }
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreApellidos = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    $provincia = $_POST["provincia"];
    $codigoPostal = $_POST["codigo_postal"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $web = $_POST["web"];

    $errores = [];
    $errores[] = validarNombreApellidos($nombreApellidos);
    $errores[] = validarCiudad($ciudad);
    $errores[] = validarTelefono($telefono);
    $errores[] = validarLongitudTelefono($telefono);
    $errores[] = validarCodigoPostal($codigoPostal);
    //$errores[] = validarLongitudCodigoPostal($codigoPostal);
    //$errores[] = validarCodigoPostalProvincia($codigoPostal, $provincia);
    $errores[] = validarEmail($email);
    $errores[] = validarPassword($password);

    foreach ($errores as $error) {
        if (!empty($error)) {
            echo "<p>Error: $error</p>";
        }else{
            header ("Location: http://localhost/ACT13 CLIENTESERVIDOR/ACT13/Formulario.php?bool=true");
        }
    }
}
?>