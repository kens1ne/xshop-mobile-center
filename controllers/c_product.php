<?php
class c_product {
    public function __construct()
    {
    }

    public function index() {
        
    }
    public function cart(){
        $id = $_GET['id'];
        include("models/m_product.php");
        $m_product = new m_product();
        $data = $m_product->get_products_info($id);
        $view = "views/product/v_cart.php";
        include ("templates/front-end/layout.php");
    }

    public function actionBuy(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        include("models/m_product.php");
        $m_product = new m_product();
        $actionBuy = $m_product->purchase($id, $_SESSION['id']->{'id'}, $name, $phone, $address);
        if($actionBuy){
            header("location: order_success.php");
        }
    }

    public function cartSuccess(){
        $view = "views/product/v_success.php";
        include ("templates/front-end/layout.php");
    }
}
?>