<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ADMIN SITE</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Khách Hàng</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <ediv class="col-12">
                <!-- end quản lí loại hàng  -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Quản Lý Khách Hàng </h3>
                    </div>

                    <div class="card-body">
                        <table id="example3" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Mã KH </th>
                                    <th>Họ Và Tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Địa Chỉ email</th>
                                    <th>Hình ảnh</th>
                                    <th>Vai Trò</th>
                                    <th>Chức vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $value) { ?>
                                <tr>
                                    <td><?=$value->{'id'};?></td>
                                    <td><?=$value->{'name'};?></td>
                                    <td><?=$value->{'username'};?></td>
                                    <td><?=$value->{'email'};?></td>
                                    <td><?=$value->{'phone'};?></td>
                                    <td><button
                                            class="btn btn-<?= ($value->{'admin'} == 0) ? "primary": "danger" ?> btn-xs"><?= ($value->{'admin'} == 0) ? "Thành viên": "Quản trị viên" ?></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary">Sửa</button>
                                        <button class="btn btn-danger">Xóa</button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Chọn Tất Cả </button>
                        <button type="submit" class="btn btn-primary">Bỏ Chọn Tất Cả </button>
                        <button type="submit" class="btn btn-primary">Xóa Các Mục Đã Chọn </button>
                    </div>

                </div>
                <!-- end quản lí khách hàng -->
        </div>

    </div>

    </div>

</section>