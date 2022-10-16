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
                                        <a class="link-effect font-w600 " href="<?= base_url() ?>beranda">
                                            <span class="font-size-h3 text-primary">DSI </span><span class="font-size-h3 text-dual-primary-dark"><?= $this->session->userdata('type'); ?></span>
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


                                    </div>
                                </div>
                                <!-- END Visible only in normal mode -->
                            </div>
                            <!-- END Side User -->

                            <!-- Side Navigation -->
                            <div class="content-side content-side-full">
                                <ul class="nav-main">
                                    <li>
                                        <a class="active" href="<?= base_url() ?>dashboard">
                                            <i class="si si-bar-chart"></i>
                                            <span class="sidebar-mini-hide">Beranda</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="<?= base_url() ?>ajukan_pendanaan">
                                            <i class="si si-paper-plane"></i>
                                            <span class="sidebar-mini-hide">Ajukan Pendanaan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="<?= base_url() ?>campaign">
                                            <i class="si si-doc"></i>
                                            <span class="sidebar-mini-hide">Campaign</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="" href="<?= base_url() ?>company">
                                            <i class="si si-doc"></i>
                                            <span class="sidebar-mini-hide">Company</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="" href="<?= base_url() ?>profile">
                                            <i class="si si-check"></i>
                                            <span class="sidebar-mini-hide">Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="<?= base_url() ?>Pengaduan">
                                            <i class="si si-wallet"></i>
                                            <span class="sidebar-mini-hide">Pengaduan</span>
                                        </a>
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
                <span class="font-w400 ml-2 judul" style="font-size: 1.271429rem;">Hai, <span class="judul"><?= $this->session->userdata('data')->username; ?></span></span>
            </a>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="content-header-section">





            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <a id="btn_logout" href="<?= base_url('login/logout') ?>" class="btn btn-dual-secondary text-danger">
                <i class="si si-power"></i> Keluar
            </a>
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