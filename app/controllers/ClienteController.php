<?php
class ClienteController extends Controller {
    public function index() {
        $modelo = $this->model('Cliente');
        $clientes = $modelo->obtenerTodos();

        $this->view('clientes/index', ['clientes' => $clientes]);
    }
}
