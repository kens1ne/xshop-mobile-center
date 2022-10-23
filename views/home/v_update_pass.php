<?php if(isset($_GET['msg'])){?>
    <p style="color:red;font-size:25px;text-align:center;">
    <?=  $_GET['msg'];?>
    </p>

<?php } ?>
<style>
.container-update-form{
    width:1280px;
    margin: 0 auto;
    display:grid;
    grid-template-columns: 25% 75%;
    column-gap: 50px;

}

.update-form{
    width: 300px;
    margin: 0 auto;
    font-family: 'Quicksand', sans-serif;
    margin-right: 250px;
    margin-top:25px;

    

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
.table-order{
    margin-top:20px;    
    
    font-family:Arial,Helvetica;
}
table, th, td{
            border:1px solid black;
        }
        table{
            border-collapse:collapse;
            width:100%;
        }
        th, td{
            text-align:left;
            padding:23px;
            
            font-size:15px; 
            

        }
        tr:hover{
            background-color:#ddd;
            cursor:pointer;
        }
.first-column{
    background-color: #48335E;
    color: #fff;
}
</style>
<div class="container-update-form">
<form action="action-updatePass.php" method="POST"  class="update-form">
    <h2 style="padding-left:">ĐỔI MẬT KHẨU</h2>
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
<div class="table-order">
<h2 style="text-align:center;">LỊCH SỬ MUA HÀNG</h2>
<table>
    
        <tr class="first-column">
            <th>ID</th>
            <th>Tên khách hàng</th>
            <th>Tên sản phẩm</th>
            <th>Người đặt</th>
            <th>ADDRESS</th>
            <th>SDT</th>
            <th>Trạng Thái</th>
        </tr>
        <?php foreach($orderList as $order): ?>
        <tr>
            <td><?= $order->{'id'}?></td>
            <td><?= $order->{'ten_kh'}?></td>
            <td><?= $order->{'ten_hh'}?></td>
            <td><?= $order->{'username'}?></td>
            <td><?= $order->{'address'}?></td>
            <td><?= $order->{'sdt'}?></td>
            <td>Đang giao</td>

        </tr>
        <?php endforeach ?>
        

    </table>
</div>
</div>
