<div class="container">
    <div class="detail">
        <h2 style="font-size:25px"><?= $get_products -> {'ten_hh'}?>
        </h2>
        <div class="flex">
            <div class="img-pro" >
                <img src=" <?= urldecode($get_products -> {'hinh'})?>" alt="">
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
                        <a href="cart.php?id=<?=$get_products->{'id'}?>" class="buy-pro">Mua Ngay </a>
                    </div>
                    
                </section>
            </div>


        </div>
        <div class="comment">
            <form action="action-cmt.php" method="POST">
                <p><label style="font-size:25px;">Bình Luận </label></p>
                <textarea name="comment" rows="5"></textarea>
                <input type="hidden" name="id" value="<?= $get_products -> {'id'}?>">
                <br>
                <button class="btn_cmt" type="submit" >Gửi Bình Luận </button>
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