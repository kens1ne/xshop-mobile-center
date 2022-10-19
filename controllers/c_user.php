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
            if($check->{'id'}){
                $_SESSION['id'] = $check;
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
            if($checkUsername->{'id'}){
                $_SESSION['error_register'] = 'Tên đăng nhập đã tồn tại, vui lòng thử lại !';
                header('Location: register.php');
            }else{
                $register = $user->checkRegister($username,$name, $phone, $email, $password);
                if($register == true){
                    $_SESSION['register_success'] = 'Đăng ký thành công, vui lòng đăng nhập';
                    header('Location: login.php');
                }
            }
        }
    }
    public function actionCmt(){
        include ("models/m_user.php");
        $m_user = new m_user();
        $id_hh = $_POST['id'];
        $id_cmt = $_SESSION['id']->{'id'};
        $comment = $_POST['comment'];
        $actionComment = $m_user->insertCmt($comment, $id_hh, $id_cmt);
        if($actionComment){
            header("location: detail.php?id=".$id_hh);
        }
    }
    public function logout() {
        session_destroy();
        header("Location: index.php");
    }
}
?>