<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">QUẢN TRỊ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?=$_SESSION['user']->{'username'}?></a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="home.php" class="nav-link">
                        <i class="nav-icon fa-solid fa-home"></i>
                        <p>
                            Bảng điều khiển
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Category.php" class="nav-link">
                        <i class="nav-icon fa-solid fa-tag"></i>
                        <p>
                            Loại Hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Products.php" class="nav-link">
                        <i class="nav-icon fa-solid fa-cart-shopping"></i>
                        <p>
                            Hàng Hóa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Customers.php" class="nav-link">
                        <i class="nav-icon fa-solid fa-user"></i>
                        <p>
                            Khách Hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Comments.php" class="nav-link">
                        <i class="nav-icon fa-solid fa-comment"></i>
                        <p>
                            Bình Luận
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Analytics.php" class="nav-link">
                        <i class="nav-icon fa-solid fa-chart-pie"></i>
                        <p>
                            Thống Kê
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>