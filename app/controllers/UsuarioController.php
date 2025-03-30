<?php
class UsuarioController extends Controller {

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
    
            $usuarioModel = $this->model('Usuario');
            $datosUsuario = $usuarioModel->obtenerPorUsuario($usuario);
    
            if ($datosUsuario) {
                $hashAlmacenado = trim($datosUsuario['contrasena']);
    
                if (password_verify($contrasena, $hashAlmacenado)) {
                    $_SESSION['usuario'] = $datosUsuario;
                    header('Location: /intranet/public/?url=home/index');
                    exit;
                }
            }
    
            $error = "Credenciales incorrectas";
            $this->view('auth/login', ['error' => $error]);
            return;
        }
    
        $this->view('auth/login');
    }
    
    public function registrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre_usuario']);
            $usuario = trim($_POST['usuario']);
            $contrasena = password_hash(trim($_POST['contrasena']), PASSWORD_DEFAULT);

            $modelo = $this->model('Usuario');
            $existe = $modelo->obtenerPorUsuario($usuario);

            if ($existe) {
                $error = "Ese nombre de usuario ya existe.";
                $this->view('auth/register', ['error' => $error]);
                return;
            }

            $exito = $modelo->registrar([
                'nombre_usuario' => $nombre,
                'usuario' => $usuario,
                'contrasena' => $contrasena
            ]);

            if ($exito) {
                header('Location: ?url=usuario/login');
                exit;
            } else {
                $error = "Ocurrió un error al registrar.";
                $this->view('auth/register', ['error' => $error]);
            }
        } else {
            $this->view('auth/register');
        }
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_destroy();
        header('Location: ?url=usuario/login');
        exit;
    }

    public function index() {
        $modelo = $this->model('Usuario');
        $usuarios = $modelo->obtenerTodos();
        $this->view('usuarios/index', ['usuarios' => $usuarios]);
    }
    
    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre_usuario']);
            $usuario = trim($_POST['usuario']);
            $contrasena = password_hash(trim($_POST['contrasena']), PASSWORD_DEFAULT);
    
            $modelo = $this->model('Usuario');
            $existe = $modelo->obtenerPorUsuario($usuario);
    
            if ($existe) {
                $error = "Ese nombre de usuario ya existe.";
                $this->view('usuarios/crear', ['error' => $error]);
                return;
            }
    
            $exito = $modelo->registrar([
                'nombre_usuario' => $nombre,
                'usuario' => $usuario,
                'contrasena' => $contrasena
            ]);
    
            if ($exito) {
                header('Location: ?url=usuario/index');
                exit;
            } else {
                $error = "Ocurrió un error al guardar.";
                $this->view('usuarios/crear', ['error' => $error]);
            }
        } else {
            $this->view('usuarios/crear');
        }
    }
    
    public function editar($id) {
        $modelo = $this->model('Usuario');
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $datos = [
                'id_usuario' => $id,
                'nombre_usuario' => $_POST['nombre_usuario'],
                'usuario' => $_POST['usuario']
            ];
    
            if (!empty($_POST['contrasena'])) {
                $datos['contrasena'] = password_hash(trim($_POST['contrasena']), PASSWORD_DEFAULT);
            } else {
                $datos['contrasena'] = null;
            }
    
            $modelo->actualizar($datos);
            header('Location: ?url=usuario/index');
            exit;
        }
    
        $usuario = $modelo->obtenerPorId($id);
        $this->view('usuarios/editar', ['usuario' => $usuario]);
    }
    
    public function eliminar($id) {
        $modelo = $this->model('Usuario');
        $modelo->eliminar($id);
        header('Location: ?url=usuario/index');
        exit;
    }
    
    
    
    
}
