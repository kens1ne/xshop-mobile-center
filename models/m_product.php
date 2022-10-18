<?php
require_once ("database.php");
class m_product extends database
{
    public function read_product() {
        $sql = "select * from san_pham";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function get_product(){
        $sql = "SELECT * FROM `hang_hoa` ";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
        
    }
    public function get_category(){
        $sql = "SELECT * FROM `loai` ";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
        
    }
    public function get_products(){
        $sql = "SELECT * FROM `hang_hoa` where `dac_biet` = 1 ";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
    }
    public function get_products_info($id){
        $sql = "SELECT * FROM `hang_hoa` where `id` = '$id' ";
        $this-> setQuery($sql);
        return $this -> loadRow();
    }
    public function get_products_comment($id){
        $sql = "SELECT binh_luan.*, users.name FROM binh_luan INNER JOIN users ON binh_luan.id_kh = users.id WHERE binh_luan.id_hh  =$id ";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
    }


    
}