<?php
require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../../app/models/UserModel.php';
require_once __DIR__ . '/../../app/models/GlobalModel.php';

session_start();

class RegisterController extends Controller {
    public function index() {
        $this->view('register');

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_public'])) {
            
            $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $_POST['pass'] = $password;

            unset($_POST['registrar']);

            $userModel = $this->model('GlobalModel');
            $result = $userModel->insert('users', $_POST);

            $message = '';

            if ($result) {

                $message .= 'Usuario registrado con éxito.';

                //header('Location: main');

            } else {
                $message .= 'No se pudo registrar el usuario.';
            }

            $this->view('register', ['message' => $message]);
            echo $message;

        }
        
    }

    public function store() {
        
    }
}

