<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Lista de Clientes</h1>

    <a href="?url=cliente/crear" class="btn btn-success mb-3">+ Crear Cliente</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($clientes) && is_array($clientes) && count($clientes) > 0): ?>
                    <?php foreach($clientes as $cliente): ?>
                        <tr>
                            <td><?= $cliente['id_cliente'] ?></td>
                            <td><?= $cliente['nombre_cliente'] ?></td>
                            <td><?= $cliente['correo'] ?></td>
                            <td><?= $cliente['telefono'] ?></td>
                            <td>
                                <a href="?url=cliente/editar/<?= $cliente['id_cliente'] ?>" class="btn btn-sm btn-primary">Editar</a>
                                <a href="?url=cliente/eliminar/<?= $cliente['id_cliente'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este cliente?')">Eliminar</a>
                                <a href="?url=cliente/ver/<?= $cliente['id_cliente'] ?>" class="btn btn-info btn-sm">Ver</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">No hay clientes para mostrar.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
