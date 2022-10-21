<?php if(isset($_GET['msg'])){?>
    <p style="color:red;font-size:25px;text-align:center;">
    <?=  $_GET['msg'];?>
    </p>

<?php } ?>
<style>
.update-form{
    width: 30%;
    margin: 0 auto;
    font-family: 'Quicksand', sans-serif;

}
.old-pass{
    padding: 15px 15px;
    border: none;
    background-color: #F0F2F5;
    font-family: 'Quicksand', sans-serif;
    outline: none;
    margin: 5px 0;
    border-radius: 5px;
    transition: all .2s linear;
}
.new-pass{
    padding: 15px 15px;
    border: none;
    background-color: #F0F2F5;
    font-family: 'Quicksand', sans-serif;
    outline: none;
    margin: 5px 0;
    border-radius: 5px;
    transition: all .2s linear;
}
p{
    font-size: 20px;
}
.login-form form button{
    padding: 5px 20px 5px 20px;
    border-radius: 5px;
    border: 1px solid #F88644;
    font-size: 18px;
    font-weight: bold;
    color: white;
    background: #F88644;
    cursor: pointer;
}
</style>
<form action="action-updatePass.php" method="POST"  class="update-form">

    <p>
        Nhập mật khẩu cũ
    </p>
    <input type="password" name="currentPass" class="old-pass">
    <p>
        Nhập mật khẩu mới
    </p>
    <input type="password" name="newPass" class="new-pass">
    <br>
    <p>
        Nhập lại mật khẩu mới
    </p>
    <input type="password" name="rePass" class="new-pass">
    <br>
    <button type="submit" name="updatePass">Cập Nhật</button>

</form>