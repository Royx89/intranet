<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
    <h2 class="mb-4">Crear Nuevo Usuario</h2>

    <?php if (isset($error)) : ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" action="?url=usuario/crear">
        <div class="mb-3">
            <label for="nombre_usuario" class="form-label">Nombre:</label>
            <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario:</label>
            <input type="text" name="usuario" id="usuario" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="contrasena" class="form-label">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="?url=usuario/index" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
