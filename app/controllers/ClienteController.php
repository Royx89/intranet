<?php
class ClienteController extends Controller {
    public function index() {
        $modelo = $this->model('Cliente');
        $clientes = $modelo->obtenerTodos();
        $this->view('clientes/index', ['clientes' => $clientes]);
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre_cliente' => $_POST['nombre_cliente'],
                'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                'sexo' => $_POST['sexo'],
                'telefono' => $_POST['telefono'],
                'correo' => $_POST['correo'],
                'calle' => $_POST['calle'],
                'colonia' => $_POST['colonia'],
                'ciudad' => $_POST['ciudad'],
                'codigo_postal' => $_POST['codigo_postal'],
                'estado' => $_POST['estado'],
                'pais' => $_POST['pais'],
                'creado_por' => $_SESSION['usuario']['id_usuario'] ?? 1
            ];

            $modelo = $this->model('Cliente');
            $modelo->insertar($data);

            header('Location: ?url=cliente/index');
            exit;
        }

        $this->view('clientes/crear');
    }

    public function editar($id) {
        $modelo = $this->model('Cliente');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id_cliente' => $id,
                'nombre_cliente' => $_POST['nombre_cliente'],
                'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                'sexo' => $_POST['sexo'],
                'telefono' => $_POST['telefono'],
                'correo' => $_POST['correo'],
                'calle' => $_POST['calle'],
                'colonia' => $_POST['colonia'],
                'ciudad' => $_POST['ciudad'],
                'codigo_postal' => $_POST['codigo_postal'],
                'estado' => $_POST['estado'],
                'pais' => $_POST['pais']
            ];

            $modelo->actualizar($data);
            header('Location: ?url=cliente/index');
            exit;
        }

        $cliente = $modelo->obtenerPorId($id);
        $this->view('clientes/editar', ['cliente' => $cliente]);
    }

    public function eliminar($id) {
        $modelo = $this->model('Cliente');
        $modelo->eliminar($id);
        header('Location: ?url=cliente/index');
        exit;
    }

    public function ver($id) {
        $modelo = $this->model('Cliente');
        $cliente = $modelo->obtenerPorId($id);
    
        if (!$cliente || $cliente['borrado']) {
            die("Cliente no encontrado o eliminado.");
        }
    
        $this->view('clientes/ver', ['cliente' => $cliente]);
    }

}
