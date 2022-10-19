<div class="container">
    <div class="detail">
        <h2 style="font-size:25px"><?= $get_products -> {'ten_hh'}?>
        </h2>
        <div class="flex">
            <div class="img-pro">
                <img src="https://cdn.mobilecity.vn/mobilecity-vn/images/2022/02/w300/nubia-red-magic-7-den.jpg" alt="">
            </div>
            <div class="detail-pro">
                <section class="flex-pro">
                    <p class="locate">Giá tại:</p>
                    <div>
                        <form form action="">
                            <select name="" id="" class="select">
                                <option value="0">Hà Nội</option>
                            </select>
                        </form>
                    </div>
                </section>
                <section>
                    <input type="checkbox" checked> <span class="status">Còn Hàng</span>
                    <div class="default">
                        <span>Thời gian bảo hành:</span> <span style="font-weight: 600;">BH Thường 12 Tháng</span>
                        <p>Giao hàng tận nơi miễn phí trong 30 phút</p>
                    </div>
                    <div class="pro-price">
                        <span><?= number_format($get_products -> {'don_gia'})?> -</span> <span
                            style="text-decoration:line-through">12,750,000 đ</span>
                    </div>
                    <p class="desc" style="font-size: 15px; text-align:justify ;line-height: 20px;padding-top: 20px;">
                        <?= urldecode($get_products -> {'mo_ta'})?>
                    </p>
                    <div class="btn">
                        <button class="buy-pro">Mua Ngay </button>
                    </div>
                    <form action="">
                </section>
            </div>


        </div>
        <div class="comment">
            <form action="action_cmt.php" method="POST">
                <p><label style="font-size:25px;">Bình Luận </label></p>
                <textarea name="comment" rows="5"></textarea>
                <br>
                <input class="btn_cmt" type="submit" value="Gửi Bình Luận ">
            </form>
            <div class="list-comment">
                <?php foreach ($get_comments as $data){?>
                <div class="user-comment">
                    <h2 style="font-size:20px"> <?= ($data -> {'name'})?></h2>
                    <p style="font-size:18px">
                        <?= ($data -> {'noi_dung'})?>
                    </p>
                    <span>
                        <?= ($data -> {'ngay_bl'})?>
                    </span>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>