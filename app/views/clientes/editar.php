<h1>Editar Cliente</h1>

<form method="POST">
    <label>Nombre:</label>
    <input type="text" name="nombre_cliente" value="<?= $cliente['nombre_cliente'] ?>" required><br>

    <label>Fecha de Nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="<?= $cliente['fecha_nacimiento'] ?>" required><br>

    <label>Sexo:</label>
    <input type="text" name="sexo" value="<?= $cliente['sexo'] ?>" required><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="<?= $cliente['telefono'] ?>" required><br>

    <label>Correo:</label>
    <input type="email" name="correo" value="<?= $cliente['correo'] ?>" required><br>

    <label>Calle:</label>
    <input type="text" name="calle" value="<?= $cliente['calle'] ?>"><br>

    <label>Colonia:</label>
    <input type="text" name="colonia" value="<?= $cliente['colonia'] ?>"><br>

    <label>Ciudad:</label>
    <input type="text" name="ciudad" value="<?= $cliente['ciudad'] ?>"><br>

    <label>Código Postal:</label>
    <input type="text" name="codigo_postal" value="<?= $cliente['codigo_postal'] ?>"><br>

    <label>Estado:</label>
    <input type="text" name="estado" value="<?= $cliente['estado'] ?>"><br>

    <label>País:</label>
    <input type="text" name="pais" value="<?= $cliente['pais'] ?>"><br><br>

    <button type="submit">Actualizar</button>
</form>

