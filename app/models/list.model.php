<?php

class ListModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=adopcion;charset=utf8', 'root', '');
    }

    
    function getList() {//consulta por la lista, incluida la categoria a la que corresponden
        $query = $this->db->prepare('SELECT niños.*, datos.idDatos FROM niños JOIN record ON niños.idNiños = record.idRecord;');
        $query->execute();

        $list = $query->fetchAll(PDO::FETCH_OBJ);

        return $list;
    }

    function getListById($id) {//consulta por el niño segun parametro incluida la categoria
        $query = $this->db->prepare('SELECT * FROM `niño` JOIN record ON niño.idrecord=record.idRecord WHERE idNiño = ?');
        $query->execute([$id]);

        $item = $query->fetchAll(PDO::FETCH_OBJ);

        return $item;
    }

    /**
     * Inserta la tarea en la base de datos
     */
    function insertItem($idNiño,$codigo, $nombre, $apellido, $edad, $sexo, $idDatos) {
        $query = $this->db->prepare('INSERT INTO niños (idNiño, codigo, nombre, apellido, edad, sexo, idDatos) VALUES(?,?,?,?,?,?,?)');
        $query->execute([$idNiño, $codigo,  $nombre, $apellido, $edad, $sexo, $idDatos]);

        return $this->db->lastInsertId();
    }

    
function deleteChildren($id) {
    $query = $this->db->prepare('DELETE FROM niños WHERE idProducto = ?');
    $query->execute([$id]);
}

function updateItem($idNiño,$codigo, $nombre, $apellido, $edad, $sexo, $idDatos) {    
    $query = $this->db->prepare('INSERT INTO niños (idNiño, codigo, nombre, apellido, edad, sexo, idDatos) VALUES(?,?,?,?,?,?,?)');
        $query->execute([$idNiño, $codigo,  $nombre, $apellido, $edad, $sexo, $idDatos]);
    //aca hay que preguntar como devuelvo un id valido.
}

function getRecord(){
    $query = $this->db->prepare('SELECT * FROM `historial`');
        $query->execute();

        // $tasks es un arreglo de repuestos
        $record = $query->fetchAll(PDO::FETCH_OBJ);

        return $record;   
}

function getRecordById($id){
    $query = $this->db->prepare('SELECT * FROM `niños` WHERE idRecord = ?');
        $query->execute([$id]);

        // $tasks es un arreglo de repuestos
        $record = $query->fetchAll(PDO::FETCH_OBJ);

        return $record;   
}

}