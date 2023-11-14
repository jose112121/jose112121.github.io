<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $fecha = $_POST["fecha"];

    // Aquí puedes realizar cualquier acción que necesites con los datos, como procesar un pago o almacenarlos en una base de datos.

    // Por ejemplo, puedes redirigir al usuario a una página de confirmación:
    header("Location: confirmacion.php");
}
?>
