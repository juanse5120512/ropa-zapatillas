<?php

class  zapModel{

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db-indumentaria;charset=utf8', 'root', '');
    }

    public function getAll_shoes_m() {
        $query = $this->db->prepare("SELECT * FROM zapatillas");
        $query->execute();
        $shoes = $query->fetchAll(PDO::FETCH_OBJ); 
        return $shoes;
    }

    public function getZapatilla_byID_m($id){
        $query = $this->db->prepare('SELECT * FROM zapatillas WHERE id = ?');
        $query->execute([$id]);
        $zapatilla = $query->fetch(PDO::FETCH_OBJ);
        return $zapatilla;
    }

}