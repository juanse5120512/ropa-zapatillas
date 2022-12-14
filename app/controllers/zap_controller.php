<?php
require_once './app/models/zap_model.php';
require_once './app/views/zap_view.php';

class zapController {
    private $modelZap;
    private $view;

    public function __construct() {
        $this->modelZap = new zapModel();
        $this->view = new NuevaView();

    }

    public function showShoes_c(){
        session_start();
        $zapatillas = $this->modelZap->getAll_shoes_m();
        $this->view->show_shoes_v($zapatillas);
    }

    public function showZapatilla_byid($id){
        $zapatilla = $this->modelZap->getZapatilla_byID_m($id);
        $this->view->show_shoe_byid_v($zapatilla);
    }


}