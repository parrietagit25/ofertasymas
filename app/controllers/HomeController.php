<?php

require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../../app/models/GlobalModel.php';

session_start();

class HomeController extends Controller {

    public function index() {

        //$this->view('home', ['title' => 'Página Principal']);

        $userModel = $this->model('GlobalModel');
        $slider = $userModel->listar('ima_slider');
        $this->view('home', ['slider' => $slider, 'title' => 'Página Principal']);

    }
}

?>
