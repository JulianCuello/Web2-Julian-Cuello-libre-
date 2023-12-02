<?php
require_once './app/controllers/list.controller.php';
require_once './app/controllers/about.controller.php';
require_once './app/controllers/record.controller.php';
require_once './templates/form_alta.php';
require_once './templates/form_update.php';
require_once './templates/form_alta.record.php';
require_once './templates/form_update.record.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    
    case 'list':
        $controller = new ListController();
        $controller->showList();
        break;

    case 'listId':
        $controller = new ListController();
        $controller->showListById($params[1]);
        break;
    case 'record':
        $controller = new recordController();
        $controller->showRecord();
        break;
    case 'recordId':
        $controller = new recordController();
        $controller->showRecordById($params[1]);
        break;
        //gestion de items
    case 'listAdmin':
        $controller = new ListController();
        $controller->showAdminList();
        break;
        case 'form':
            showForm();
            break;
        case 'updateChilden':
            showFormUpdate($params[1]);
            break;
        case 'update':
            $controller= new ListController();
            $controller->showUpdate();
            break;
        case 'addChilden':
            $controller = new ListController();
            $controller->addChildren();
            break;
        case 'removeChilden':
            $controller = new ListController();
            $controller->removeChildren($params[1]);
            break;
        
        
            //gestion de categorias
        case 'recordAdmin':
            $controller = new recordController();
            $controller->showRecordAdmin();
            break;
        case 'formRecord':
            showFormRecord();
            break;
        case 'addRecord':
            $controller = new recordController();
            $controller->addRecord();
            break;
        case 'formRecordUpdate':
            showFormRecordUpdate($params[1]);
            break;
        case 'updateCategory':
            $controller= new recordController();
            $controller->showRecordUpdate();
            break;
        
        case 'removeRecord':
            $controller = new recordController();
            $controller->removeRecord($params[1]);
            break;
    case 'about':
        $controller = new AboutController();
        $controller->showAbout();
        break;
    default: 
        echo "404 Page Not Found";
        break;
}
