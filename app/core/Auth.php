<?php

function isAuthenticated() {
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    return isset($_SESSION['usuario']);
}

function requireLogin() {
    if (!isAuthenticated()) {
        header('Location: /intranet/public/?url=usuario/login');
        exit;
    }
}
