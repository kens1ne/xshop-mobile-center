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
            <div class="col-6">
                <!-- end quản lí loại hàng  -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Thống kê hàng hóa</h3>
                    </div>

                    <div class="card-body">
                        <table id="customers_table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Loại hàng</th>
                                    <th>Số lượng</th>
                                    <th>Giá cao nhất</th>
                                    <th>Giá thấp nhất</th>
                                    <th>Giá trung bình</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list as $value) { ?>
                                <tr>
                                    <td><?=$value->{'ten_loai'};?></td>
                                    <td><?=number_format($value->{'COUNT(hang_hoa.id_loai)'});?></td>
                                    <td><?=number_format($value->{'MAX(hang_hoa.don_gia)'});?> đ</td>
                                    <td><?=number_format($value->{'MIN(hang_hoa.don_gia)'});?> đ</td>
                                    <td>
                                        <?=number_format($value->{'AVG(hang_hoa.don_gia)'});?> đ
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
            <div class="col-6">
                <!-- end quản lí khách hàng -->
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Biểu đồ</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="donutChart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>

                </div>
            </div>

        </div>

    </div>

</section>
<script>
var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
var donutData = {
    labels: <?=$categoryList;?>,
    datasets: [{
        data: <?=$totalList;?>,
        backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
    }]
}
var donutOptions = {
    maintainAspectRatio: false,
    responsive: true,
}
//Create pie or douhnut chart
// You can switch between pie and douhnut using the method below.
new Chart(donutChartCanvas, {
    type: 'doughnut',
    data: donutData,
    options: donutOptions
})
</script>