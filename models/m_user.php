<?php
require_once ("database.php");
class m_user extends database
{
    public function checkLogin($username, $password){
        $sql = "SELECT * FROM `users` WHERE `username`= '$username' AND `password`= '$password'";
        $this->setQuery($sql);
        return $this->loadRow(array($username,$password));
    }

    public function checkRegister($username, $name, $phone, $email, $password){
            $sql = "INSERT INTO `users`(`name`, `username`, `password`, `email`, `phone`, `active`, `admin`) 
            VALUES ('$name', '$username', '$password', '$email', '$phone', '1', '0')";
            $this->setQuery($sql);
            return $this->execute();
    }

    public function checkUsername($username){
        $sql = "SELECT * FROM `users` WHERE `username`='$username'";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    public function insertCmt($comment,$id_hh,$id_kh){
        $sql = "INSERT INTO `binh_luan`(`noi_dung`, `id_hh`, `id_kh`) VALUES ('$comment', '$id_hh', '$id_kh')";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function updatePass($password, $username){
        $sql = "UPDATE `users` SET `password`='$password' WHERE `username`= '$username'";
        $this->setQuery($sql);
        return $this->execute();
    }
}