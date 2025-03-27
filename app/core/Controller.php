<?php
class Controller {
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($vista, $datos = []) {
        extract($datos);
        require_once '../app/views/' . $vista . '.php';
    }
    
}
