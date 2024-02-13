<?php
require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../../app/models/GlobalModel.php';

session_start();

class OfertasController extends Controller {

    public function index() {
        if (isset($_SESSION['id_user_oym'])) {
            
            $sliderModel = $this->model('GlobalModel');
            $slider = $sliderModel->listar('ima_slider');
            $this->view('ofertas', ['ofertas_slider' => $slider, 'title' => 'Página de Ofertas']);

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar_slider'])) {
                
                $id_slider = $_POST['actualizar_slider'];

                $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/ofertasymas/public/assets/img/slider/";
                $target_file = $target_dir . "home1-slider$id_slider.png";
                if (isset($_POST)) {
                    if (move_uploaded_file($_FILES["image_rute_frond"]["tmp_name"], $target_file)) {
                        //echo "El archivo ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " ha sido subido.";
                    } else {
                        echo "Hubo un error subiendo tu archivo.";
                    }
                }

                unset($_POST['actualizar_slider']);
                unset($_POST['image_rute_frond']);
    
                $sliderModel = $this->model('GlobalModel');
                $result = $sliderModel->update('ima_slider', $_POST, "id = $id_slider");
    
                $message = '';
    
                if ($result) {
    
                    $message .= 'Usuario actualizado con éxito.';
    
                    
                        
                } else {
                    $message .= 'No se pudo actualizar el usuario.';
                }
    
                $this->view('ofertas', ['message' => $message]);
                echo $message;
    
            }
           
        }else{
            $link_login = 'http://localhost/ofertasymas/public/login';
            header('Location: '.$link_login);
            exit;
        }


    }
}