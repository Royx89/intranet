<h1>Agregar Cliente</h1>

<form action="?url=cliente/guardar" method="POST">
    <label>Nombre:</label><br>
    <input type="text" name="nombre_cliente" required><br><br>

    <label>Correo:</label><br>
    <input type="email" name="correo" required><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono" required><br><br>

    <button type="submit">Guardar</button>
</form>
