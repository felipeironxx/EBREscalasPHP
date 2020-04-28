<?php

require_once 'dao/dbConnection.php';

class mFolga extends dbConnection {

    private $id;
    private $data;
    private $analista;
    private $tecnico;

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

    public function getTecnico() {
        return $this->tecnico;
    }

    public function setTecnico($tecnico) {
        $this->tecnico = $tecnico;
    }

}

?>
