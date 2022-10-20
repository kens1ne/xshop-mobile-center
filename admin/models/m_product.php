<?php
require_once ("database.php");
class m_product extends database {
    public function add($code, $name, $price, $discount, $image, $loai, $mota, $dacbiet, $random_name) {
        move_uploaded_file($image['tmp_name'], 'public/upload/'.$random_name);
        $sql = "INSERT INTO `hang_hoa`(`code`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `dac_biet`,`mo_ta`, `id_loai`) 
        VALUES ('$code', '$name', '$price', '$discount', '".$random_name."', '$dacbiet', '".urlencode($mota)."', '$loai')";
        $this->setQuery($sql);
        return $this->execute([$category]);
    }

    public function get_info_product($id){
        $sql = "SELECT * FROM `hang_hoa` WHERE `id` = '$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    public function update($id, $code, $name, $price, $discount, $image = null, $loai, $mota, $dacbiet, $random_name, $old_image){
        if($image['size'] > 0){
        move_uploaded_file($image['tmp_name'], 'public/upload/'.$random_name);
        $sql = "UPDATE `hang_hoa` SET `code`='$code',
                                      `ten_hh`='$name',
                                      `don_gia`='$price',
                                      `giam_gia`='$discount',
                                      `hinh`='$random_name',
                                      `mo_ta`='".urlencode($mota)."',
                                      `dac_biet`='$dacbiet',
                                      `id_loai`='$loai' WHERE `id` = '$id'";
        }else{
            $sql = "UPDATE `hang_hoa` SET `code`='$code',
                                      `ten_hh`='$name',
                                      `don_gia`='$price',
                                      `giam_gia`='$discount',
                                      `hinh`='$old_image',
                                      `mo_ta`='".urlencode($mota)."',
                                      `dac_biet`='$dacbiet',
                                      `id_loai`='$loai' WHERE `id` = '$id'";
        }
        $this->setQuery($sql);
        return $this->execute([$category]);
    }

    public function product_list() {
        $sql = "SELECT * FROM `hang_hoa`";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function load_comments() {
        $sql = "SELECT hang_hoa.*,binh_luan.id_hh, COUNT(*) FROM hang_hoa INNER JOIN binh_luan ON hang_hoa.id = binh_luan.id_hh GROUP by binh_luan.id_hh ORDER BY binh_luan.id_hh";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function get_products_comment($id){
        $sql = "SELECT binh_luan.*, users.name FROM binh_luan INNER JOIN users ON binh_luan.id_kh = users.id WHERE binh_luan.id_hh  =$id ORDER BY id DESC";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
    }

    public function analytics(){
        $sql = "SELECT hang_hoa.*, loai.*, MIN(hang_hoa.don_gia), MAX(hang_hoa.don_gia), AVG(hang_hoa.don_gia), COUNT(hang_hoa.id_loai) FROM hang_hoa 
        INNER JOIN loai ON hang_hoa.id_loai=loai.id GROUP by loai.id ORDER BY loai.id";
        $this-> setQuery($sql);
        return $this -> loadAllRows();
    }
}