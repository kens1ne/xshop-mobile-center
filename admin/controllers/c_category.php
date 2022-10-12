<?php
include ("models/m_category.php");
class c_category {
    public function add() {
        $name = addslashes($_POST['name']);
        $m_category = new m_category();
        $add = $m_category->add($name);
        if($add){
            header("Location: Category.php");
        }
    }
    
    public function edit(){

    }

    public function delete(){
        
    }
}
// làm tính năng đăng nhập nhảy vào trang home.php
// nếu như không đăng nhập mà vào link của home.php sẽ bị bật về trang login
// làm tính năng đăng xuất
//cắt trang chart html