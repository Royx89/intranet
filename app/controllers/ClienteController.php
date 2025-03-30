<?php
class ClienteController extends Controller {
    
    public function login() {
        if (isset($_SESSION['usuario'])) {
            header('Location: ?url=home/index');
            exit;
        }
    }
    
    public function __construct() {
        requireLogin(); // Redirige si no ha iniciado sesión
    }

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
        } else {
            $this->view('clientes/crear');
        }
    }

    public function editar($id) {
        $modelo = $this->model('Cliente');
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id_cliente'       => $id,
                'nombre_cliente'   => $_POST['nombre_cliente'],
                'fecha_nacimiento' => $_POST['fecha_nacimiento'],
                'sexo'             => $_POST['sexo'],
                'telefono'         => $_POST['telefono'],
                'correo'           => $_POST['correo'],
                'calle'            => $_POST['calle'],
                'colonia'          => $_POST['colonia'],
                'ciudad'           => $_POST['ciudad'],
                'codigo_postal'    => $_POST['codigo_postal'],
                'estado'           => $_POST['estado'],
                'pais'             => $_POST['pais']
            ];
    
            $modelo->actualizar($data);
            header('Location: ?url=cliente/index');
            exit;
        }
    
        $cliente = $modelo->obtenerPorId($id);
    
        if (!$cliente) {
            die("Cliente no encontrado.");
        }
    
        $this->view('clientes/editar', ['cliente' => $cliente]);
    }
    

    public function ver($id) {
        $modelo = $this->model('Cliente');
        $cliente = $modelo->obtenerPorId($id);
    
        if (!$cliente || $cliente['borrado']) {
            die("Cliente no encontrado o eliminado.");
        }
    
        $this->view('clientes/ver', ['cliente' => $cliente]);
    }

    public function filtrar() {
        header('Content-Type: application/json');
    
        $modelo = $this->model('Cliente');
    
        $nombre = $_GET['nombre'] ?? '';
        $sexo = $_GET['sexo'] ?? '';
        $estado = $_GET['estado'] ?? '';
        $pais = $_GET['pais'] ?? '';
    
        $clientes = $modelo->filtrarClientes($nombre, $sexo, $estado, $pais);
    
        echo json_encode($clientes);
        exit;
    }

    public function autocomplete() {
        header('Content-Type: application/json');
        $term = $_GET['term'] ?? '';
        
        $modelo = $this->model('Cliente');
        
        $sql = "SELECT nombre_cliente FROM clientes 
                WHERE nombre_cliente LIKE :term AND borrado = 0 
                ORDER BY nombre_cliente ASC LIMIT 10";
        $stmt = $modelo->db->prepare($sql);
        $stmt->bindValue(':term', "%$term%");
        $stmt->execute();
        
        $resultados = $stmt->fetchAll(PDO::FETCH_COLUMN);
        
        $sugerencias = [];
        foreach ($resultados as $nombre) {
            $sugerencias[] = ['label' => $nombre];
        }
    
        echo json_encode($sugerencias);
        exit;
    }

    public function misclientes($id_usuario) {
        $modelo = $this->model('Cliente');
        $clientes = $modelo->obtenerPorUsuario($id_usuario);
        $this->view('clientes/index', ['clientes' => $clientes]);
    }
    
    
    
    
}
