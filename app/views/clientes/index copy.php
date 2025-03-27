<h1>Lista de Clientes</h1>
<?php var_dump($clientes); ?>
<?php
    echo '<pre>';
    print_r($clientes);
    echo '</pre>';
?>

<table border="1" cellpadding="10">
    <thead>
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
                    <td><a href="?url=cliente/editar/<?= $cliente['id_cliente'] ?>">Editar</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No hay clientes para mostrar.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
