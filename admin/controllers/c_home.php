<?php
class c_home {
    public function __construct()
    {
    }
    
    public function index() {
        $view = "views/home/v_home.php";
       include ("templates/layout.php");
    }

    public function category() {
        include ("models/m_category.php");
        $category = new m_category();
        $categories = $category->category_list();
        $view = "views/home/v_category.php";
        include ("templates/layout.php");
    }

    public function products() {
        include ("models/m_product.php");
        include ("models/m_category.php");
        $category = new m_category();
        $categories = $category->category_list();
        $m_product = new m_product();
        $products = $m_product->product_list();
        $view = "views/home/v_products.php";
        include ("templates/layout.php");
    }

    public function customers() {
        include ("models/m_user.php");
        $m_user = new m_user();
        $users = $m_user->user_list();
        $view = "views/home/v_customers.php";
        include ("templates/layout.php");
    }

    public function comments() {
        include("models/m_product.php");
        $m_product = new m_product();
        $list = $m_product->load_comments();
        $view = "views/home/v_comments.php";
        include ("templates/layout.php");
    }
}
// làm tính năng đăng nhập nhảy vào trang home.php
// nếu như không đăng nhập mà vào link của home.php sẽ bị bật về trang login
// làm tính năng đăng xuất
//cắt trang chart html