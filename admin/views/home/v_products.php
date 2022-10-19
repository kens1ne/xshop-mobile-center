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
                <!-- thêm hàng hóa -->
                <div class="card card-primary">

                    <div class="card-header">
                        <h3 class="card-title">Thêm Hàng Hóa</h3>
                    </div>


                    <form action="manager-product.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Mã Hàng Hóa</label>
                                <input type="text" name="code" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Tên Hàng Hóa</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Đơn Giá</label>
                                <input type="number" name="price" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Giảm Giá (%)</label>
                                <input type="number" name="discount" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Hình Ảnh</label>
                                <input type="file" name="image" class="form-control" placeholder="">
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
                                <textarea class="form-control" name="description" id="summernote"></textarea>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" name="addProduct" class="btn btn-primary">Thêm </button>
                            <button type="reset" class="btn btn-primary">Nhập Lại</button>
                        </div>
                    </form>
                </div>
                <!-- quản lí hàng hóa  -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Quản Lý Hàng Hóa </h3>
                    </div>

                    <div class="card-body">
                        <table id="products" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Mã Hàng Hóa </th>
                                    <th>Tên Hàng Hóa</th>
                                    <th>Đơn Giá</th>
                                    <th>Giảm Giá</th>
                                    <th>Ngày Nhập</th>
                                    <th>Lượt Xem</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($products as $value) { ?>
                                <tr>
                                    <td><?=$value->{'code'};?></td>
                                    <td><?=$value->{'ten_hh'};?></td>
                                    <td><?=$value->{'don_gia'};?></td>
                                    <td><?=$value->{'giam_gia'};?></td>
                                    <td><?=$value->{'ngay_nhap'};?></td>
                                    <td><?=$value->{'so_luot_xem'};?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                </div>
                <!-- end quản lí hàng hóa  -->

            </div>

        </div>

    </div>

</section>