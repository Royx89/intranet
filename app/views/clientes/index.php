<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">

</head>
<body class="bg-light">

    <?php include __DIR__ . '/../layout/header.php'; ?>

    <h1 class="mb-4">Lista de Clientes</h1>

    <a href="?url=cliente/crear" class="btn btn-success mb-3">+ Crear Cliente</a>

    <form id="filtros" class="row mb-4">
        <div class="col-md-12 mb-3">
            <label>Buscar por nombre:</label>
            <input type="text" id="filtro_nombre" class="form-control" placeholder="Escribe un nombre...">
        </div>

        <div class="col-md-4">
            <label>Sexo:</label>
            <select name="sexo" id="filtro_sexo" class="form-control">
                <option value="">Todos</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="col-md-4">
            <label>Estado:</label>
            <input type="text" name="estado" id="filtro_estado" class="form-control" placeholder="Ej. Nayarit">
        </div>
        <div class="col-md-4">
            <label>País:</label>
            <input type="text" name="pais" id="filtro_pais" class="form-control" placeholder="Ej. México">
        </div>
    </form>

    <div class="table-responsive">
        <table id="tablaClientes" class="table table-bordered table-hover text-center">
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
                <?php if (!empty($clientes)): ?>
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
                    <tr><td colspan="5" class="text-center">No hay clientes para mostrar.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Scripts jQuery, Bootstrap, DataTables, jQuery UI -->
let tabla = $('#tablaClientes').DataTable({
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
    },
    dom: 'Bfrtip',
    buttons: [
        { extend: 'copy', className: 'btn btn-secondary' },
        { extend: 'csv', className: 'btn btn-info' },
        { extend: 'excel', className: 'btn btn-success' },
        { extend: 'pdf', className: 'btn btn-danger' },
        { extend: 'print', className: 'btn btn-primary' }
    ]
});

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

<script>
$(document).ready(function () {
    let tabla = $('#tablaClientes').DataTable({
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
        }
    });

    function aplicarFiltros() {
        let nombre = $('#filtro_nombre').val();
        let sexo = $('#filtro_sexo').val();
        let estado = $('#filtro_estado').val();
        let pais = $('#filtro_pais').val();

        $.ajax({
            url: '?url=cliente/filtrar',
            type: 'GET',
            data: { nombre, sexo, estado, pais },
            dataType: 'json',
            success: function (datos) {
                tabla.clear().draw();
                datos.forEach(function (cliente) {
                    tabla.row.add([
                        cliente.id_cliente,
                        cliente.nombre_cliente,
                        cliente.correo,
                        cliente.telefono,
                        `<a href="?url=cliente/editar/${cliente.id_cliente}" class="btn btn-sm btn-primary">Editar</a>
                         <a href="?url=cliente/eliminar/${cliente.id_cliente}" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres eliminar?')">Eliminar</a>
                         <a href="?url=cliente/ver/${cliente.id_cliente}" class="btn btn-info btn-sm">Ver</a>`
                    ]).draw(false);
                });
            }
        });
    }

    $("#filtro_nombre").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "?url=cliente/autocomplete",
                data: { term: request.term },
                dataType: "json",
                success: function (data) {
                    response(data);
                }
            });
        },
        minLength: 2,
        select: function (event, ui) {
            $('#filtro_nombre').val(ui.item.label);
            aplicarFiltros();
        }
    });

    $('#filtro_nombre, #filtro_sexo, #filtro_estado, #filtro_pais').on('change keyup', aplicarFiltros);
});
</script>
<!-- Dependencias de exportación + Bootstrap 5 -->
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

</body>
</html>
