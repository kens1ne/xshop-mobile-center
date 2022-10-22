<div class="login-form" style="padding-bottom:50px;">
    <h2 style="text-align:center;font-size: 40px; color: #F88644">X Shop</h2>
    <?php if(isset($_SESSION['error_login'])) {?>
    <h2 style="text-align:center;color: red"><?=$_SESSION['error_login'];?></h2>
    <?php } ?>
    <?php if(isset($_SESSION['register_success'])) {?>
    <h2 style="text-align:center;color: green"><?=$_SESSION['register_success'];?></h2>
    <?php } ?>
    <form class="form-input" action="action-login.php" method="POST">
        <input type="text" name="username" placeholder="Tên đăng nhập/Email/Số điện thoại">
        <br>
        <input type="password" name="password" placeholder="Mật khẩu">
        <br>
        <button type="submit" name="btn_dangnhap">ĐĂNG NHẬP</button>
    </form>
</div>