<?php
require_once ('model/mPlantonistas.php');

class aPlantonistas extends mPlantonistas {

    protected $sqlInsert = "insert into plantonistas (data, analista, tecnicovix, tecnicoacz) 
                                                values('%s', '%s', '%s', '%s')";
    
    protected $sqlUpdate = "update plantonistas set data='%s', analista='%s', tecnicovix='%s', tecnicoacz='%s' 
                                           where id = '%s'";
    
    protected $sqlDelete = "delete from plantonistas where id = '%s' ";
    
    protected $sqlSelect = "select * from plantonistas where 1=1 %s %s ";

    public function insert() {
        try {

            $sql = sprintf($this->sqlInsert, $this->getData(),
                                             $this->getAnalista(),
                                             $this->getTecnicovix(),
                                             $this->getTecnicoacz());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function update() {
        try {
            $sql = sprintf($this->sqlUpdate, $this->getData(),
                                             $this->getAnalista(),
                                             $this->getTecnicovix(),
                                             $this->getTecnicoacz(),
                                             $this->getId());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function delete() {
        try {
            $sql = sprintf($this->sqlDelete, $this->getId());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function select($where = '', $order = '', $rquery = false) {
        try {
            $sql = sprintf($this->sqlSelect, $where, $order);
            if ($rquery)
                return $sql;
            else
                return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function load() {
        try {
            $rs = $this->select(sprintf("and id='1'", $this->getId()));
            $this->setId($rs[0]['id']);
            $this->setData($rs[0]['data']);
            $this->setAnalista($rs[0]['analista']);
            $this->setTecnicovix($rs[0]['tecnicovix']);
            $this->setTecnicoacz($rs[0]['tecnicoacz']);
           
            return $this;
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }
}
?>
