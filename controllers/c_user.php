<?php
class c_user {
    public function __construct()
    {
    }

    public function login() {
        $view = "views/home/v_login.php";
        include ("templates/front-end/layout.php");
    }

    public function actionLogin() {
        include ("models/m_user.php");
        $user = new m_user();
        if(isset($_POST['btn_dangnhap'])){
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            $check = $user->checkLogin($username, $password);
            if($check->{'ma_nguoi_dung'}){
                $_SESSION['user'] = $username;
                header("Location: index.php");
            }else{
                $_SESSION['error_login'] = 'Tài khoản và mật khẩu không chính xác';
                header("Location: login.php");
            }
        }
    }

    public function register() {
        $view = "views/home/v_register.php";
        include ("templates/front-end/layout.php");
    }

    public function actionRegister() {
        include ("models/m_user.php");
        $user = new m_user();
        if(isset($_POST['btn_register'])){
            $username = addslashes($_POST['username']);
            $name = addslashes($_POST['hovaten']);
            $phone = addslashes($_POST['phone']);
            $email = addslashes($_POST['email']);
            $password = addslashes($_POST['password']);
            $checkUsername = $user->checkUsername($username);
            if(!$checkUsername){
                $_SESSION['error_register'] = 'Tên đăng nhập đã tồn tại';
            }else{
                $user->checkRegister($username,$password)
            }
        }
    }
    
    public function logout() {
        session_destroy();
        header("Location: index.php");
    }
}
?>