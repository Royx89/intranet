<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Lista de Usuarios</h1>
    <a href="?url=usuario/crear" class="btn btn-success mb-3">+ Crear Usuario</a>

    <table class="table table-bordered table-hover text-center">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($usuarios)): ?>
                <?php foreach($usuarios as $usuario): ?>
                    <tr>
                        <td><?= $usuario['id_usuario'] ?></td>
                        <td><?= $usuario['nombre_usuario'] ?></td>
                        <td><?= $usuario['usuario'] ?></td>
                        
                        <td>
                            <a href="?url=usuario/editar/<?= $usuario['id_usuario'] ?>" class="btn btn-sm btn-primary">Editar</a>
                            <a href="?url=usuario/eliminar/<?= $usuario['id_usuario'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que quieres eliminarlo?')">Eliminar</a>
                            <a href="?url=cliente/misclientes/<?= $usuario['id_usuario'] ?>" class="btn btn-sm btn-secondary">Clientes</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">No hay usuarios disponibles.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>


</body>
</html>
