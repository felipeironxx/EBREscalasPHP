<?php

require_once 'dao/dbConnection.php';

class mPlantonistas extends dbConnection {

    private $id;
    private $data;
    private $analista;
    private $tecnicovix;
    private $tecnicoacz;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getAnalista() {
        return $this->analista;
    }

    public function setAnalista($analista) {
        $this->analista = $analista;
    }

    public function getTecnicovix() {
        return $this->tecnicovix;
    }

    public function setTecnicovix($tecnicovix) {
        $this->tecnicovix = $tecnicovix;
    }

    public function getTecnicoacz() {
        return $this->tecnicoacz;
    }

    public function setTecnicoacz($tecnicoacz) {
        $this->tecnicoacz = $tecnicoacz;
    }

}

?>
