<?php

class recordModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=adopcion;charset=utf8', 'root', '');
    }


    function getRecord(){
        $query = $this->db->prepare('SELECT * FROM `historial`');
            $query->execute();

            // $tasks es un arreglo de niños
            $record = $query->fetchAll(PDO::FETCH_OBJ);

            return $record;   
    }

    function getChildenRecordById($id){
        $query = $this->db->prepare('SELECT niños.*, historial.historial FROM niños JOIN historial ON niños.idNiños = historial.idNiños WHERE niños.idNiños=?');
            $query->execute([$id]);

            $record = $query->fetchAll(PDO::FETCH_OBJ);

            return $record;
    }

     /**
     * Inserta la tarea en la base de datos
     */
    function insertRecord($residencia, $ciudad, $situacionParental, $salud, $img, $otros) {
        $query = $this->db->prepare('INSERT INTO historial (residencia, ciudad, situacionParental , salud,img, otros) VALUES(?,?,?,?,?,?)');
        $query->execute([$residencia, $ciudad, $situacionParental, $salud, $img, $otros]);

        return $this->db->lastInsertId();
    }

function deleteRecord($id) {
    $query = $this->db->prepare('DELETE FROM historial WHERE idDatos = ?');
    $query->execute([$id]);

}

function updateChildren($residencia, $ciudad, $situacionParental, $salud, $img, $otros) {
    $query = $this->db->prepare('INSERT INTO historial (residencia, ciudad, situacionParental , salud,img, otros) VALUES(?,?,?,?,?,?)');
    $query->execute([$residencia, $ciudad, $situacionParental, $salud, $img, $otros]);
    //aca hay que preguntar como devuelvo un id valido.
}
}

