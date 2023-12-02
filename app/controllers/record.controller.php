<?php
    require_once './app/views/category.view.php';
    require_once './app/models/category.model.php';

    class recordController{
        
        private $model;
        private $view;

        public function __construct(){
            $this->model=new recordModel();
            $this->view=new recordView();
        }

        public function showRecord(){
            $categorias=$this->model->getCategoria();
            $this->view->showRecord($categorias);    
            }
            
        public function showRecordById($id){
            $categoria=$this->model->getchildenCategoriaById($id);
            $this->view->showChildensRecordById($categoria);
        }

        //vista de administrador
        public function showRecordAdmin(){
            $categorias=$this->model->getCategoria();
            $this->view->showRecordsAdmin($categorias);    
       }
       function addRecord(){

        $idDatos = $_POST['idDatos'];
        $residencia = $_POST['residencia'];
        $ciudad = $_POST['ciudad'];
        $situacionParental= $_POST['SituacionParental'];
        $salud=$_POST['salud'];
        $otros= $_POST['otros'];
        $img=$_POST['img'];
        
    
        if (empty($residencia) || empty($ciudad)) {
            echo "error";
        }

        //validaciones
        $id=$this->model->insertRecord($idDatos,$residencia, $ciudad, $situacionParental,$salud, $otros, $img);
        if ($id) {
            header('Location: '. BASE_URL."listAdmin");
        } else {
            echo "mostrar error";
        }
        
        
        header('Location: ' . BASE_URL."categoryAdmin");
        
     }
   
function removeRecord($id) {
    $this->model->deleteRecord($id);
    header('Location: ' . BASE_URL."categoryAdmin");
}


function showRecordUpdate(){

        $idDatos = $_POST['idDatos'];
        $residencia = $_POST['residencia'];        
        $ciudad= $_POST['ciudad'];
        $situacionParental = $_POST['situacionParental'];
        $salud=$_POST['salud'];
        $img=$_POST['img'];
        $otros=$_POST['otros'];

        //validaciones
        $this->model->updateChildren($idDatos, $residencia, $ciudad, $situacionParental,$salud, $img,$otros);
        header('Location: ' . BASE_URL."categoryAdmin");
        /*
        if ($id) {
            header('Location: ' . BASE_URL."listAdmin");
        } else {
            $this->view->showError("Error al insertar la tarea");
        }*/
}

}