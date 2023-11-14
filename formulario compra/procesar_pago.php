<?php
// Conexión a la base de datos
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'nombre_basedatos');

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$confirmar_correo = $_POST['confirmar_correo'];
$direccion = $_POST['direccion'];
$fecha_webinar = $_POST['fecha_webinar'];

// Validar los datos, por ejemplo, comparando el correo y el correo de confirmación

// Insertar los datos en la base de datos
$sql = "INSERT INTO tabla_productos (nombre, apellido, telefono, correo, direccion, fecha_webinar) VALUES ('$nombre', '$apellido', '$telefono', '$correo', '$direccion', '$fecha_webinar')";

if ($conexion->query($sql) === TRUE) {
    // Redireccionar al usuario a la página de inicio
    header('Location: homepage.php');
} else {
    echo 'Error al procesar el pago: ' . $conexion->error;
}

$conexion->close();
?>