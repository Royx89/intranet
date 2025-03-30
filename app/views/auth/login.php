<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <h2 class="text-center mb-4">Iniciar sesión</h2>

            <?php if (isset($error)) : ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>

            <form method="POST" action="?url=usuario/login" id="formLogin">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario:</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña:</label>
                    <input type="password" name="contrasena" id="contrasena" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Ingresar</button>
                <a href="?url=usuario/registrar" class="btn btn-link w-100 mt-2">¿No tienes cuenta? Regístrate aquí</a>
            </form>
        </div>
    </div>
</div>

<!-- jQuery y Validación -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {
        $("#formLogin").validate();
    });
</script>
</body>
</html>
