<?php
require_once './app/models/list.model.php';
require_once './app/views/list.view.php';
require_once './app/views/admin.view.php';
  

class ListController {
    private $model;
    private $view;
    private $viewAdmin;

    public function __construct() {
        $this->model = new ListModel();
        $this->view = new ListView();
        $this->viewAdmin = new AdminView();
    }
    public function showAdminList(){
        $list=$this->model->getList();
        $this->viewAdmin->showItemList($list);
    }

    public function showList() {//toda la lista
        $list = $this->model->getList();   
        $this->view->showItemList($list);
    }

    public function showListById($id) {//solo el item con el id del parametro
        $item = $this->model->getListById($id);
        $this->view->showItemListbyId($item);
    }

    public function addChildren() {

        // obtengo los datos del usuario
        $idNiño = $_POST['idNiño'];
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $edad = $_POST['edad'];
        $sexo=$_POST['sexo'];
        $idDatos= $_POST['idDatos'];


        // validaciones
        if (empty($nombre) || empty($apellido)) {
            $this->view->showError("Debe completar todos los campos");
            return;
        }

        $id = $this->model->insertItem($idNiño,$codigo, $nombre, $apellido, $edad,$sexo, $idDatos);
        if ($id) {
            header('Location: ' . BASE_URL."listAdmin");
        } else {
            $this->view->showError("Error al insertar la tarea");
        }
    }

    function removeChildren($id) {
        $this->model->deletechildren($id);
        header('Location: ' . BASE_URL."listAdmin");
    }

    function showUpdate(){
        
        $idNiño = $_POST['idNiño'];
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $edad = $_POST['edad'];
        $sexo=$_POST['sexo'];
        $idDatos= $_POST['idDatos'];

        //validaciones
        $this->model->updateItem($idNiño,$codigo, $nombre, $apellido, $edad,$sexo, $idDatos);
        header('Location: ' . BASE_URL."listAdmin");
        /*
        if ($id) {
            header('Location: ' . BASE_URL."listAdmin");
        } else {
            $this->view->showError("Error al insertar la tarea");
        }*/
    }
}
