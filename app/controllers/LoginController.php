<?php

require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../../app/models/UserModel.php';

session_start();

class LoginController extends Controller {
    public function index() {
        ob_start(); 
        $link_main = 'http://localhost/ofertasymas/public/main';

        if (isset($_SESSION['id_user_oym'])) {
            header('Location: '.$link_main);
            exit;
        }else{
            $this->view('login', ['error' => 'Debe iniciar Session']);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = $this->model('UserModel');
            $user = $userModel->findByEmail($email);

            if ($user && isset($user->pass) && password_verify($password, $user->pass)) {
                
                $_SESSION['id_user_oym'] = $user->id;
                $_SESSION['email_oym'] = $email;
                header('Location: '.$link_main);
                exit;
            } else {
                ob_end_clean();
                $this->view('login', ['error' => 'Credenciales incorrectas']);
            }
        }
    }
}
