<section class="cart">
    <div class="cart-detail">
    <div class="img-pro">
        <h2><?=$data->{'ten_hh'};?></h2>
        <img src="<?=$data->{'hinh'};?>" alt="">
        <br>
        <span class="price"><b><?=number_format($data->{'don_gia'});?></b> đ</span>
    </div>
    <div>
        <form action="action-buy.php" method="POST">
          <h2 >Thông tin người mua </h2>
          <input name="name" type="text" placeholder="Họ Tên Người Nhận" class="padding">
          <input name="id" type="hidden" value="<?=$data->{'id'};?>">
          <br>
          <input name="phone" type="text" placeholder="Số Điện Thoại" class="padding">
          <br>
          <input name="address" type="text" placeholder="Địa Chỉ" class="padding">
         
          <textarea rows="3" name="order-note" placeholder="Ghi chú đơn hàng"></textarea>
            <button class="btn-buy" type="submit">Đặt Mua</button>
        </form>
    </div>
    </div>
   
</section>