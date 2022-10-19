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
                        <h3 class="card-title">Quản Lý Bình Luận</h3>
                    </div>

                    <div class="card-body">
                        <table id="customers_table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID sản phẩm</th>
                                    <th>Sản phẩm</th>
                                    <th>Số bình luận</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list as $value) { ?>
                                <tr>
                                    <td><?=$value->{'id'};?></td>
                                    <td><a href="/detail.php?id=<?=$value->{'id'};?>"><?=$value->{'ten_hh'};?></a></td>
                                    <td><?=$value->{'COUNT(*)'};?></td>
                                    <td>
                                        <a href="Comments.php?id=<?=$value->{'id'};?>" class="btn btn-danger">Xem chi
                                            tiết</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                </div>
                <!-- end quản lí khách hàng -->
        </div>

    </div>

    </div>

</section>

<div class="modal fade" id="edit_user">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!--<div class="modal-header">
                <h4 class="modal-title">Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
                                -->
            <div id="result"></div>
        </div>

    </div>

</div>