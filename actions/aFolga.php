<?php
require_once ('model/mFolga.php');

class aFolga extends mFolga {

    protected $sqlInsert = "insert into folga (data, analista, tecnico) 
                                                values('%s', '%s', '%s')";
    
    protected $sqlUpdate = "update folga set data='%s', analista='%s', tecnico='%s' 
                                           where id = '%s'";
    
    protected $sqlDelete = "delete from folga where id = '%s' ";
    
    protected $sqlSelect = "select * from folga where 1=1 %s %s ";

    public function insert() {
        try {

            $sql = sprintf($this->sqlInsert, $this->getData(),
                                             $this->getAnalista(),
                                             $this->getTecnico());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function update() {
        try {
            $sql = sprintf($this->sqlUpdate, $this->getData(),
                                             $this->getAnalista(),
                                             $this->getTecnico(),
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
            $this->setTecnico($rs[0]['tecnico']);
           
            return $this;
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }
}
?>
