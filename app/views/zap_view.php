<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class NuevaView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    public function show_shoes_v($zapatillas){
        $this->smarty->assign('zapatillas', $zapatillas);
        $this->smarty->display('body.tpl');
    }

    public function show_shoe_byid_v($zapatilla){
        $this->smarty->assign('zapatilla', $zapatilla);
        $this->smarty->display('show_shoe.tpl');
    }

}