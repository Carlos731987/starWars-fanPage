<?php

$nombre_form = $_POST['nombre'];
$fecha_form = $_POST['fecha-nacimiento'];
$email_form = $_POST['email'];
$usuario_form = $_POST['usuario'];
$favorito_form = $_POST['favorito'];
$ubicacion_form = $_POST['ubicacion'];
$comentario_form = $_POST['comentario'];

$conexion = mysqli_connect('sql212.infinityfree.com','if0_38368592','kcJ7xbOb4mED', 'if0_38368592_comunidadstarwars') or exit("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO comunidad_fans VALUES (DEFAULT,'$nombre_form', '$fecha_form', '$email_form', '$usuario_form', '$favorito_form', '$ubicacion_form', '$comentario_form')");

mysqli_close($conexion);

header("Location:comunidad.php?mensaje=ok");

?>
