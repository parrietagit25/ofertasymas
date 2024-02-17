<?php

require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../../app/models/GlobalModel.php';

session_start();

class UserController extends Controller {

    public function index() {

        if (isset($_SESSION['id_user_oym'])) {

            $userModel = $this->model('GlobalModel');
            $users = $userModel->listar('users');
            $this->view('user', ['users' => $users, 'title' => 'Página de Usuarios']);
    
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registrar'])) {
                
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
    
                $this->view('user', ['message' => $message]);
                echo $message;
    
            }
    
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar'])) {
                
                $id_user = $_POST['actualizar'];
                unset($_POST['actualizar']);
    
                $userModel = $this->model('GlobalModel');
                $result = $userModel->update('users', $_POST, "id = $id_user");
    
                $message = '';
    
                if ($result) {
    
                    $message .= 'Usuario actualizado con éxito.';
    
                    //header('Location: main');
    
                } else {
                    $message .= 'No se pudo actualizar el usuario.';
                }
    
                $this->view('user', ['message' => $message]);
                echo $message;
    
            }
    
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar'])) {
                
                $id_user = $_POST['eliminar'];
    
                $userModel = $this->model('GlobalModel');
                $result = $userModel->eliminar('users', "id = $id_user");
    
                $message = '';
    
                if ($result) {
    
                    $message .= 'Usuario eliminado con éxito.';
    
                    //header('Location: main');
    
                } else {
                    $message .= 'No se pudo eliminar el usuario.';
                }
    
                $this->view('user', ['message' => $message]);
                echo $message;
    
            }
            
        }else{
            $link_login = '/login';
            header('Location: '.__DIR__.$link_login);
            exit;
        }


    }
}