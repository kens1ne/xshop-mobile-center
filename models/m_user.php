<?php
require_once ("database.php");
class m_user extends database
{
    public function checkLogin($username, $password){
        $sql = "SELECT * FROM `nguoi_dung` WHERE `ten_dang_nhap`= '$username' AND `mat_khau`= '$password'";
        $this->setQuery($sql);
        return $this->loadRow(array($username,$password));
    }

    public function checkRegister($username, $name, $phone, $email, $password){
            $sql = "INSERT INTO `nguoi_dung`(`ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `phone`, `active`) 
            VALUES ('$name', '$username', '$password', '$email', '$phone', '1')";
            $this->setQuery($sql);
            $this->execute(array($username,$name,$phone,$email,$password));
            return true;
    }

    public function checkUsername($username){
        $sql = "SELECT * FROM `nguoi_dung` WHERE `ten_dang_nhap`='$username'";
        $this->setQuery($sql);
        return $this->loadRow(array($username));
    }
}