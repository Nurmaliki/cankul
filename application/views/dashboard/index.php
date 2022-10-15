<!DOCTYPE html>
<html lang="en" class="no-focus">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="csrf-token" content="XxmAuXuEJKxTdyLTzW0hlfvymde8fp1nArkshAcV">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Beranda</title>

    <!-- style -->
    <meta name="description" content="Dasbor Penerima Dana &amp; UI Framework V3">
    <meta name="author" content="dsiteam">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dana Syariah - Dasbor Penerima Dana &amp; UI Framework V3">
    <meta property="og:site_name" content="Dana Syariah">
    <meta property="og:description" content="Dana Syariah - Dasbor Penerima Dana &amp; UI Framework V3">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="https://www.danasyariah.id/img/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="192x192" href="https://www.danasyariah.id/assetsBorrower/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.danasyariah.id/assetsBorrower/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/css">
    <link rel="stylesheet" id="css-main" href="<?= base_url('assets/dashboard') ?>/css/codebase.min.css">
    <!-- slick -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/slick-theme.css">
    <!-- end slick -->
    <!-- select2 -->
    <link href="<?= base_url('assets/dashboard') ?>/css/select2.min.css" rel="stylesheet">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <link rel="stylesheet" id="css-theme" href="<?= base_url('assets/dashboard') ?>/css/flat.css">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/simplemde.min.css">
    <!-- DropZone -->

    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/basic.css">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/dropzone.css">
    <!-- rangepicker 
        <link rel="stylesheet" href="https://www.danasyariah.id/assetsBorrower/css/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
		-->

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/dataTables.bootstrap4.css">
    <!-- sweetAlert -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/sweetalert2.min.css">
    <!-- datepicker -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/bootstrap-datepicker3.min.css">
    <!-- flatpickr -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/flatpickr.min.css">

    <script src="<?= base_url('assets/dashboard') ?>/js/jquery3.4.1.min.js.download"></script>
    <style>
        .bg-gradient-hijau {
            background: rgb(47, 122, 21);
            background: -moz-linear-gradient(51deg, rgba(47, 122, 21, 1) 0%, rgba(6, 119, 87, 1) 100%);
            background: -webkit-linear-gradient(51deg, rgba(47, 122, 21, 1) 0%, rgba(6, 119, 87, 1) 100%);
            background: linear-gradient(51deg, rgba(47, 122, 21, 1) 0%, rgba(6, 119, 87, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#2f7a15", endColorstr="#067757", GradientType=1);
        }

        .bg-gradient-hijau-2 {
            background: rgb(21, 122, 89);
            background: -moz-linear-gradient(51deg, rgba(21, 122, 89, 1) 0%, rgba(6, 95, 119, 1) 100%);
            background: -webkit-linear-gradient(51deg, rgba(21, 122, 89, 1) 0%, rgba(6, 95, 119, 1) 100%);
            background: linear-gradient(51deg, rgba(21, 122, 89, 1) 0%, rgba(6, 95, 119, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#157a59", endColorstr="#065f77", GradientType=1);
        }

        .bg-gradient-blue {
            background: rgb(21, 85, 122);
            background: -moz-linear-gradient(51deg, rgba(21, 85, 122, 1) 0%, rgba(6, 55, 119, 1) 100%);
            background: -webkit-linear-gradient(51deg, rgba(21, 85, 122, 1) 0%, rgba(6, 55, 119, 1) 100%);
            background: linear-gradient(51deg, rgba(21, 85, 122, 1) 0%, rgba(6, 55, 119, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#15557a", endColorstr="#063777", GradientType=1);
        }
    </style>
    <!-- END Stylesheets -->
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body>

    <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-narrow side-trans-enabled">

        <nav id="sidebar" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: -16.6667px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <!-- Sidebar Content -->
                                <div class="sidebar-content">
                                    <!-- Side Header -->
                                    <div class="content-header content-header-fullrow px-15 mt-10 " style="height: 90px !important">
                                        <!-- Mini Mode -->
                                        <div class="content-header-section sidebar-mini-visible-b">
                                            <!-- Logo -->
                                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                                <span class="text-dual-primary-dark">D</span><span class="text-primary">B</span>
                                            </span>
                                            <!-- END Logo -->
                                        </div>
                                        <!-- END Mini Mode -->

                                        <!-- Normal Mode -->
                                        <div class="content-header-section text-left pl-20 align-parent sidebar-mini-hidden">
                                            <!-- Close Sidebar, Visible only on mobile screens -->
                                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                                <i class="fa fa-times text-danger"></i>
                                            </button>
                                            <!-- END Close Sidebar -->

                                            <!-- Logo -->
                                            <div class="content-header-item ">
                                                <a class="link-effect font-w600 " href="https://www.danasyariah.id/borrower/beranda">
                                                    <span class="font-size-h3 text-primary">DSI </span><span class="font-size-h3 text-dual-primary-dark">Penerima Pendanaan</span>
                                                </a>
                                            </div>
                                            <!-- END Logo -->
                                        </div>
                                        <!-- END Normal Mode -->
                                    </div>
                                    <!-- END Side Header -->

                                    <!-- Side User -->
                                    <div class="content-side content-side-full content-side-user px-10 align-parent">

                                        <!-- Visible only in normal mode -->
                                        <div id="slide-side" class="sidebar-mini-hidden-b">
                                            <div class="block text-left bg-white mb-0" style="padding-bottom: 0px;">
                                                <p class="font-w700 pl-4 py-2">
                                                    <i class="fa fa-bell text-muted"></i>
                                                    <span class="dsiColor pl-10"> Informasi Pendanaan</span>
                                                </p>

                                                <!-- <div class="text-center bg-white mb-0 pb-5 ">
                            <a class="block-content block-content-full block-content-sm ">
                                <div class="font-size-h6 font-w600">Pendanaan X/2019...</div>
                                <div class="text-muted">Jatuh Tempo : 01/02/2019</div>
                            </a>
                        </div>
                        <div class="text-center bg-white mb-0 pb-5 ">
                            <a class="block-content block-content-full block-content-sm ">
                                <div class="font-size-h6 font-w600">Pendanaan X/2019...</div>
                                <div class="text-muted">Jatuh Tempo : 01/03/2019</div>
                            </a>
                        </div> -->

                                            </div>
                                        </div>
                                        <!-- END Visible only in normal mode -->
                                    </div>
                                    <!-- END Side User -->

                                    <!-- Side Navigation -->
                                    <div class="content-side content-side-full">
                                        <ul class="nav-main">
                                            <li>
                                                <a class="active" href="https://www.danasyariah.id/borrower/beranda">
                                                    <i class="si si-bar-chart"></i>
                                                    <span class="sidebar-mini-hide">Beranda</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="" href="https://www.danasyariah.id/borrower/lengkapi_profile_pendanaan_simple">
                                                    <i class="si si-paper-plane"></i>
                                                    <span class="sidebar-mini-hide">Ajukan Pendanaan</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="" href="https://www.danasyariah.id/borrower/pendanaan">
                                                    <i class="si si-doc"></i>
                                                    <span class="sidebar-mini-hide">Lihat Pendanaan</span>
                                                </a>
                                            </li>
                                            <!-- <li>
                    <a href="/borrower/lengkapi_profile_pendanaan_simple">
                        <i class="si si-book-open"></i>
                        <span class="sidebar-mini-hide">Riwayat Mutasi</span>
                    </a>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                        <i class="si si-settings"></i>
                        <span class="sidebar-mini-hide">Akun</span>
                    </a>
                    <ul>                            
                        <li>
                            <a href="/edit_profile_borrower">Edit Profile</a>
                        </li>
                        <li>
                            <a href="/notifikasi_borrower">Notifikasi</a>
                        </li>
                        <li>
                            <a href="/log_borrower">Log Aktifitas</a>
                        </li>
                        <li>
                            <a href="/faq_borrower">FAQ</a>
                        </li>
                        <li>
                            <a href="/lock_borrower">Lock Screen</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                        <i class="fa fa-lightbulb-o"></i>
                        <span class="sidebar-mini-hide">Theme <small>beta</small> </span>
                    </a>
                    <ul>                            
                        <li>
                            <i class="fa fa-moon-o float-left pt-10 pr-10"></i>
                            <a href="#" data-toggle="layout" data-action="sidebar_style_inverse_on"> Dark</a>
                        </li>
                        <li>
                            <i class="fa fa-sun-o float-left pt-10 pr-10"></i>
                            <a href="#" data-toggle="layout" data-action="sidebar_style_inverse_off">Light</a>
                        </li>
                    </ul>
                </li> 
                -->
                                            <li>
                                                <a class="" href="https://www.danasyariah.id/borrower/lengkapi_profile_pendanaan_simple">
                                                    <i class="si si-check"></i>
                                                    <span class="sidebar-mini-hide">Pendanaan Terverifikasi</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="" href="https://www.danasyariah.id/borrower/lengkapi_profile_pendanaan_simple">
                                                    <i class="si si-wallet"></i>
                                                    <span class="sidebar-mini-hide">Pencairan Dana</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="" href="https://www.danasyariah.id/borrower/lengkapi_profile_pendanaan_simple">
                                                    <i class="si si-credit-card"></i>
                                                    <span class="sidebar-mini-hide">Pembayaran Cicilan</span>
                                                </a>
                                            </li>
                                            <li class="  d-none">
                                                <a class="nav-submenu  " data-toggle="nav-submenu" href="https://www.danasyariah.id/borrower/beranda#">
                                                    <i class="si si- si-settings"></i>
                                                    <span class="sidebar-mini-hide">Pengaturan Akun</span>
                                                </a>
                                                <ul>

                                                    <li>
                                                        <a class="" href="https://www.danasyariah.id/borrower/change_password_borrower">Ubah Kata Sandi</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END Side Navigation -->
                                </div>
                                <!-- Sidebar Content -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 564px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 498px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header w-100">
                <!-- Left Section -->
                <div class="content-header-section">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
                    <a class="btn btn-dual-secondary">
                        <span class="font-w400 ml-2 judul" style="font-size: 1.271429rem;">Hai, <span class="judul">aguskuspri</span></span>
                    </a>
                    <!-- END Toggle Sidebar -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="content-header-section">



                    <!-- <div class="btn-group show" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-bell text-dark"></i>
                    <span class="badge badge-primary badge-pill">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-300" style="z-index: 9999" aria-labelledby="page-header-notifications" x-placement="bottom-end" style="position: absolute; transform: translate3d(-231px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                    <ul class="list-unstyled my-20">
                        <li>
                            <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-check text-success"></i>
                                </div>
                                <div class="media-body pr-10">
                                    <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                    <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                </div>
                                <div class="media-body pr-10">
                                    <p class="mb-0">Please check your payment info since we can’t validate them!</p>
                                    <div class="text-muted font-size-sm font-italic">50 min ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-times text-danger"></i>
                                </div>
                                <div class="media-body pr-10">
                                    <p class="mb-0">Web server stopped responding and it was automatically restarted!</p>
                                    <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                </div>
                                <div class="media-body pr-10">
                                    <p class="mb-0">Please consider upgrading your plan. You are running out of space.</p>
                                    <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-plus text-primary"></i>
                                </div>
                                <div class="media-body pr-10">
                                    <p class="mb-0">New purchases! +$250</p>
                                    <div class="text-muted font-size-sm font-italic">1 day ago</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-center mb-0" href="/notifikasi_borrower">
                        <i class="fa fa-flag mr-5"></i> View All
                    </a>
                </div>
            </div> -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button id="btn_logout" onclick="location.href=&#39;https://www.danasyariah.id/borrower/logout&#39;" class="btn btn-dual-secondary text-danger">
                        <i class="si si-power"></i> Keluar
                    </button>
                    <!-- END Toggle Side Overlay -->
                </div>
                <!-- END Right Section -->

            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header">
                <div class="content-header content-header-fullrow">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Close Search Section -->
                                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                                <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                    <i class="fa fa-times"></i>
                                </button>
                                <!-- END Close Search Section -->
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary px-15">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header content-header-fullrow text-center">
                    <div class="content-header-item">
                        <i class="fa fa-sun-o fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <div id="overlay">
            <div class="cv-spinner">
                <span class="spinner"></span>
            </div>
        </div>
        <!-- Main Container -->


        <main id="main-container" style="min-height: 462px;">
            <!-- Page Content -->
            <div id="detect-screen" class="content-full-right">
                <div class="container col-12">
                    <div class="row my-5">

                        <div id="col" class="col-12 col-md-9 mt-30">
                        </div>

                        <div id="col" class="col-12 col-md-12 mt-30">
                            <span class="mb-10 pb-10 ">
                                <h1 class="no-paddingTop font-w400 judul" style="float: left; margin-block-end: 0em;">
                                    Beranda</h1>
                                <span id="btn-ajukan-pendanaan" class="pull-right">
                                    <a href="https://www.danasyariah.id/borrower/lengkapi_profile_pendanaan_simple" class="btn btn-rounded btn-big btn-noborder min-width-150 text-white"><span class="p-5">Ajukan Pendanaan Baru </span></a>

                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 mt-4 pt-4 mx-auto">
                            <div id="alert-msg" class="alert alert-warning d-none" role="alert">
                                <div class="row">
                                    <div class="col-10">
                                        <div id="text-msg"></div>
                                    </div>
                                    <div class="col-2 my-auto">
                                        <button type="button" class="close my-auto" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4 pt-4 mb-4 pb-4">
                        <div id="layout-informasi-pendanaan" class="col-md-12">
                            <div class="card border border-dark">

                                <div class="row">
                                    <div class="col">
                                        <p class="pt-0 pl-4" style="margin-top: -0.8rem"> <span class="bg-white h5 font-weight-normal">&nbsp; Pendanaan
                                                Aktif &nbsp;</span></p>
                                    </div>
                                </div>

                                <div class="card-body pt-4 px-4">
                                    <div class="row mb-4">
                                        <div class="col-md-12">

                                            <div class="table-responsive">
                                                <div id="table_pendanaan_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <div>
                                                        <div id="table_pendanaan_filter" class="dataTables_filter"><label>Pencarian:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table_pendanaan"></label></div>
                                                        <div>
                                                            <table id="table_pendanaan" class="table table-striped table-bordered dt-responsive dataTable no-footer" cellpadding="0" cellspacing="0" width="100%" role="grid" style="width: 100%;">

                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="align-middle text-center text-capitalize sorting_desc" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 67px;" aria-sort="descending" aria-label="ID Pengajuan: activate to sort column ascending">ID Pengajuan</th>
                                                                        <th class="align-middle text-center text-capitalize sorting" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 71px;" aria-label="Tipe Pendanaan: activate to sort column ascending">Tipe Pendanaan</th>
                                                                        <th class="align-middle text-center text-capitalize sorting" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 71px;" aria-label="Tujuan Pendanaan
                                                : activate to sort column ascending">Tujuan Pendanaan
                                                                        </th>
                                                                        <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 46px;" aria-label="Nomor Akad">Nomor Akad</th>
                                                                        <th class="align-middle text-center text-capitalize sorting" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 46px;" aria-label="Tenor (Bulan): activate to sort column ascending">Tenor (Bulan)</th>
                                                                        <th class="align-middle text-center text-capitalize sorting" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 60px;" aria-label="Pokok Pinjaman: activate to sort column ascending">Pokok Pinjaman</th>
                                                                        <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 40px;" aria-label="Sisa Pokok">Sisa Pokok</th>
                                                                        <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 50px;" aria-label="Tanggal Mulai">Tanggal Mulai</th>
                                                                        <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 50px;" aria-label="Tanggal Selesai
                                                ">Tanggal Selesai
                                                                        </th>
                                                                        <th class="align-middle text-center text-capitalize sorting" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 39px;" aria-label="Status: activate to sort column ascending">Status</th>
                                                                        <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 27px;" aria-label="Aksi">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="odd">
                                                                        <td valign="top" colspan="11" class="dataTables_empty">No data available in table</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div id="table_pendanaan_processing" class="dataTables_processing card" style="display: none;">Memproses...</div>
                                                        </div>
                                                        <div class="dataTables_paginate paging_simple_numbers" id="table_pendanaan_paginate">
                                                            <ul class="pagination">
                                                                <li class="paginate_button page-item previous disabled" id="table_pendanaan_previous"><a href="https://www.danasyariah.id/borrower/beranda#" aria-controls="table_pendanaan" data-dt-idx="0" tabindex="0" class="page-link">⇐</a></li>
                                                                <li class="paginate_button page-item next disabled" id="table_pendanaan_next"><a href="https://www.danasyariah.id/borrower/beranda#" aria-controls="table_pendanaan" data-dt-idx="1" tabindex="0" class="page-link">⇒</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>



        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // const brw_id = "292771"
                // let route_list_pendanaan = 'https://www.danasyariah.id/borrower/get-json-list-pendanaan/brw_id_val'
                // route_list_pendanaan = route_list_pendanaan.replace('brw_id_val', brw_id)

                // let list_pendanaan_active = $('#table_pendanaan').DataTable({
                //     dom: '<f<tr>ip>',
                //     searching: true,
                //     processing: true,
                //     serverSide: true,
                //     paging: true,
                //     info: false,
                //     pageLength: 10,
                //     order: [
                //         [0, "desc"]
                //     ],
                //     ajax: {
                //         url: route_list_pendanaan
                //     },
                //     columnDefs: [
                //         // { "width": "2%", "targets": 0 },
                //         {
                //             className: "text-center",
                //             targets: "_all"
                //         },
                //     ],
                //     columns: [{
                //             data: 'pengajuan_id',
                //             name: 'pengajuan_id'
                //         },
                //         {
                //             data: 'pendanaan_nama',
                //             name: 'pendanaan_nama'
                //         },
                //         {
                //             data: 'tujuan_pembiayaan',
                //             name: 'tujuan_pembiayaan'
                //         },
                //         {
                //             data: null,
                //             orderable: false,
                //             render: function(data, type, row, meta) {
                //                 return '-';
                //             }
                //         },
                //         {
                //             data: 'durasi_proyek',
                //             name: 'durasi_proyek'
                //         },
                //         {
                //             data: 'pendanaan_dana_dibutuhkan',
                //             render: $.fn.dataTable.render.number(',', '.', 2, 'Rp')
                //         },
                //         {
                //             data: null,
                //             orderable: false,
                //             render: function(data, type, row, meta) {
                //                 return '-';
                //             }
                //         },
                //         {
                //             data: null,
                //             orderable: false,
                //             render: function(data, type, row, meta) {
                //                 return '-';
                //             }
                //         },
                //         {
                //             data: null,
                //             orderable: false,
                //             render: function(data, type, row, meta) {
                //                 return `-`;
                //             }
                //         },
                //         {
                //             data: 'status',
                //             data: null,
                //             name: 'status',
                //             render: function(data, type, row, meta) {
                //                 let status = data.status
                //                 let btn_text = ''
                //                 if (status == '0') {
                //                     btn_text = 'Pengajuan Baru'
                //                 } else if (status == '1') {
                //                     btn_text = 'Lolos Tahap 1'
                //                 } else if (status == '3') {
                //                     btn_text = 'Proses Verifikasi'
                //                 } else if (status == '11') {
                //                     btn_text = 'Proses Verifikasi'
                //                 } else if (status == '5') {
                //                     btn_text = 'Diterima'
                //                 }
                //                 return btn_text
                //             }
                //         },
                //         {
                //             data: 'detail_pendanaan',
                //             name: 'detail_pendanaan',
                //             orderable: false,
                //             serachable: false
                //         }
                //     ]
                // })

                // let route_get_notif_pendanaan = "https://www.danasyariah.id/borrower/get-notif-pendanaan/brw_id_val"
                // route_get_notif_pendanaan = route_get_notif_pendanaan.replace('brw_id_val', brw_id)
                // $.ajax({
                //     url: route_get_notif_pendanaan,
                //     method: "GET",
                //     dataType: 'JSON',
                //     success: function(response) {
                //         let status_user = response.data.status_user
                //         let total_pengajuan = response.data.total_pengajuan
                //         let msg = ''
                //         if (status_user == 'active') {

                //             if (total_pengajuan > 0) {
                //                 msg = `
                //         Anda memiliki ${response.data.total_pengajuan} Pengajuan Pendanaan yang telah <span class="text-success font-weight-bold">LOLOS</span>
                //         Verifikasi Tahap Awal, segera <u><a href="/borrower/pendanaan" class="text-success font-weight-bold">Lengkapi Data Pengajuan Anda
                //         </a></u>untuk lanjut ke tahap berikutnya
                //         `

                //                 $('#alert-msg').removeClass('d-none')
                //                 $('#text-msg').html(msg)
                //             }

                //         } else if (status_user == 'notfilled') {
                //             if (total_pengajuan > 0) {
                //                 msg = `
                //         Selamat pengajun pendanaan Anda telah <span class="text-success font-weight-bold">LOLOS</span>
                //         Verifikasi Tahap Awal, silahkan <u><a href="/borrower/lengkapi_profile" class="text-success font-weight-bold">Lengkapi Data Registrasi
                //         </a></u>untuk lanjut ke tahap berikutnya
                //         `

                //                 $('#alert-msg').removeClass('d-none')
                //                 $('#text-msg').html(msg)
                //             }
                //         }
                //     }
                // });
            });

            const formatRupiah = (angka, prefix) => {
                let number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
            }
        </script>

    </div>

    <!-- END Page Container -->

    <!-- Codebase JS -->
    <script src="<?= base_url('assets/dashboard') ?>/js/codebase.core.min.js.download"></script>
    <script src="<?= base_url('assets/dashboard') ?>/js/codebase.app.min.js.download"></script>
    <!-- picker range -->
    <script src="<?= base_url('assets/dashboard') ?>/js/bootstrap-datepicker.min.js.download"></script>
    <script src="<?= base_url('assets/dashboard') ?>/js/flatpickr.min.js.download"></script>
    <!-- dropzone image -->
    <script src="<?= base_url('assets/dashboard') ?>/js/dropzone.js.download"></script>
    <!-- pie chart -->
    <script src="<?= base_url('assets/dashboard') ?>/js/jquery.sparkline.min.js.download"></script>
    <script src="<?= base_url('assets/dashboard') ?>/js/jquery.easypiechart.min.js.download"></script>

    <!-- Page JS Plugins Form wizard -->
    <script src="<?= base_url('assets/dashboard') ?>/js/jquery.bootstrap.wizard.js.download"></script>
    <script src="<?= base_url('assets/dashboard') ?>/js/jquery.validate.min.js.download"></script>

    <script src="<?= base_url('assets/dashboard') ?>/js/be_forms_wizard.min.js.download"></script>
    <!-- IDE -->
    <script src="<?= base_url('assets/dashboard') ?>/js/simplemde.min.js.download"></script>
    <!-- Select2 -->
    <script src="<?= base_url('assets/dashboard') ?>/js/select2.full.min.js.download"></script>
    <!-- CKEDITOR -->
    <script src="<?= base_url('assets/dashboard') ?>/js/ckeditor.js.download"></script>
    <!-- SweetAlert JS -->
    <script src="<?= base_url('assets/dashboard') ?>/js/sweetalert2.min.js.download"></script>
    <!-- slide -->
    <script src="<?= base_url('assets/dashboard') ?>/js/slick.min.js.download"></script>
    <!-- DataTables -->
    <script src="<?= base_url('assets/dashboard') ?>/js/jquery.dataTables.min.js.download"></script>
    <script src="<?= base_url('assets/dashboard') ?>/js/dataTables.bootstrap4.min.js.download"></script>
    <!-- Page JS Code -->
    <script src="<?= base_url('assets/dashboard') ?>/js/dataTables.bootstrap4.min.js.download"></script>
    <script src="<?= base_url('assets/dashboard') ?>/js/jquery.maskedinput.min.js.download"></script>

    <script>
        jQuery(function() {
            Codebase.helpers('slick');
        });
    </script>


    <script>
        jQuery(function() {
            Codebase.helpers('table-tools');
        });
    </script>
    <script>
        jQuery(function() {
            Codebase.helpers('ckeditor');
        });
    </script>
    <script>
        jQuery(function() {
            Codebase.helpers('datepicker');
        });
    </script>
    <script>
        jQuery(function() {
            Codebase.helpers('flatpickr');
        });
    </script>
    <script>
        jQuery(function() {
            Codebase.helpers('masked-inputs');
        });
    </script>
    <!--<script>jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker']); });</script>-->
    <script>
        // pie chart            
        $(function() {
            $('.js-pie-chart-enabled').easyPieChart();
        });
        // for sidebar right
        // function resize() {
        //     if ($(window).width() < 514) {
        //         $('#page-container').removeClass('side-overlay-o');
        //         $('#col').addClass('col-12');
        //         $('#col2').addClass('col-12');
        //         $('#status-plafon').addClass('d-none');
        //         $('.content-header').addClass('content-header-small');
        //         $('#detect-screen').removeClass('content-full-right');
        //         $('#detect-screen').addClass('content-full-right-small');
        //         $('#btn-ajukan-pendanaan').removeClass('pull-right');
        //         $('.simplebar-content').addClass('simplebar-content-small');
        //     }
        //     else if ($(window).width() < 641){
        //         $('#status-plafon').addClass('d-none');
        //     }
        //     else if ($(window).width() < 991) {
        //         $('#page-container').removeClass('side-overlay-o');
        //         $('#status-plafon').removeClass('d-none');
        //         $('#detect-screen').removeClass('content-full-right-small');
        //         $('#detect-screen').addClass('content-full-right');
        //         $('#btn-ajukan-pendanaan').addClass('pull-right');
        //         $('.simplebar-content').removeClass('simplebar-content-small');
        //         $('.simplebar-content').addClass('simplebar-content');
        //     }
        //     else {
        //         $('#page-container').addClass('side-overlay-o');
        //         $('#status-plafon').removeClass('d-none');
        //         $('#detect-screen').removeClass('content-full-right-small');
        //         $('#detect-screen').addClass('content-full-right')
        //         $('#btn-ajukan-pendanaan').addClass('pull-right');
        //         $('.simplebar-content').removeClass('simplebar-content-small');
        //         $('.simplebar-content').addClass('simplebar-content');
        //     }
        // }

        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        };

        // var brw_id = "292771"
        // // console.log(brw_id);
        // $.ajax({
        //     url: "/borrower/getlastproyekapproved/" + brw_id,
        //     datatype: "json",
        //     success: function(html) {
        //         // console.log(html);
        //         // var dibutuhkan = parseInt(html.data.pendanaan_dana_dibutuhkan);
        //         // var danaTerkumpul = parseInt(html.data.terkumpul)+parseInt(html.danaTerkumpul.nominal_awal);
        //         // var persentaseTerkumpul = (danaTerkumpul/dibutuhkan)*100; 
        //         // var persendana = persentaseTerkumpul.toFixed(1)+"%";
        //         // if (persendana == "100.0%"){persendana = 100+"%"}
        //         // // console.log(
        //         // //     'dibutuhkan :'+dibutuhkan+' danaterkumpul : '+danaTerkumpul+' persentaseTerkumpul : '+persentaseTerkumpul+' persendana : '+persendana
        //         // // );
        //         // $('.namaproyek').text(html.data.nama);
        //         // $('#danadibutuhkan').text("Rp. "+formatNumber(parseInt(html.data.total_need)));
        //         // $('#imbalhasil').text(html.data.profit_margin+' %');
        //         // $('#durasiproyek').text(html.data.tenor_waktu+' Bulan');
        //         // $('#minimuminvestasi').text("Rp. "+formatNumber(parseInt(html.data.harga_paket)));
        //         // $('#jenisakad').text((html.data.pendanaan_akad == 1 ? 'Murabahah' : 'Mudarabah'));
        //         // $('#terimahasil').text((html.data.mode_pembayaran == 1 ? 'Tiap Bulan' : 'Akhir Proyek'));
        //         // $('#metodepembayaran').text((html.data.metode_pembayaran == 1 ? 'FULL' : 'Parsial'));
        //         // $('#persendana').text(persendana);
        //         // $('#progressbar').attr('style', "width: "+persendana+";");
        //         // $('#link').attr('href', "/borrower/detilProyek/"+html.data.id);
        //         // var plafon = html.dataPlafon.total_plafon;
        //         var plafon = html.dataPlafon;
        //         $('#plafon').text("Rp. " + formatNumber(parseInt(plafon)));
        //         $('#tersedia').text("Rp. " + formatNumber(parseInt(plafon - html.total_pokok)));
        //         $("#nilai_tersedia").val(plafon - html.total_pokok);
        //         if (html.total_pokok == null || html.total_pokok == 0 || html.total_pokok == " ") {
        //             $('#pp').text("Rp. 0");
        //             $('#terpakai').text("Rp. 0");
        //         } else {
        //             $('#pp').text("Rp. " + formatNumber(parseInt(html.total_pokok)));
        //             $('#terpakai').text("Rp. " + formatNumber(parseInt(html.total_pokok)));
        //         }
        //         if (html.total_imbal == null || html.total_imbal == 0 || html.total_imbal == " ") {
        //             $('#tih').text("Rp. 0");
        //         } else {
        //             $('#tih').text("Rp. " + formatNumber(parseInt(html.total_imbal)));
        //         }
        //         if (html.total_pinjaman == null || html.total_pinjaman == 0 || html.total_pinjaman == " ") {
        //             $('#tp').text("Rp. 0");
        //         } else {
        //             $('#tp').text("Rp. " + formatNumber(parseInt(html.total_pinjaman)));
        //         }
        //         if (html.tagihan == null || html.tagihan == 0 || html.tagihan == " ") {
        //             $('#tt').text("Rp. 0");
        //         } else {
        //             $('#tt').text("Rp. " + formatNumber(parseInt(html.tagihan)));
        //         }
        //     }
        // });

        $(document).ready(function() {
            //$(window).resize(resize);
            //resize();
            //session brw_id
            // var brw_id = "292771"
            // // console.log(brw_id);
            //     $.ajax({
            //         url:"/borrower/getlastproyekapproved/"+brw_id,
            //         datatype:"json",
            //         success:function(html){
            //             console.log(html);
            //             // var dibutuhkan = parseInt(html.data.pendanaan_dana_dibutuhkan);
            //             // var danaTerkumpul = parseInt(html.data.terkumpul)+parseInt(html.danaTerkumpul.nominal_awal);
            //             // var persentaseTerkumpul = (danaTerkumpul/dibutuhkan)*100; 
            //             // var persendana = persentaseTerkumpul.toFixed(1)+"%";
            //             // if (persendana == "100.0%"){persendana = 100+"%"}
            //             // // console.log(
            //             // //     'dibutuhkan :'+dibutuhkan+' danaterkumpul : '+danaTerkumpul+' persentaseTerkumpul : '+persentaseTerkumpul+' persendana : '+persendana
            //             // // );
            //             // $('.namaproyek').text(html.data.nama);
            //             // $('#danadibutuhkan').text("Rp. "+formatNumber(parseInt(html.data.total_need)));
            //             // $('#imbalhasil').text(html.data.profit_margin+' %');
            //             // $('#durasiproyek').text(html.data.tenor_waktu+' Bulan');
            //             // $('#minimuminvestasi').text("Rp. "+formatNumber(parseInt(html.data.harga_paket)));
            //             // $('#jenisakad').text((html.data.pendanaan_akad == 1 ? 'Murabahah' : 'Mudarabah'));
            //             // $('#terimahasil').text((html.data.mode_pembayaran == 1 ? 'Tiap Bulan' : 'Akhir Proyek'));
            //             // $('#metodepembayaran').text((html.data.metode_pembayaran == 1 ? 'FULL' : 'Parsial'));
            //             // $('#persendana').text(persendana);
            //             // $('#progressbar').attr('style', "width: "+persendana+";");
            //             // $('#link').attr('href', "/borrower/detilProyek/"+html.data.id);
            //             var plafon = html.dataPlafon.total_plafon;
            //             $('#plafon').text("Rp. "+formatNumber(parseInt(plafon)));
            //             $('#tersedia').text("Rp. "+formatNumber(parseInt(plafon - html.total_pokok)));
            //             if(html.total_pokok == null || html.total_pokok == 0 || html.total_pokok == " "){
            //                 $('#pp').text("Rp. 0");
            //                 $('#terpakai').text("Rp. 0");
            //             }else{
            //                 $('#pp').text("Rp. "+formatNumber(parseInt(html.total_pokok)));
            //                 $('#terpakai').text("Rp. "+formatNumber(parseInt(html.total_pokok)));
            //             }
            //             if(html.total_imbal == null || html.total_imbal == 0 || html.total_imbal == " "){
            //                 $('#tih').text("Rp. 0");
            //             }else{
            //                 $('#tih').text("Rp. "+formatNumber(parseInt(html.total_imbal)));
            //             }
            //             if(html.total_pinjaman == null || html.total_pinjaman == 0 || html.total_pinjaman == " "){
            //                 $('#tp').text("Rp. 0");
            //             }else{
            //                 $('#tp').text("Rp. "+formatNumber(parseInt(html.total_pinjaman)));
            //             }
            //             if(html.tagihan == null || html.tagihan == 0 || html.tagihan == " "){
            //                 $('#tt').text("Rp. 0");
            //             }else{
            //                 $('#tt').text("Rp. "+formatNumber(parseInt(html.tagihan)));    
            //             }
            //         }
            //     });

            $(document).on('click', '#deitil', function() {
                var id = $(this).attr("class");
                var persendana = '0.0%';
                $('.namaproyek').text('');
                // if(id == 0){
                //     alert('Menunggu Pendanaan Di Approve !!');
                //     $('#link').attr('href', "#");
                //     $('.namaproyek').text('Menunggu Pendanaan Di Approve !');
                //     $('#danadibutuhkan').text("Rp. -");
                //     $('#durasiproyek').text('0 Bulan');
                //     $('#imbalhasil').text('0.00 %');
                //     $('#minimuminvestasi').text("Rp. 0");
                //     $('#jenisakad').text("-");
                //     $('#terimahasil').text("-");
                //     $('#persendana').text(persendana);
                //     $('#progressbar').attr('style', "width: "+persendana+";");
                // }
                // else{
                // $.ajax({
                //     url: "/borrower/getProyekbyId/" + id,
                //     datatype: "json",
                //     success: function(html) {
                //         // console.log(html);
                //         var dibutuhkan = parseInt(html.data.pendanaan_dana_dibutuhkan);
                //         var danaTerkumpul = parseInt(html.data.terkumpul) + parseInt(html.danaTerkumpul.nominal_awal);
                //         var persentaseTerkumpul = (danaTerkumpul / dibutuhkan) * 100;
                //         var persendana = persentaseTerkumpul.toFixed(1) + "%";
                //         if (persendana == "100.0%") {
                //             persendana = 100 + "%"
                //         }
                //         $('.namaproyek').text(html.data.nama);
                //         $('#danadibutuhkan').text("Rp. " + formatNumber(parseInt(html.data.total_need)));
                //         $('#imbalhasil').text(html.data.profit_margin + ' %');
                //         $('#durasiproyek').text(html.data.tenor_waktu + ' Bulan');
                //         $('#minimuminvestasi').text("Rp. " + formatNumber(parseInt(html.data.harga_paket)));
                //         $('#jenisakad').text((html.data.pendanaan_akad == 1 ? 'Murabahah' : 'Mudarabah'));
                //         $('#terimahasil').text((html.data.mode_pembayaran == 1 ? 'Tiap Bulan' : 'Akhir Proyek'));
                //         $('#metodepembayaran').text((html.data.metode_pembayaran == 1 ? 'FULL' : 'Parsial'));
                //         $('#persendana').text(persendana);
                //         $('#progressbar').attr('style', "width: " + persendana + ";");
                //         $('#link').attr('href', "/borrower/detilProyek/" + html.data.id);
                //     }
                // });
                // }
            });
        });

        $("#change_layout_12").click(function(e) {

            $('#col').removeClass('col-md-9');
            $('#col').addClass('col-md-12');
            $('#col2').removeClass('col-md-9');
            $('#col2').addClass('col-md-12');

        });
        $("#change_layout_8").click(function(e) {
            if ($('#col').hasClass('col-md-9')) {
                $('#col').removeClass('col-md-9');
                $('#col').addClass('col-md-12');
                $('#col2').removeClass('col-md-9');
                $('#col2').addClass('col-md-12');
            } else {
                $('#col').removeClass('col-md-12');
                $('#col').addClass('col-md-9');
                $('#col2').removeClass('col-md-12');
                $('#col2').addClass('col-md-9');
            }

        });
    </script>
</body>

</html>