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
    
    public function getInfo(){
        $id = $_POST['id'];
        $m_category = new m_category();
        $data = $m_category->get_info_category($id);
        include('views/information/categoryInfo.php');
    }

    public function changeInfo(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $m_category = new m_category();
        $changeAction = $m_category->change_info_category($id, $name);
        if($changeAction){
            echo '<div class="alert alert-success alert-dismiss">
                    Thay loại có mã <b>'.$id.'</b> thành công !
                </div>';
        }else{
            echo '<div class="alert alert-success alert-dismiss">
                    Có lỗi xảy ra !
                </div>';
        }
    }
    
    public function delete() {
        $id = $_POST['id'];
        $m_category = new m_category();
        $deleteCategory = $m_category->delete_category($id);
        if($deleteCategory){
            echo 'Xóa người dùng '.$id.' Thành công !';
        }else{
            echo 'Có lỗi xảy ra';
        }
    }
}
// làm tính năng đăng nhập nhảy vào trang home.php
// nếu như không đăng nhập mà vào link của home.php sẽ bị bật về trang login
// làm tính năng đăng xuất
//cắt trang chart html