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
        <h2 style="color:red;font-size:20px;">Sản phẩm liên quan</h2>
        <div class="recommend-pro">
        <?php foreach( $get_recommend_pro as $data){?>
                                    <div class="col l-2-4 l-3-m m-4 c-6">
                                        <div class="container-product__item">
                                            <div class="container-product__item-heading">
                                                <div class="container-product__item-img"
                                                    style="background-image: url(<?=$data->{'hinh'}?>)"></div>
                                                ; <div class="container-product-guarantee">
                                                    <a href="detail.php?id=<?=$data->{'id'}?>"
                                                        class="container-product__item-link">
                                                        <div class="container-product-guarantee__heading">
                                                            <img src="https://mobilecity.vn/public/assets/img/icon-mobilecity-care.png"
                                                                alt="Guarantee"
                                                                class="container-product-guarantee__heading-img">
                                                            <h3 class="container-product-guarantee__heading-text">
                                                                MobileCity Care</h3>
                                                        </div>

                                                        <ul class="container-product-guarantee__list">
                                                            <li class="container-product-guarantee__item">BH 12 tháng nguồn, màn hình</li>
                                                            <li class="container-product-guarantee__item">Đổi mới 30 ngày đầu tiên</li>
                                                            <li class="container-product-guarantee__item">Tặng ốp lưng, dán cường lực</li>
                                                            <li class="container-product-guarantee__item">Hỗ trợ phần mềm trọn đời máy</li>
                                                        </ul>
                                                    </a>
                                                    <a href=${product.linkGuarantee}
                                                        class="container-product-guarantee__btn">Bảo hành vàng</a>
                                                </div>
                                            </div>
                                            <div class="container-product__item-wrap">
                                                <div class="container-product__item-info">
                                                    <a href="#" class="container-product__item-name">
                                                        <?=$data->{'ten_hh'}?>
                                                    </a>
                                                    <i class=" container-product__item-sale-icon fas fa-gift"></i>
                                                </div>
                                                <div class="container-product__item-buy">
                                                    <span class="container-product__item-price">
                                                        <?=number_format($data->{'don_gia'})?>
                                                    </span>
                                                    <a href=${product.linkProduct}
                                                        class="container-product__item-btn">MUA</a>
                                                </div>
                                            </div>
                                            <ul class="container-product__item-gifts-list">
                                                <li class="container-product__item-gift">
                                                1. Tặng: 
                                                    <span class="container-product__item-gift--highlight">
                                                    Cường lực - Ốp lưng - Tai nghe
                                                    </span>
                                                    khi mua BHV
                                                </li>
                                                <li class="container-product__item-gift">
                                                2. Giảm: 
                                                    <span class="container-product__item-gift--highlight">
                                                        100K
                                                    </span>
                                                    áp dụng HSSV mua BHV tại 
                                                    <span class="container-product__item-gift--highlight">
                                                    42 phố Vọng
                                                    </span>
                                                </li>
                                            </ul>
                                            <ul class="container-product-marker__list ${markers}">
                                                <li
                                                    class="container-product-marker__item container-product-marker__item--new">
                                                    Mới</li>
                                                <li
                                                    class="container-product-marker__item container-product-marker__item--hot">
                                                    Hot</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php }?>
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