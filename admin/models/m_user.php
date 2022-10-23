<?php
include_once ("database.php");
class m_user extends database {
    //
    public function read_user_by_id_pass($username,$password) {
        $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' AND `admin` = 1";
        $this->setQuery($sql);
        return $this->loadRow(array($username,$password));
        //gọi và xử lý tính năng đăng nhập nếu thành công thì hiển thị ra 123 rồi dừng
        //nếu không thành công quay trở lại trang login và hiển thị ra bạn đã sai tài khoản
    }

    public function user_list(){
        $sql = "SELECT * FROM `users`";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function get_info_user($id){
        $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    public function change_info_user($id, $name, $email, $phone, $rule){
        $sql = "UPDATE `users` SET `name`='$name', `email`='$email', `phone`='$phone', `admin`='$rule' WHERE `id`='$id'";
        $this->setQuery($sql);
        return $this->execute();
    }

    public function delete_user($id){
        $sql = "DELETE FROM `users` WHERE `id` = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
}