<?php
require_once ("database.php");
class m_category extends database {
    public function add($category) {
        $sql = "INSERT INTO `loai`(`ten_loai`) VALUES ('$category')";
        $this->setQuery($sql);
        return $this->execute([$category]);
    }

    public function category_list() {
        $sql = "SELECT * FROM `loai`";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}