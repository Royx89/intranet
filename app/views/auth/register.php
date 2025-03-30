<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
    <h2 class="mb-4 text-center">Registro</h2>

    <?php if (isset($error)) : ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" action="?url=usuario/registrar" id="formRegistro">
        <div class="mb-3">
            <label for="nombre_usuario" class="form-label">Nombre completo:</label>
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

        <button type="submit" class="btn btn-success w-100">Registrarse</button>
        <a href="?url=usuario/login" class="btn btn-link w-100 mt-2">¿Ya tienes cuenta? Inicia sesión</a>
    </form>
</div>

<!-- jQuery y validación -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
<script>
    $(document).ready(function () {
        $("#formRegistro").validate({
            rules: {
                nombre_usuario: "required",
                usuario: "required",
                contrasena: {
                    required: true,
                    minlength: 6
                }
            },
            messages: {
                nombre_usuario: "Campo requerido",
                usuario: "Campo requerido",
                contrasena: {
                    required: "Campo requerido",
                    minlength: "Mínimo 6 caracteres"
                }
            }
        });
    });
</script>

</body>
</html>
