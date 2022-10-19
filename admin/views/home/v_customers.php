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
                        <?php if(isset($_GET['msg'])){?>
                        <div class="alert alert-info alert-dismiss">
                            <?=$_GET['msg'];?>
                        </div>
                        <?php } ?>
                        <table id="customers_table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Mã KH </th>
                                    <th>Họ Và Tên</th>
                                    <th>Tên đăng nhập</th>
                                    <th>Địa Chỉ email</th>
                                    <th>Hình ảnh</th>
                                    <th>Vai Trò</th>
                                    <th>Action</th>
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
                                        <button class="btn btn-primary"
                                            onclick="editUser('getInfo','<?=$value->{'id'};?>')" data-toggle="modal"
                                            data-target="#edit_user">Sửa</button>
                                        <?php if($_SESSION['user']->{'id'} != $value->{'id'}) { ?>
                                        <button class="btn btn-danger"
                                            onclick="deleteUser('delete','<?=$value->{'id'};?>')">Xóa</button>
                                        <?php } ?>

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

<script>
function editUser(type, id) {
    $.ajax({
        url: 'manager-user.php',
        type: 'POST',
        dataType: 'html',
        data: {
            type,
            id
        },
        success: function(data) {
            $("#result").html(data);
        }
    })
}

function deleteUser(type, id) {
    if (confirm("Bạn cóa muốn xóa người dùng " + id + " không ?") == true) {
        $.ajax({
            url: 'manager-user.php',
            type: 'POST',
            dataType: 'html',
            data: {
                type,
                id
            },
            success: function(data) {
                window.location.href = "Customers.php?msg=" + data;
            }
        })
    }
}

function changesInfo(type, id) {
    const name = $("#name").val();
    const email = $("#email").val();
    const phone = $("#phone").val();
    const rule = $("#rule").val();
    $.ajax({
        url: 'manager-user.php',
        type: 'POST',
        dataType: 'html',
        data: {
            type,
            id,
            name,
            email,
            phone,
            rule
        },
        beforeSend: function() {
            $("#changes").html(`Vui lòng chờ ...`);
        },
        success: function(data) {
            $("#result_change").html(data);
            $("#changes").html(`Save changes`);
            setTimeout(function() {
                window.location.reload();
            }, 1000);
        }
    })
}
</script>