<?php
if (!isset($cliente)) {
    echo "<div class='alert alert-danger'>No se encontró el cliente.</div>";
    return;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
    <h2 class="mb-4">Editar cliente</h2>

    <form method="POST" action="">
        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Nombre:</label>
                <input type="text" name="nombre_cliente" class="form-control" value="<?= htmlspecialchars($cliente['nombre_cliente']) ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control" value="<?= htmlspecialchars($cliente['fecha_nacimiento']) ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Sexo:</label>
                <select name="sexo" class="form-select">
                    <option value="">Seleccione</option>
                    <option value="Masculino" <?= $cliente['sexo'] === 'Masculino' ? 'selected' : '' ?>>Masculino</option>
                    <option value="Femenino" <?= $cliente['sexo'] === 'Femenino' ? 'selected' : '' ?>>Femenino</option>
                    <option value="Otro" <?= $cliente['sexo'] === 'Otro' ? 'selected' : '' ?>>Otro</option>
                </select>
            </div>
            <div class="col-md-6">
                <label class="form-label">Teléfono:</label>
                <input type="text" name="telefono" class="form-control" value="<?= htmlspecialchars($cliente['telefono']) ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Correo:</label>
                <input type="email" name="correo" class="form-control" value="<?= htmlspecialchars($cliente['correo']) ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Calle:</label>
                <input type="text" name="calle" class="form-control" value="<?= htmlspecialchars($cliente['calle']) ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Colonia:</label>
                <input type="text" name="colonia" class="form-control" value="<?= htmlspecialchars($cliente['colonia']) ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Ciudad:</label>
                <input type="text" name="ciudad" class="form-control" value="<?= htmlspecialchars($cliente['ciudad']) ?>">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Código Postal:</label>
                <input type="text" name="codigo_postal" class="form-control" value="<?= htmlspecialchars($cliente['codigo_postal']) ?>">
            </div>
            <div class="col-md-4">
                <label class="form-label">Estado:</label>
                <input type="text" name="estado" class="form-control" value="<?= htmlspecialchars($cliente['estado']) ?>">
            </div>
            <div class="col-md-4">
                <label class="form-label">País:</label>
                <input type="text" name="pais" class="form-control" value="<?= htmlspecialchars($cliente['pais']) ?>">
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
