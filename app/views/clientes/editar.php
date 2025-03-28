<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Editar Cliente</h2>

    <form method="POST">
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre_cliente" class="form-control" value="<?= $cliente['nombre_cliente'] ?>">
        </div>
        <div class="form-group">
            <label>Fecha de Nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control" value="<?= $cliente['fecha_nacimiento'] ?>">
        </div>
        <div class="form-group">
            <label>Sexo:</label>
            <input type="text" name="sexo" class="form-control" value="<?= $cliente['sexo'] ?>">
        </div>
        <div class="form-group">
            <label>Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="<?= $cliente['telefono'] ?>">
        </div>
        <div class="form-group">
            <label>Correo:</label>
            <input type="email" name="correo" class="form-control" value="<?= $cliente['correo'] ?>">
        </div>
        <div class="form-group">
            <label>Calle:</label>
            <input type="text" name="calle" class="form-control" value="<?= $cliente['calle'] ?>">
        </div>
        <div class="form-group">
            <label>Colonia:</label>
            <input type="text" name="colonia" class="form-control" value="<?= $cliente['colonia'] ?>">
        </div>
        <div class="form-group">
            <label>Ciudad:</label>
            <input type="text" name="ciudad" class="form-control" value="<?= $cliente['ciudad'] ?>">
        </div>
        <div class="form-group">
            <label>Código Postal:</label>
            <input type="text" name="codigo_postal" class="form-control" value="<?= $cliente['codigo_postal'] ?>">
        </div>
        <div class="form-group">
            <label>Estado:</label>
            <input type="text" name="estado" class="form-control" value="<?= $cliente['estado'] ?>">
        </div>
        <div class="form-group">
            <label>País:</label>
            <input type="text" name="pais" class="form-control" value="<?= $cliente['pais'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="?url=cliente/index" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
