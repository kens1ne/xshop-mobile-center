<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ADMIN SITE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php if(isset($_GET['msg'])){?>
                <div class="alert alert-info alert-dismiss">
                    <?=$_GET['msg'];?>
                </div>
                <?php } ?>
                <!-- sưa sản phẩm -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Sửa sản phẩm #<?=$data->{'id'};?></h3>
                    </div>


                    <form action="manager-product.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Mã Hàng Hóa</label>
                                <input type="hidden" name="id" class="form-control" value="<?=$data->{'id'};?>"
                                    placeholder="">
                                <input type="text" name="code" class="form-control" value="<?=$data->{'code'};?>"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Tên Hàng Hóa</label>
                                <input type="text" name="name" class="form-control" value="<?=$data->{'ten_hh'};?>"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Đơn Giá</label>
                                <input type="number" name="price" class="form-control" value="<?=$data->{'don_gia'};?>"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Giảm Giá (%)</label>
                                <input type="number" name="discount" class="form-control"
                                    value="<?=$data->{'giam_gia'};?>" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hình Ảnh</label>
                                <input type="file" name="image" class="form-control" placeholder="">
                                <input type="hidden" name="image_old" class="form-control"
                                    value="<?=$data->{'hinh'};?>">
                                <img src="public/upload/<?=$data->{'hinh'};?>" widtd="120px" height="120px" alt="">
                            </div>
                            <div class="form-group">
                                <label>Danh mục
                                </label>
                                <select class="custom-select form-control-border" name="category">
                                    <?php foreach ($categories as $value) { ?>
                                    <option value="<?=$value->{'id'};?>"><?=$value->{'ten_loai'};?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Loại Hàng
                                </label>
                                <select class="custom-select form-control-border" name="special">
                                    <option value="0">Hàng thường</option>
                                    <option value="1">Hàng đặc biệt</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mô Tả</label>
                                <textarea class="form-control" name="description"
                                    id="summernote"><?=urldecode($data->{'mo_ta'});?></textarea>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" name="updateProduct" class="btn btn-primary">Cập Nhật </button>
                            <button type="reset" class="btn btn-primary">Nhập Lại</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

</section>
<script>

</script>