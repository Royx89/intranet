<?php
class AuthController extends Controller {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];

            $modelo = $this->model('Usuario');
            $user = $modelo->obtenerPorUsuario($usuario);

            // 🧪 Agrega esto para depurar
            echo '<pre>';
            print_r($user);
            echo '</pre>';

            echo 'Contraseña ingresada: ' . $contrasena . '<br>';
            echo 'Hash en base de datos: ' . $user['contrasena'] . '<br>';

            if ($user && password_verify($contrasena, $user['contrasena'])) {
                session_start();
                $_SESSION['usuario'] = $user;
                echo "Sesión iniciada correctamente. ¡Bienvenido, " . $user['nombre_usuario'] . "!";
            } else {
                echo "Usuario o contraseña incorrectos.";
            }
        } else {
            $this->view('auth/login');
        }
    }
}
