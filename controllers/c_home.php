<?php
class c_home {
    public function __construct()
    {
    }

    public function index() {
        include ('models/m_product.php');
        $product= new m_product();
        $get_product = $product -> get_product();
        $get_category = $product -> get_category();
        $get_products = $product -> get_products();
        $view = "views/home/v_home.php";  
        include ("templates/front-end/layout.php");
    }

    public function detail(){
        include ('models/m_product.php');
        $product= new m_product();
        $id = $_GET['id'];
        $product->update_View($id);
        $get_products = $product -> get_products_info($id);
        $get_comments = $product -> get_products_comment($id);
        $view = "views/home/v_detail.php";


        include ("templates/front-end/layout.php");
    }
}
?>