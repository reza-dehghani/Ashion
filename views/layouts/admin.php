<!DOCTYPE html>
<html lang="fa-IR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?= $params['title']; ?> | پنل مدیریت</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= $params['dependencyAddr'] ?>plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $params['dependencyAddr'] ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="<?= $params['dependencyAddr'] ?>dist/css/bootstrap-rtl.min.css">
  <!-- template rtl version -->
  <link rel="stylesheet" href="<?= $params['dependencyAddr'] ?>dist/css/custom-style.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/panel" class="nav-link">خانه</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">تماس</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav mr-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-comments-o"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 ml-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    <?php 
                    ?>
                    <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                  </h3>
                  <p class="text-sm">با من تماس بگیر لطفا...</p>
                  <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    پیمان احمدی
                    <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                  </h3>
                  <p class="text-sm">من پیامتو دریافت کردم</p>
                  <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    سارا وکیلی
                    <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                  </h3>
                  <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                  <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>4 ساعت قبل</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-bell-o"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
            <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-envelope ml-2"></i> 4 پیام جدید
              <span class="float-left text-muted text-sm">3 دقیقه</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-users ml-2"></i> 8 درخواست دوستی
              <span class="float-left text-muted text-sm">12 ساعت</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fa fa-file ml-2"></i> 3 گزارش جدید
              <span class="float-left text-muted text-sm">2 روز</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fa fa-th-large"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/panel" class="brand-link">
        <img src="<?= $params['dependencyAddr'] ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <div>
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">
              <?php
                    use app\core\Application;
                    use app\models\User;
                    $user = new User();
                    $statement = Application::$app->db->prepare("select * from user where telephone = :telephone");
                    $statement->bindValue(":telephone", '09000000000');
                    $statement->execute();
                    $statement = $statement->fetchObject();
                    $user = new User($statement);
                    echo $user->getDisplayName();
                    ?>
              </a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
              <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>
                    محصولات
                    <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../panel/addProduct" class="nav-link active">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>اضافه کردن کالا</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../panel/productCategory" class="nav-link active">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>دسته بندی</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../panel/attribute" class="nav-link active">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>ویژگی ها</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../panel/discount" class="nav-link active">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>کوپن تخفیف</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>صفحه غیر فعال</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="../admin/logout.php" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>
                    خروج
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-th"></i>
                  <p>
                    لینک ساده
                    <span class="right badge badge-danger">جدید</span>
                  </p>
                </a>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"><?= $params['pageTitle']; ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="/panel">خانه</a></li>
                <li class="breadcrumb-item active"><?= $params['pageTitle']; ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content-header -->

      {{Content}}


      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
          <h5>Title</h5>
          <p>Sidebar content</p>
        </div>
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= $params['dependencyAddr'] ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= $params['dependencyAddr'] ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= $params['dependencyAddr'] ?>dist/js/adminlte.min.js"></script>
</body>

</html>