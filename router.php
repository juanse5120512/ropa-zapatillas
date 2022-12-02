<?php
require_once './app/controllers/zap_controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$zapController = new zapController();

switch ($params[0]) {
    case 'home':
        $zapController->showShoes_c();
        break;
    case 'cancion':
        $id = $params[1];
        $zapController->showZapatilla_byid($id);
        break;    
    default:
        echo ('404 PAGINA NO ENCONTRADA');
        break;
}
