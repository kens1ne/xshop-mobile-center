<?php
class c_product {
    public function add() {
        $m_product = new m_product();
        $code = addslashes($_POST['code']);
        $name = addslashes($_POST['name']);
        $price = addslashes($_POST['price']);
        $discount = addslashes($_POST['discount']);
        $image = $_FILES['image'];
        $loai = addslashes($_POST['category']);
        $mota = addslashes($_POST['description']);
        if(isset($_POST['addProduct'])){
            $addProduct = $m_product->add($code, $name, $price, $discount, $image, $loai, $mota);
            if($addProduct){
                header("location: Products.php");
            }
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