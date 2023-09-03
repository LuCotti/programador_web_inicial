<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail =
"Hola, ".$nombre_form." ".$apellido_form."!"."\r\n".
"Recibimos su solicitud y en este momento la estamos procesando."."\r\n"."\r\n".
"En cuanto tengamos novedades le enviaremos una notificación a la siguiente dirección de correo: ".$correo_form."\r\n"."\r\n".
"El mensaje recibido fue el siguiente:"."\r\n".
$mensaje_form."\r\n"."\r\n".
"Por cualquier consulta estamos a disposición. Muchas gracias por contactarse con el equipo de Linkin Park."."\r\n".
"Saludos cordiales.";

mail("$correo_form", "Registro de usuario - Linkin Park", $cuerpo_mail);

$conexion = mysqli_connect("localhost", "id20976567_lucho", "Ariel_cotto1", "id20976567_prueba") or exit ("Error al conectarse a la base de datos.");

// $conexion = mysqli_connect("localhost", "root", "", "base_de_prueba") or exit ("Error al conectarse a la base de datos.");

$query = "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form')";

$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    header("Location: contacto.php?ok");
} else {
    echo "Error en la inserción: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>