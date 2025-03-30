<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Cliente</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container">
        <h2 class="mb-4">Crear nuevo cliente</h2>

        <form method="POST" action="">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Nombre:</label>
                    <input type="text" name="nombre_cliente" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Fecha de nacimiento:</label>
                    <input type="date" name="fecha_nacimiento" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Sexo:</label>
                    <select name="sexo" class="form-select">
                        <option value="">Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Teléfono:</label>
                    <input type="text" name="telefono" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Correo:</label>
                    <input type="email" name="correo" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Calle:</label>
                    <input type="text" name="calle" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Colonia:</label>
                    <input type="text" name="colonia" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Ciudad:</label>
                    <input type="text" name="ciudad" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label class="form-label">Código Postal:</label>
                    <input type="text" name="codigo_postal" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Estado:</label>
                    <input type="text" name="estado" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label">País:</label>
                    <input type="text" name="pais" class="form-control">
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>

    <!-- jQuery y Bootstrap Bundle con Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery Validate -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>

    <script>
    $(document).ready(function () {
        $("form").validate({
            rules: {
                nombre_cliente: "required",
                fecha_nacimiento: "required",
                sexo: "required",
                telefono: {
                    required: true,
                    digits: true
                },
                correo: {
                    required: true,
                    email: true
                },
                calle: "required",
                colonia: "required",
                ciudad: "required",
                codigo_postal: {
                    required: true,
                    digits: true
                },
                estado: "required",
                pais: "required"
            },
            messages: {
                nombre_cliente: "Campo requerido",
                fecha_nacimiento: "Campo requerido",
                sexo: "Selecciona una opción",
                telefono: {
                    required: "Campo requerido",
                    digits: "Solo números"
                },
                correo: {
                    required: "Campo requerido",
                    email: "Correo inválido"
                },
                calle: "Campo requerido",
                colonia: "Campo requerido",
                ciudad: "Campo requerido",
                codigo_postal: {
                    required: "Campo requerido",
                    digits: "Solo números"
                },
                estado: "Campo requerido",
                pais: "Campo requerido"
            }
        });
    });
    </script>
</body>
</html>
