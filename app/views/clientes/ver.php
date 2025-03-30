<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Cliente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Detalle del Cliente</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> <?= $cliente['nombre_cliente'] ?></p>
            <p><strong>Fecha de nacimiento:</strong> <?= $cliente['fecha_nacimiento'] ?></p>
            <p><strong>Sexo:</strong> <?= $cliente['sexo'] ?></p>
            <p><strong>Teléfono:</strong> <?= $cliente['telefono'] ?></p>
            <p><strong>Correo:</strong> <?= $cliente['correo'] ?></p>
            <p><strong>Calle:</strong> <?= $cliente['calle'] ?></p>
            <p><strong>Colonia:</strong> <?= $cliente['colonia'] ?></p>
            <p><strong>Ciudad:</strong> <?= $cliente['ciudad'] ?></p>
            <p><strong>Código Postal:</strong> <?= $cliente['codigo_postal'] ?></p>
            <p><strong>Estado:</strong> <?= $cliente['estado'] ?></p>
            <p><strong>País:</strong> <?= $cliente['pais'] ?></p>
            <p><strong>Fecha de creación:</strong> <?= $cliente['fecha_creacion'] ?></p>
            <p><strong>Fecha de modificación:</strong> <?= $cliente['fecha_modificacion'] ?></p>
            <p><strong>Creado por:</strong> <?= $cliente['creado_por'] ?></p>
        </div>
    </div>


    <div class="d-flex justify-content-between align-items-center mt-4">
    <a href="?url=cliente/index" class="btn btn-secondary">Volver</a>
    <div class="d-flex gap-2">
        <a href="?url=cliente/editar/<?= $cliente['id_cliente'] ?>" class="btn btn-warning">Editar</a>
        <a href="?url=cliente/eliminar/<?= $cliente['id_cliente'] ?>" class="btn btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este cliente?')">Eliminar</a>
        <button onclick="window.print()" class="btn btn-outline-primary">🖨 Imprimir</button>
    </div>
</div>


    
</div>

</body>
</html>
