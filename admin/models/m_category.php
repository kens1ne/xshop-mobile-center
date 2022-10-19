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

    public function get_info_category($id) {
        $sql = "SELECT * FROM `loai` WHERE `id` = '$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    public function change_info_category($id, $name) {
        $sql = "UPDATE `loai` SET `ten_loai`='$name' WHERE `id` = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }

    public function delete_category($id){
        $sql = "DELETE FROM `loai` WHERE `id` = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
}