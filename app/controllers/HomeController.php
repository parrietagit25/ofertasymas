<?php

session_start();

class HomeController extends Controller {
    public function index() {
        $this->view('home', ['title' => 'Página Principal']);
    }
}

?>
