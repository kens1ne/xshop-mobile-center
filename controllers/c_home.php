<?php
class c_home {
    public function __construct()
    {
    }

    public function index() {
        $view = "views/home/v_home.php";
        include ("templates/front-end/layout.php");
    }
}
?>