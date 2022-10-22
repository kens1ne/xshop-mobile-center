<?php
include_once ("database.php");
class m_home extends database {
    //
    function totalUser(){
        $sql = "SELECT COUNT(id) FROM users";
        $this->setQuery($sql);
        return $this->loadRecord();
    }

    function totalOrder(){
        $sql = "SELECT COUNT(id) FROM ordered";
        $this->setQuery($sql);
        return $this->loadRecord();
    }

    function totalProduct(){
        $sql = "SELECT COUNT(id) FROM hang_hoa";
        $this->setQuery($sql);
        return $this->loadRecord();
    }

    function totalView(){
        $sql = "SELECT SUM(so_luot_xem) FROM hang_hoa";
        $this->setQuery($sql);
        return $this->loadRecord();
    }
}