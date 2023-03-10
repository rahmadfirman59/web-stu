<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('assets/sbadmin/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('assets\sbadmin\vendor\bootstrap\css\bootstrap.min.css')); ?>" rel="stylesheet" >
    <link href="<?php echo e(asset('assets\sbadmin\css\datatables.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets\sbadmin\css\style-addtional.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/sbadmin/css/sb-admin-2.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets\sbadmin\vendor\select2\dist\css\select2.min.css')); ?>" rel="stylesheet" >

    <style>
        .dataTables_wrapper{
            font-size: 13px!important;
        }

        .table tbody td{
            vertical-align: middle;
        }

        #kategori_id.is-invalid + span.select2-container .selection .select2-selection--single{
            border: 1px solid red!important;
        }

        .select2 > *{
            font-size: 14px;
        }

        .select2-selection{
            height: calc(1.5em + .75rem + 2px)!important;
        }

        .select2-results__option{
            font-size: 14px!important;
        }

        .card-header-action{
            padding-left: 13px !important;
            padding-right: 13px !important;
        }
        
        .btn-warning{
            font-size: 12px!important;
            box-shadow: 0 2px 6px #ffc473;
            background: #ffa426;
        }

        .sidebar-brand-text{margin: 0!important}
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <div class="sidebar-brand-text text-toggle  mx-3 d-inline">PT - STU</div>
                </div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php echo e((request()->is('admin/dashboard')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
                
                
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Slider
            </div>

            <li class="nav-item <?php echo e((request()->is('admin/slider')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('slider')); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Slider</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                Portofolio
            </div>

            <li class="nav-item <?php echo e((request()->is('admin/portofolio/kategori')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.portofolio.kategori')); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kategori</span></a>
            </li>

            <li class="nav-item <?php echo e((request()->is('admin/portofolio/image')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.portofolio.image')); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Image</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                Patner
            </div>

            <li class="nav-item <?php echo e((request()->is('admin/patner')) ? 'active' : ''); ?>">
                <a class="nav-link" href="<?php echo e(route('admin.patner')); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Patner</span></a>
            </li>


            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="<?php echo e(asset('assets/sbadmin/img/undraw_profile_1.svg')); ?>"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler ?? 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="<?php echo e(asset('assets/sbadmin/img/undraw_profile_2.svg')); ?>"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun ?? 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="<?php echo e(asset('assets/sbadmin/img/undraw_profile_3.svg')); ?>"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo e(asset('assets/sbadmin/img/undraw_profile.svg')); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <?php echo $__env->yieldContent('content'); ?>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php echo $__env->yieldContent('modal'); ?>
    
    <!-- Modal Load-->
    <div class="modal fade" role="dialog" id="modal_loading" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body pt-0" style="background-color: #FAFAF8; border-radius: 6px;">
                <div class="text-center">
                    <img style="border-radius: 4px; height: 140px;" src="<?php echo e(asset('assets/sbadmin/img/project/icon/loader.gif')); ?>" alt="Loading">
                    <h6 style="position: absolute; bottom: 10%; left: 37%;" class="pb-2">Mohon Tunggu..</h6>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(asset('assets/sbadmin/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets\sbadmin\vendor\bootstrap\js\bootstrap.bundle.min.js')); ?>"></script>
    
    <!-- Core plugin JavaScript-->
    
    
    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(asset('assets/sbadmin/js/sb-admin-2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/sbadmin/vendor/sweetalert/sweetalert.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/sbadmin/js/script-additional.js')); ?>"></script>
    
    <!-- Page level custom scripts -->
    <script src="<?php echo e(asset('assets/sbadmin/js/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets\sbadmin\vendor\select2\dist\js\select2.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('js'); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\web-stu\code\resources\views/admin/layouts/layouts.blade.php ENDPATH**/ ?>