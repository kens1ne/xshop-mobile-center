<?php
require_once ("database.php");
class m_product extends database {
    public function add($code, $name, $price, $discount, $image, $loai, $mota) {
        move_uploaded_file($image['tmp_name'], 'public/upload/'.$image['name']);
        $sql = "INSERT INTO `hang_hoa`(`code`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `mo_ta`, `id_loai`) 
        VALUES ('$code', '$name', '$price', '$discount', '".$image['name']."', '".urlencode($mota)."', '$loai')";
        $this->setQuery($sql);
        return $this->execute([$category]);
    }

    public function product_list() {
        $sql = "SELECT * FROM `hang_hoa`";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}