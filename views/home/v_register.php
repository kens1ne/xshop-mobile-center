<div class="login-form">
    <h3 class="heading">Đăng Kí Tài Khoản</h3>
    <?php if(isset($_SESSION['error_register'])) {?>
    <h2 style="text-align:center;color: red"><?=$_SESSION['error_register'];?></h2>
    <?php } ?>
    <p>Nếu bạn chưa có tài khoản, điền các thông tin đăng ký tại đây</p>
    <form action="action-register.php" method="POST" class="form-input">
        <input type="text" name="username" placeholder="Nhập tên đăng nhập">
        <input type="text" name="hovaten" placeholder="Nhập họ và tên">
        <input type="text" name="phone" placeholder="Nhập số điện thoại">
        <input type="email" name="email" placeholder="Nhập email của bạn">
        <input type="password" name="password" placeholder="Tạo mật khẩu">

        <button type="submit" name="btn_register">Đăng Kí</button>
    </form>
    <a href="login.html" class="link-login">Bạn đã có tài khoản ? <b>Đăng nhập</b></a>
</div>