<?php

require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../../app/models/GlobalModel.php';

session_start();

class UserController extends Controller {
    public function index() {
        $userModel = $this->model('GlobalModel');
        $users = $userModel->listar('users');
        $this->view('user', ['users' => $users, 'title' => 'Página de Usuarios']);
    }
}