<form method="post" action="procesar_pago.php">
    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    
    <label>Apellido:</label>
    <input type="text" name="apellido" required>
    
    <label>Teléfono:</label>
    <input type="tel" name="telefono" required>
    
    <label>Correo:</label>
    <input type="email" name="correo" required>
    
    <label>Confirmación de Correo:</label>
    <input type="email" name="confirmar_correo" required>
    
    <label>Dirección:</label>
    <input type="text" name="direccion" required>
    
    <label>Fecha para el Webinar:</label>
    <input type="date" name="fecha_webinar" required>
    
    <input type="submit" value="Pagar">
</form>
