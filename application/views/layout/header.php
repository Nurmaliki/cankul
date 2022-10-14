<!DOCTYPE html>
<html lang="id">

<head>
    <title>Cankul</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="437102301747-mc6atn6ljrtv6fanh7st1dcqmlp8gcc9.apps.googleusercontent.com">
    <meta name="description" content="pendanaan syariah, hijrah finansial">
    <link rel="shortcut icon" href="<?= base_url('assets') ?>/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url('assets') ?>/img/danasyariah-apple-icon.png">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net/" crossorigin>
    <link rel="preconnect" href="https://www.facebook.com/">
    <link rel="dns-prefetch" href="https://connect.facebook.net/">
    <link rel="preconnect" href="https://www.google.com/">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com/">
    <link rel="dns-prefetch" href="https://www.googleadservices.com/">
    <link rel="dns-prefetch" href="https://www.google-analytics.com/">


    <link rel="preload" href="<?= base_url('assets') ?>/img/logo4.png" as="image">
    <link rel="preload" href="<?= base_url('assets') ?>/img/16092021---Hero-Header-DSI-min.png" as="image">
    <link rel="preload" href="<?= base_url('assets') ?>/css/fonts/slick.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?= base_url('assets') ?>/webfonts/fa-solid-900.woff2" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?= base_url('assets') ?>/webfonts/fa-brands-400.woff2" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="<?= base_url('assets') ?>/css/all.css" as="style">
    <link rel="preload" href="<?= base_url('assets') ?>/js/allNew.js" as="script">
    <link rel="preload" href="<?= base_url('assets') ?>/js/jquery.mCustomScrollbar.concat.min.js" as="script">
    <link rel="preload" href="<?= base_url('assets') ?>/js/app.js" as="script">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js" as="script">
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.js" as="script">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js" as="script">

    <script src="<?= base_url('assets') ?>/js/slick.min.js" type="text/javascript" defer></script>
    <script src="<?= base_url('assets') ?>/js/jquery-3.3.1.min.js" type="text/javascript" async></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- chromeOpera -->
    <meta name="theme-color" content="#0F7851">
    <!-- Windows Phone browser -->
    <meta name="msapplication-navbutton-color" content="#0F7851">
    <!-- safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#0F7851">
    <!-- External CSS libraries -->
    <!-- chace control -->
    <meta http-equiv="Cache-control" content="public">
    <!--script src="https://apis.google.com/js/platform.js" async></script-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets') ?>/css/all.css">
    <style>
        /*
    @font-face {
        font-family: 'Lingua_TRIAL';
        src: url('/admin/assets/fonts/Lingua_TRIAL.ttf');
        font-display: fallback;
    }
    @font-face {
        font-family: 'Montserrat-Black';
        src: url('/admin/assets/fonts/Montserrat-Black.ttf');
        font-display: fallback;
    }
    @font-face {
        font-family: 'Montserrat-Bold';
        src: url('/admin/assets/fonts/Montserrat-Bold.ttf');
        font-display: fallback;
    }*/
        body {
            overflow-x: hidden;
        }

        /*
    .font-ligua-trial {font-family: 'Lingua_TRIAL', sans-serif !important;}
    .font-montserrat {font-family: 'Montserrat-Black', sans-serif !important;}
    .font-montserrat-bold {font-family: 'Montserrat-Bold', sans-serif !important;}
    */

        .table td {
            padding: .8em;
            padding-bottom: .6em;
        }

        .lead {
            font-size: 1rem;
            font-weight: bold;
        }

        .notify-badge {
            z-index: 900;
            width: 20% !important;
            height: 140px;
            width: 100px;
        }

        .flaticon {
            color: black;
        }

        .bg-css {
            color: white;
        }

        .hover-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .1);
        }

        .hover-card:hover {
            box-shadow: 0 0 8px 0 rgba(0, 0, 0, .3);
            transition: all 0.4s;
        }

        .delapan-image {
            width: 35% !important;
            height: 60%;
            display: inline-block !important;
            opacity: 1;
        }

        .feedback-slider-item {
            display: flex;
            min-height: 500px;
            align-items: center;
        }

        .feedback-slider-item .image-testimoni {
            position: absolute;
            bottom: 25px;
            text-align: center
        }

        .main-thread {
            font-size: .8em;
            line-height: 1.5em;
            font-weight: 400;
        }

        /******************  News Slider Demo-7 *******************/
        /*
    .post-slide {
        padding-right: 20px;
        display: inline-block;
    }

    .post-slide img {
        width: 100%;
        height: auto;
    }

    .post-slide .post-review {}

    .post-slide .post-date {
        float: left;
        margin-right: 10px;
        padding: 8px 15px;
        text-align: center;
        background: #444;
        font-size: 26px;
        color: #fff;
        font-weight: 700;
        transition: background 0.20s linear 0s;
    }

    .post-slide:hover .post-date {
        background: #078071;
    }

    .post-slide .post-date small {
        display: block;
        margin-bottom: 10px;
        font-size: 13px;
        text-transform: capitalize;
    }

    .post-slide .post-date small:before {
        content: "";
        display: block;
        margin-bottom: 5px;
        border-top: 1px solid #fff;
    }

    .post-slide .post-title {
        margin: 0;
        padding-top: 15px;
    }

    .post-slide .post-title a {
        font-size: 15px;
        color: #444;
        text-transform: uppercase;
        margin-bottom: 6px;
        display: block;
        line-height: 20px;
        font-weight: bold;
    }

    .post-slide:hover .post-title a {
        color: #078071;
        text-decoration: none;
    }

    .post-comment {
        margin: 0;
        list-style: none;
    }

    .post-comment li a {
        color: #a9a9a9;
        text-transform: capitalize;
    }

    .post-comment li a:before {
        content: "|";
        margin: 0 5px 0 5px;
        color: #d3d3d3;
    }
*/
        @media only screen and (max-width: 480px) {
            .post-slide {
                padding: 0;
            }

            .modal-dialog {
                width: 100% !important;
            }
        }

        @media only screen and (device-width: 768px) {

            /* For general iPad layouts */
            .col-md-4 {
                max-width: 304px;
            }

            .modal-dialog {
                width: 100% !important;
            }
        }

        .modal-dialog {
            max-width: 800px;
            margin: 30px auto;
        }

        .modal-body {
            position: relative;
            padding: 0px;
        }

        .close {
            position: absolute;
            right: -30px;
            top: 0;
            z-index: 999;
            font-size: 2rem;
            font-weight: normal;
            color: #fff;
            opacity: 1;
        }

        .bold {
            font-weight: bolder;
        }

        .title-with-line {
            margin-left: -5px;
            background-image: -webkit-linear-gradient(bottom, #ffc100 50%, transparent 50%);
        }
    </style>

</head>

<body>


    <style>
        #navbar-ext {
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.6);
        }

        #navbar-ext h1 {
            display: block;
            color: #0c7753;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Global Button */
        .transparent_btn {
            display: inline-block;
            padding: 10px 14px;
            color: #f2f2f2;
            border: 1px solid #FFF;
            text-decoration: none;
            font-size: 17px;
            line-height: 120%;
            background-color: rgba(255, 255, 255, 0);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -webkit-transition: background-color 300ms ease;
            -moz-transition: background-color 300ms ease;
            transition: background-color 300ms ease;
            cursor: pointer;
        }

        .transparent_btn:hover {
            background-color: rgba(255, 255, 255, 0.3);
            color: #FFF;
        }

        /* Green Button */
        .transparent_btn.green {
            color: #86ec93;
            border-color: #86ec93;
        }

        .transparent_btn.green:hover {
            background-color: rgba(134, 236, 147, 0.3);
        }
    </style>
    <style>
        .login100-more {
            min-width: 50%;
            min-height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;
            border-radius: 10px 0 0 10px;
        }

        .login100-more::before {
            content: "";
            display: block;
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, .3);
            background-image: linear-gradient(45deg, rgb(0, 255, 251, 0.8), rgb(2, 119, 91, 0.9));
            background-image: -webkit-linear-gradient(45deg, rgb(0, 255, 251, 0.8), rgb(2, 119, 91, 0.9));
            transition: all .4s ease;
        }

        .logo-render {
            width: 80px;
            height: auto;
            -ms-flex: none;
            -webkit-flex: none;
            flex: none;
            opacity: 0.8;
            margin-right: 50%;
            margin-left: auto;
        }

        .modal-bodyagre {
            height: 250px;
            overflow-y: auto;
        }
    </style>


    <?php $this->load->view('layout/loginModalInvestor'); ?>
    </div>




    <?php $this->load->view('layout/loginModalBorrower'); ?>





    <div>
        <?php $this->load->view('layout/modal_login_funder'); ?>
        <?php $this->load->view('layout/modal_registrasi_funder'); ?>


        <div id="ModalTermCondition" class="modal fade in " tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered " style="max-height:100%;  margin-top: 50px; margin-bottom:50px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollmodalLabel">Syarat & Ketentuan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyagre p-5" style="height: 350px">
                        <object data="<?= base_url('assets') ?>/storage/footer/SYARAT%20%26%20KETENTUAN.pdf" type="application/pdf" width="100%" height="100%">
                            <a href="<?= base_url('assets') ?>/storage/footer/SYARAT%20%26%20KETENTUAN.pdf" target="_blank">Syarat dan Ketentuan.pdf</a>
                        </object>
                        <!--?php
					$tmp = \App\TermCondition::where('typesyarat','1')->first();
				?>
					<p style="font-size: .15em; line-height: 1.5em; font-weight: 400;">{--  $tmp->deskripsi --}</p-->
                        <p style="font-size: .7em; line-height: 1.5em; font-weight: 400; color: red;"><input type="checkbox" id="setuju"> Saya Menyetujui Syarat dan Ketentuan yang Berlaku</p>
                        <input type="hidden" id="setuju2">
                    </div>
                    <div class="modal-footer">
                        <button type="button" name="submit" value="submit" class="btn btn-sm btn-default" id="btnStj" onclick="readterm()" disabled>Saya Setuju</button>
                    </div>
                </div>
            </div>
        </div>


        <?php $this->load->view('layout/modal_login_beneficiary'); ?>
        <?php $this->load->view('layout/modal_registrasi_beneficiary'); ?>




        <div id="ModalTermCondition2" class="modal fade in " tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered " style="max-height:200%;  margin-top: 50px; margin-bottom:50px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollmodalLabel">Syarat & Ketentuan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-bodyagre p-5" style="height: 350px">
                        <object data="<?= base_url('assets') ?>/storage/footer/SYARAT%20%26%20KETENTUAN%20BORROWER.pdf" type="application/pdf" width="100%" height="100%">
                            <a href="<?= base_url('assets') ?>/storage/footer/SYARAT%20%26%20KETENTUAN%20BORROWER.pdf" target="_blank">Syarat dan Ketentuan.pdf</a>
                        </object>
                        <!--?php
					$tmp = \App\TermCondition::where('typesyarat','2')->first();
				?-->
                        <!--p style="font-size: .15em; line-height: 1.5em; font-weight: 400;">{--!!  $tmp->deskripsi !!--}</p-->
                        <p style="font-size: .7em; line-height: 1.5em; font-weight: 400; color: red;"><input type="checkbox" id="setujuBrw"> Saya Menyetujui Syarat dan Ketentuan yang Berlaku</p>
                        <input type="hidden" id="setuju2_bor">
                    </div>
                    <div class="modal-footer">
                        <button type="button" name="submit" value="submit" class="btn btn-sm btn-default" id="btnStjBrw" onclick="readterm2()" disabled>Saya Setuju</button>
                        <p style="font-size: .15em; line-height: 1.5em; font-weight: 400;">&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#setujuBrw').change(function() {
            if (this.checked) {
                $('#btnStjBrw').removeAttr('disabled');
                $('#btnStjBrw').removeClass('btn-default').addClass('btn-success');
                $("#setuju2_bor").val(1);
            } else {
                $('#btnStjBrw').attr("disabled", true);
                $('#btnStjBrw').removeClass('btn-success').addClass('btn-default');
            }
        });
    </script>
    <?php $this->load->view('layout/loginModalAs'); ?>
    <?php $this->load->view('layout/registerModalAs'); ?>








    <header class="main-header sticky-header" id="main-header-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light rounded">
                        <a class="navbar-brand navbar-brand d-flex w-50 mr-auto" href="index.html">
                            <picture>
                                <source scrset="<?= base_url('assets') ?>/img/logo4-min.png" type="image/png" media="(min-width:576px)">
                                <source scrset="<?= base_url('assets') ?>/img/logo4.webp" type="image/webp" media="(min-width:992px)">
                                <img src="<?= base_url('assets') ?>/img/logo4.png" alt="logo" width="90px" height="53px">
                            </picture>
                        </a>
                        <button class="navbar-toggler collapsed text-right" type="button" data-toggle="collapse" data-target="#navbar_test" aria-controls="#navbar_test" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar mx-auto"></span>
                            <span class="icon-bar middle-bar mx-auto"></span>
                            <span class="icon-bar bottom-bar mx-auto"></span>
                        </button>
                        <div class="collapse navbar-collapse w-auto" id="navbar_test">
                            <ul class="navbar-nav ml-auto">
                                <!--
                          <li class="nav-item login_header pb-1 pt-0 pl-2 my-auto mlcustome-sm-0">
                                <a  href="/getPage/id">
                                  <img src="<?= base_url('assets') ?>/img/iconfinder_ID_167781.png" height="15" alt="indonesia"></span>
                                </a>
                          </li>
                          <li class="nav-item pl-4 pr-4 pb-1 pt-0 my-auto mlcustome-sm-0"  >
                                <a href="/getPage/en">
                                  <img src="<?= base_url('assets') ?>/img/iconfinder_US_167805.png" height="15" alt="english">
                                </a>
                          </li>
                          -->
                                <li class="nav-item dropdown my-auto">
                                    <a class="nav-link dropdown-toggle border-radius-sm-0" href="#" id="navbarDropdownMenuLink_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span style="white-space: nowrap;">BERIKAN PENDANAAN</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="<?= base_url() ?>penggalangan-berlangsung">PENGGALANGAN DANA SEDANG BERLANGSUNG</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>penggalangan-full">PENGGALANGAN DANA TERPENUHI</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>penggalangan-closed">PENGGALANGAN DANA SELESAI</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown my-auto">
                                    <a class="nav-link dropdown-toggle border-radius-sm-0 w-100" href="#" id="navbarDropdownMenuLink_2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span style="white-space: nowrap;">AJUKAN PEMBIAYAAN</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="<?= base_url() ?>dana_konstruksi">DANA KONSTRUKSI</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>dana_rumah">DANA RUMAH</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown my-auto">
                                    <a class="nav-link dropdown-toggle border-radius-sm-0" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-expanded="false">
                                        <span style="white-space: nowrap;">TATA CARA</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="<?= base_url() ?>tata-cara/pendana">MENJADI PENDANA</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>tata-cara/penerima">MENJADI PENERIMA PENDANAAN</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>tata-cara/pengaduan">MEKANISME & LAYANAN PENGADUAN PENGGUNA</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown my-auto">
                                    <a class="nav-link dropdown-toggle border-radius-sm-0" href="#" id="navbarDropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span style="white-space: nowrap;">TENTANG KAMI</span>
                                    </a>
                                    <ul class="dropdown-menu col-12" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item " href="<?= base_url() ?>news">BERITA</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>tentang-kami/tim-kami">TIM KAMI</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url() ?>tentang-kami/kontak">KONTAK</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown my-auto">
                                    <a class="nav-link dropdown-toggle border-radius-sm-0" href="<?= base_url() ?>/blog" target="_blank" aria-haspopup="true" aria-expanded="false">
                                        <span style="white-space: nowrap;">BLOG</span>
                                    </a>
                                </li>
                                <li class="nav-item login_header mx-1 my-1 my-lg-auto">
                                    <a class="btn-md btn-block btn-danaSyariah text-white border-radius-sm-0" href="#" data-toggle="modal" data-target="#loginModalAs">
                                        <span>Masuk</span>
                                    </a>
                                </li>
                                <li class="nav-item login_header mx-1 my-1 my-lg-auto">
                                    <a class="btn-md btn-block btn-danaSyariah text-white border-radius-sm-0" href="#" data-toggle="modal" data-target="#registerModalAs">
                                        <span>Daftar</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- register nitifikasi -->

    </header>

    <!-- hero end -->