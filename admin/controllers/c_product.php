<?php
class c_product {
    public function add() {
        include ("models/m_product.php");
        $m_product = new m_product();
        $code = addslashes($_POST['code']);
        $name = addslashes($_POST['name']);
        $price = addslashes($_POST['price']);
        $discount = addslashes($_POST['discount']);
        $image = $_FILES['image'];
        $loai = addslashes($_POST['category']);
        $mota = addslashes($_POST['description']);
        $dacbiet = addslashes($_POST['special']);
        if(isset($_POST['addProduct'])){
            $random_name = bin2hex(rand(10000,999999999)).".jpg";
            $addProduct = $m_product->add($code, $name, $price, $discount, $image, $loai, $mota, $dacbiet, $random_name);
            if($addProduct){
                header("location: Products.php");
            }
        }
    }
    
    public function edit(){
        include ("models/m_product.php");
        include ("models/m_category.php");
        $id = addslashes($_GET['id']);
        $category = new m_category();
        $categories = $category->category_list();
        $m_product = new m_product();
        $data = $m_product->get_info_product($id);
        $view = "views/information/productInfo.php";
        include ("templates/layout.php");
    }

    public function update(){
        include ("models/m_product.php");
        $m_product = new m_product();
        $id = addslashes($_POST['id']);
        $code = addslashes($_POST['code']);
        $name = addslashes($_POST['name']);
        $price = addslashes($_POST['price']);
        $discount = addslashes($_POST['discount']);
        $image = $_FILES['image'];
        $old_image = addslashes($_POST['image_old']);
        $loai = addslashes($_POST['category']);
        $mota = addslashes($_POST['description']);
        $dacbiet = addslashes($_POST['special']);
        if(isset($_POST['updateProduct'])){
            $random_name = bin2hex(rand(10000,999999999)).".jpg";
            $updateProduct = $m_product->update($id, $code, $name, $price, $discount, $image, $loai, $mota, $dacbiet, $random_name, $old_image);
            if($updateProduct){
                $msg = 'Cập nhật thành công sản phẩm #'.$id.' !';
                header("location: Products.php?id=".$id."&msg=".urlencode($msg));
            }
        }
    }

    public function delete(){
        
    }

    public function comments(){
        $id = $_GET['id'];
        include ("models/m_product.php");
        $m_product = new m_product();
        $comments = $m_product->get_products_comment($id);
        $view = "views/information/commentInfo.php";
        include ("templates/layout.php");
    }
}
// làm tính năng đăng nhập nhảy vào trang home.php
// nếu như không đăng nhập mà vào link của home.php sẽ bị bật về trang login
// làm tính năng đăng xuất
//cắt trang chart html