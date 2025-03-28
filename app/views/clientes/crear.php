<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-4">
    <h2>Editar Cliente</h2>
    <form method="post">
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre_cliente" value="<?= htmlspecialchars($cliente['nombre_cliente'] ?? '') ?>" class="form-control">
        </div>

        <div class="form-group">
            <label>Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control">
        </div>

        <div class="form-group">
            <label>Sexo:</label>
            <input type="text" name="sexo" class="form-control">
        </div>

        <div class="form-group">
            <label>Teléfono:</label>
            <input type="text" name="telefono" class="form-control">
        </div>

        <div class="form-group">
            <label>Correo:</label>
            <input type="email" name="correo" class="form-control">
        </div>

        <div class="form-group">
            <label>Calle:</label>
            <input type="text" name="calle" class="form-control">
        </div>

        <div class="form-group">
            <label>Colonia:</label>
            <input type="text" name="colonia" class="form-control">
        </div>

        <div class="form-group">
            <label>Ciudad:</label>
            <input type="text" name="ciudad" class="form-control">
        </div>

        <div class="form-group">
            <label>Código Postal:</label>
            <input type="text" name="codigo_postal" class="form-control">
        </div>

        <div class="form-group">
            <label>Estado:</label>
            <input type="text" name="estado" class="form-control">
        </div>

        <div class="form-group">
            <label>País:</label>
            <input type="text" name="pais" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="?url=cliente/index" class="btn btn-secondary ml-2">Cancelar</a>
    </form>
</div>

<!-- Scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
