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
                        <?php if(isset($_GET['msg'])){?>
                        <div class="alert alert-info alert-dismiss">
                            <?=$_GET['msg'];?>
                        </div>
                        <?php } ?>
                        <table id="categories_table" class="table table-bordered table-hover">
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
                                    <td>
                                        <button class="btn btn-primary"
                                            onclick="editCategory('getInfo','<?=$value->{'id'};?>')" data-toggle="modal"
                                            data-target="#edit_category">Sửa</button>
                                        <button class="btn btn-danger"
                                            onclick="deleteCategory('delete','<?=$value->{'id'};?>')">Xóa</button>
                                    </td>
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
<div class="modal fade" id="edit_category">
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
function editCategory(type, id) {
    $.ajax({
        url: 'manager-category.php',
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

function deleteCategory(type, id) {
    if (confirm("Bạn cóa muốn xóa loại có mã loại " + id + " không ?") == true) {
        $.ajax({
            url: 'manager-category.php',
            type: 'POST',
            dataType: 'html',
            data: {
                type,
                id
            },
            success: function(data) {
                window.location.href = "Category.php?msg=" + data;
            }
        })
    }
}

function changesInfo(type, id) {
    const name = $("#name").val();
    $.ajax({
        url: 'manager-category.php',
        type: 'POST',
        dataType: 'html',
        data: {
            type,
            id,
            name
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