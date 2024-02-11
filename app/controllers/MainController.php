<?php 

require_once __DIR__ . '/../../core/Controller.php';

session_start();

class MainController extends Controller {
    public function index() {
        if (isset($_SESSION['id_user_oym'])) {
            $this->view('main', ['title' => 'Página Main']);
        }else{
            $this->view('login', ['error' => 'Debe iniciar Session']);
        }
        
    }
}