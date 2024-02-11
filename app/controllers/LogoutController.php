<?php

session_start();

class LogoutController extends Controller {
    public function index() {
        $this->view('logout', ['title' => 'Página salir']);
    }
}
