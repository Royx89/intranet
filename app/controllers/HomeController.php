<?php
class HomeController extends Controller {
    public function __construct() {
        requireLogin(); // Protección de acceso
    }

    public function index() {
        $this->view('home/index');
    }
}
