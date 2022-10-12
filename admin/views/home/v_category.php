<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ADMIN SITE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Thêm Mới Loại </h3>
                    </div>


                    <form action="manager-category.php" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tên Loại </label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" name="addCategory" class="btn btn-primary">Thêm </button>
                            <button type="reset" class="btn btn-primary">Nhập Lại</button>
                        </div>
                    </form>
                </div>
                <!-- quản lí loại hàng  -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Quản Lý Loại Hàng </h3>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Mã Loại</th>
                                    <th>Tên Loại</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($categories as $value) {?>
                                <tr>
                                    <td><?=$value->{'id'};?></td>
                                    <td><?=$value->{'ten_loai'};?></td>
                                    <td><a href="" class="btn btn-primary"> Sửa</a></td>
                                    <td><a href="" class="btn btn-danger"> Xóa</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- end quản lí loại hàng  -->



            </div>

        </div>

    </div>

</section>