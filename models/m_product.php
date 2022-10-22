<?php
require_once ("database.php");
class m_product extends database
{
    public function get_product(){
        $sql = "SELECT * FROM `hang_hoa` ORDER BY id DESC";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
        
    }
    public function get_category(){
        $sql = "SELECT * FROM `loai` ";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
        
    }
    public function get_products(){
        $sql = "SELECT * FROM `hang_hoa` where `dac_biet` = 1 ORDER BY id DESC";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
    }
    public function get_products_info($id){
        $sql = "SELECT * FROM `hang_hoa` where `id` = '$id' ";
        $this-> setQuery($sql);
        return $this -> loadRow();
    }
    public function get_products_comment($id){
        $sql = "SELECT binh_luan.*, users.name FROM binh_luan INNER JOIN users ON binh_luan.id_kh = users.id WHERE binh_luan.id_hh  =$id ORDER BY id DESC";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
    }

    public function update_view($id){
        $sql = "UPDATE `hang_hoa` SET`so_luot_xem`=`so_luot_xem` + 1 WHERE `id` = '$id'";
        $this-> setQuery($sql);
        return $this->execute();
    }
    // hàm insert hàng đã mua
    public function purchase($id, $id_kh, $name, $phone, $address){
        $sql = "INSERT INTO `ordered`(`ten_kh`, `id_sp`, `id_kh`,`address`, `sdt`, `status`) 
        VALUES ('$name','$id','$id_kh','$address', '$phone', '0')";
        $this-> setQuery($sql);
        return $this->execute();
    }
    public function get_recommend_pro($id,$loai){
        $sql = "SELECT * FROM `hang_hoa` WHERE`id_loai` = '$loai' AND `id` != '$id' LIMIT 5  ";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
    }
    public function get_category_pro($id){
        $sql = "SELECT hang_hoa.*, loai.ten_loai FROM hang_hoa INNER JOIN loai ON hang_hoa.id_loai=loai.id WHERE hang_hoa.id_loai=$id";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
    }

}