<nav class="navbar navbar-light bg-light px-4 mb-4">
    <span class="navbar-brand mb-0 h1">Intranet Empresarial</span>

    <?php if (isset($_SESSION['usuario'])): ?>
        <div>
            <strong><?= $_SESSION['usuario']['nombre_usuario'] ?></strong>
            <a href="?url=usuario/logout" class="btn btn-sm btn-outline-danger ms-2">Cerrar sesión</a>
        </div>
    <?php endif; ?>
</nav>
