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


    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142214442-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-142214442-1');
    </script> -->

    <!-- end of global site tag -->

    <!-- Facebook Pixel Code -->
    <!-- <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '444018075722130');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=444018075722130&amp;ev=PageView&amp;noscript=1" />
    </noscript> -->
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->



    <!-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N6RKMM6');
    </script> -->


    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N6RKMM6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    <style>
        #navbar-ext {
            overflow: hidden;
            background-color: rgba(255, 255, 255, 0.6);
        }

        #navbar-ext h1 {
            display: block;
            #color: 0c7753;
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
            background-image: linear-gradient(45deg, rgb(49, 122, 18, 0.8), rgb(2, 119, 91, 0.9));
            background-image: -webkit-linear-gradient(45deg, rgb(49, 122, 18, 0.8), rgb(2, 119, 91, 0.9));
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
    <div id="loginModalInvestor" class="modal fade in modal_scroll" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <!-- Modal content-->
            <div class="modal-content modal-body">
                <!--div class="modal-body"-->
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="login100-more" style="background-image: url('<?= base_url('assets') ?>/img/bg-login.jpg');">
                            <div class="d-flex ">
                                <div class="p-2 mx-auto text-white p-5 pt-2">
                                    <img class="logo-render lozad" data-src="<?= base_url('assets') ?>/img/logo_only_white.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="content-form-box forgot-box ">
                            <div class=" container-fluid ">
                                <div>
                                    <!--<h5>Hi, Kawan..</h5>-->
                                    <label>Silahkan pilih untuk melanjutkan sebagai: </label>
                                    <hr>
                                    <button type="button" class="close ml-5 mr-5 pr-2 mt-3 text-dark" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="lni-close size-sm"></i> </span>
                                    </button>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class=" nav nav-pills nav-fill">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link active" id="login-form-link">Masuk Pendana</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" id="register-form-link">Daftar Pendana</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div id="login-form">
                                    <form method="POST" action="/login" aria-label="Login">
                                        <input type="hidden" name="_token" value="8EcGDYa6p8nbuPZ8oFzXPUtz2dlJ86L2eNrqup4W">
                                        <div class="form-group row">
                                            <div class="col-12 ">
                                                <label for="username_register" class="col-form-label text-left"><span style="font-style: italic;">Username *</span></label>
                                                <input id="username_login" type="text" class="form-control" name="username" value="" placeholder="Type <i>Username</i>..." required>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="username_register" class="col-form-label text-left">Password *</label>
                                                <input id="password_login" type="password" class="form-control" name="password" placeholder="Password" required>

                                            </div>
                                        </div>

                                        <div class="container-fluid">
                                            <div class="row no-gutters">
                                                <div class="col-12 text-left mb-3">
                                                    <a style="font-size: .8rem; font-weight: 600;" href="password/reset.html">Forgot Your Password?</a>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-xs-12 mt-2 mb-2">
                                                    <button type="submit" class="btn btn-md btn-block btn-danaSyariah text-white">LOGIN</button>
                                                </div>
                                                <!-- <div class="col-lg-12 col-md-12 col-xs-12">
                        <a class="btn btn-md btn-block text-success pt-3" data-toggle="modal" data-dismiss="modal" data-target="#registerModal"> <span class="text-dark"> Belum Registrasi ? </span> Klik Disini</a>
                    </div>    -->
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <!-- Register Tab -->

                                <form id="register-form" method="POST" action="/register" aria-label="Register" style="display: none;">
                                    <input type="hidden" name="_token" value="8EcGDYa6p8nbuPZ8oFzXPUtz2dlJ86L2eNrqup4W">
                                    <div class="col-lg-12"></div>
                                    <div class="col-lg-12">
                                        <div class="form-group row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" onchange="term_check()" id="agreed_term">
                                                <span>Agree with term and Condition <a href="<?= base_url('assets') ?>/perjanjian.pdf" target="_blank">Lebih lanjut...</a></span>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" id="button_register" disabled class="tn btn-md btn-block btn-danaSyariah text-white">Daftar</button>
                                            <!-- <a type="button"  class="btn btn-md btn-block text-success" data-toggle="modal" data-dismiss="modal" data-target="#loginModal"> <span class="text-dark">Sudah Punya Akun ? </span> Klik Disini</a> -->
                                        </div>
                                    </div>
                            </div>
                            </form>

                            <style>
                                .btn-danaSyariah.disabled,
                                .btn-danaSyariah:disabled {
                                    color: #fff;
                                    background-color: #6c757d !important;
                                    border-color: #6c757d !important;
                                    background: #02775b;
                                    background-image: linear-gradient(45deg, #6c757d, #6c757d);
                                    background-image: -webkit-linear-gradient(45deg, #6c757d, #6c757d);
                                }

                                .panel-heading a {
                                    color: #000;
                                    font-size: 18px;
                                }

                                .panel-heading a.active {
                                    color: #029f5b;
                                    font-size: 18px;
                                    font-weight: bold;
                                }

                                .nav-pills .nav-link.active,
                                .nav-pills .show>.nav-link {
                                    color: #fff;
                                    background: #02775b;
                                    background-image: linear-gradient(45deg, #317a12, #02775b);
                                    background-image: -webkit-linear-gradient(45deg, #317a12, #02775b);
                                    transition: all .4s ease;
                                }

                                .forgot-box {
                                    border-radius: 8px;
                                    background: inherit;
                                    padding: 20px;
                                }
                            </style>
                            <script>
                                function term_check() {
                                    var status = document.getElementById("agreed_term");

                                    if (status.checked == true) {
                                        document.getElementById("button_register").disabled = false;
                                    } else {
                                        document.getElementById("button_register").disabled = true;

                                    }

                                }
                            </script>
                            <script>
                                function readterm() {
                                    document.getElementById("button_register").disabled = false;
                                    $("#loginModalInvestor").modal('show');
                                    $("#ModalTermCondition").modal('hide');
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <!--/div-->
        </div>
    </div>
    </div>





    <div id="loginModalBorrower" class="modal fade in modal_scroll" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <!-- Modal content-->
            <div class="modal-content modal-body">
                <!--div class="modal-body"-->
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="login100-more" style="background-image: url('<?= base_url('assets') ?>/img/bg-login.jpg');">
                            <div class="d-flex ">
                                <div class="p-2 mx-auto text-white p-5 pt-2">
                                    <img class="logo-render lozad" data-src="<?= base_url('assets') ?>/img/logo_only_white.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="content-form-box forgot-box ">
                            <div class=" container-fluid ">
                                <div>
                                    <!--<h5>Hi, Kawan..</h5>-->
                                    <label>Silahkan pilih untuk melanjutkan sebagai: </label>
                                    <hr>
                                    <button type="button" class="close ml-5 mr-5 pr-2 mt-3 text-dark" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="lni-close size-sm"></i> </span>
                                    </button>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class=" nav nav-pills nav-fill">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link active" id="login-form-link2">Login Penerima Dana</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" id="register-form-link2">Register Penerima Dana</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div id="login-form2">
                                    <form method="POST" action="/borrower/login" aria-label="Login">
                                        <input type="hidden" name="_token" value="8EcGDYa6p8nbuPZ8oFzXPUtz2dlJ86L2eNrqup4W">
                                        <div class="form-group row">
                                            <input type="hidden" id="type_users" name="type_users" value="borrower">
                                            <div class="col-12 ">
                                                <label for="username_register" class="col-form-label text-left">Username *</label>
                                                <input id="username_login" type="text" class="form-control" name="username" value="" placeholder="Type Username..." required>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="username_register" class="col-form-label text-left">Password *</label>
                                                <input id="password_login" type="password" class="form-control" name="password" placeholder="Password" required>

                                            </div>
                                        </div>

                                        <div class="container-fluid">
                                            <div class="row no-gutters">
                                                <div class="col-12 text-left mb-3">
                                                    <a style="font-size: .8rem; font-weight: 600;" href="borrower/forgotPassword.html">Forgot Your Password?</a>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-xs-12 mt-2 mb-2">
                                                    <button type="submit" class="btn btn-md btn-block btn-danaSyariah text-white">LOGIN</button>
                                                </div>
                                                <!-- <div class="col-lg-12 col-md-12 col-xs-12">
                        <a class="btn btn-md btn-block text-success pt-3" data-toggle="modal" data-dismiss="modal" data-target="#registerModal"> <span class="text-dark"> Belum Registrasi ? </span> Klik Disini</a>
                    </div>    -->
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <!-- Register Tab -->

                                <form id="register-form2" method="POST" action="/borrower/register" aria-label="Register" style="display: none;">
                                    <input type="hidden" name="_token" value="8EcGDYa6p8nbuPZ8oFzXPUtz2dlJ86L2eNrqup4W">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="username_register" class="col-12 col-form-label text-left">Username *</label>
                                                <div class="col-12">
                                                    <input id="username_register" type="text" class="form-control" name="username" placeholder="Type username..." value="" required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="email" class="col-12 col-form-label text-left">E-Mail Address *</label>
                                                <div class="col-12">
                                                    <input id="email" type="email" class="form-control" name="email" placeholder="Type Email Address..." value="" required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="password_register" class="col-12 col-form-label text-left">Password *</label>
                                                <div class="col-12">
                                                    <input id="password_register" type="password" class="form-control" name="password" placeholder="Type password..." required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-12 col-form-label text-left">Confirm Password *</label>
                                                <div class="col-12">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Type Password Again..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <!--div class="form-group row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" onchange="term_check2()" id="agreed_term2" >
                        <span>Agree with term and Condition <a href="/perjanjian" target="_blank">Read More...</a></span>
                    </div>
                </div-->
                                            <div class="form-group row" id="checkterm">
                                                <div class="form-check">
                                                    <!-- <input class="form-check-input" type="checkbox" onchange="readterm()" id="agreed_term" > -->
                                                    <a class="btn" href="#" data-toggle="modal" data-target="#ModalTermCondition2">Klik disini untuk baca syarat dan ketentuan</a>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" id="button_register2" disabled class="tn btn-md btn-block btn-danaSyariah text-white">Daftar</button>
                                                <!-- <a type="button"  class="btn btn-md btn-block text-success" data-toggle="modal" data-dismiss="modal" data-target="#loginModal"> <span class="text-dark">Sudah Punya Akun ? </span> Klik Disini</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <style>
                                    .btn-danaSyariah.disabled,
                                    .btn-danaSyariah:disabled {
                                        color: #fff;
                                        background-color: #6c757d !important;
                                        border-color: #6c757d !important;
                                        background: #02775b;
                                        background-image: linear-gradient(45deg, #6c757d, #6c757d);
                                        background-image: -webkit-linear-gradient(45deg, #6c757d, #6c757d);
                                    }

                                    .panel-heading a {
                                        color: #000;
                                        font-size: 18px;
                                    }

                                    .panel-heading a.active {
                                        color: #029f5b;
                                        font-size: 18px;
                                        font-weight: bold;
                                    }

                                    .nav-pills .nav-link.active,
                                    .nav-pills .show>.nav-link {
                                        color: #fff;
                                        background: #02775b;
                                        background-image: linear-gradient(45deg, #317a12, #02775b);
                                        background-image: -webkit-linear-gradient(45deg, #317a12, #02775b);
                                        transition: all .4s ease;
                                    }

                                    .forgot-box {
                                        border-radius: 8px;
                                        background: inherit;
                                        padding: 20px;
                                    }
                                </style>
                                <script>
                                    function term_check2() {
                                        var status = document.getElementById("agreed_term2");

                                        if (status.checked == true) {
                                            document.getElementById("button_register2").disabled = false;
                                        } else {
                                            document.getElementById("button_register2").disabled = true;

                                        }

                                    }
                                </script>
                                <script>
                                    function readterm2() {
                                        document.getElementById("button_register2").disabled = false;
                                        $("#loginModalBorrower").modal('show');
                                        $("#ModalTermCondition2").modal('hide');
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/div-->
            </div>
        </div>
    </div>




    <div>
        <div id="modal_login_investor" class="modal fade in modal_scroll" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered ">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="login100-more" style="background-image: url('<?= base_url('assets') ?>/img/bg-login.jpg');">
                                    <div class="d-flex ">
                                        <div class="p-2 mx-auto text-white p-5 pt-2">
                                            <img class="logo-render lozad" data-src="<?= base_url('assets') ?>/img/logo_only_white.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content-form-box forgot-box ">
                                    <!--div class=" container-fluid "><div><h5>Hai, Kawan..</h5><hr><button type="button" class="close ml-5 mr-5 pr-2 mt-3 text-dark" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="lni-close size-sm"></i> </span></button></div></div-->
                                    <div class="container-fluid">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-12">
                                                    <!--ul class=" nav nav-pills nav-fill">
											<li class="nav-item">
											<a href="#" class="nav-link disabled" id="login-form-link">Masuk Sebagai Pendana</a>
											</li>
											
										</ul-->
                                                    <button type="button" class="close ml-5 mr-5 pr-2 mt-3 text-dark" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true"><i class="lni-close size-sm"></i> </span>
                                                    </button>
                                                    <p></p>
                                                    <h4><b>Masuk Sebagai Pendana</b></h4>
                                                    <label style="font-size: 16px">Silahkan masukan detail akun Anda untuk dapat melanjutkan</label>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div id="login-form">
                                            <!-- <p>Please enter your user name and password to login</p> -->
                                            <form method="POST" action="/login" aria-label="Login">
                                                <input type="hidden" name="_token" value="8EcGDYa6p8nbuPZ8oFzXPUtz2dlJ86L2eNrqup4W">
                                                <div class="form-group row">
                                                    <div class="col-12 ">
                                                        <label for="username_login_pendana" class="col-form-label text-left">
                                                            <!--<span style="font-style: italic;">Username *</span>-->

                                                            User Name / No Hp / Email X
                                                        </label>
                                                        <input id="username_login" type="text" class="form-control" name="username" value="" placeholder="Ketik Akun Anda..." required>


                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <label for="password_login_pendana" class="col-form-label text-left">
                                                            <!--<span style="font-style: italic;">Password *</span>-->
                                                            Kata Sandi *
                                                        </label>
                                                        <input id="password_login" type="password" class="form-control" name="password" placeholder="Kata Sandi..." required>

                                                    </div>
                                                </div>

                                                <div class="row no-gutters">
                                                    <div class="col-6 float-left mb-3">
                                                        <p style="font-size: .8rem; font-weight: 600;"><a href="password/reset4a50.html?user_type=users">Lupa Kata Sandi</a></p>
                                                    </div>
                                                    <div class="col-6 float-right mb-3">
                                                        <p style="font-size: .8rem; font-weight: 600;" class="text-dark">Belum punya akun ? <a href="#" class="text-danger" data-toggle="modal" data-target="#modal_register_investor" onclick="$('#modal_login_investor').modal('hide')">Daftar di sini</a></p>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-xs-12 mt-2 mb-2">
                                                        <button type="submit" class="btn btn-md btn-block btn-danaSyariah text-white">MASUK</button>
                                                    </div>
                                                    <!-- <div class="col-lg-12 col-md-12 col-xs-12">
												<a class="btn btn-md btn-block text-success pt-3" data-toggle="modal" data-dismiss="modal" data-target="#registerModal"> <span class="text-dark"> Belum Registrasi ? </span> Klik Disini</a>
											</div>    -->
                                                </div>

                                            </form>
                                        </div>
                                        <style>
                                            .btn-danaSyariah.disabled,
                                            .btn-danaSyariah:disabled {
                                                color: #fff;
                                                background-color: #6c757d !important;
                                                border-color: #6c757d !important;
                                                background: #02775b;
                                                background-image: linear-gradient(45deg, #6c757d, #6c757d);
                                                background-image: -webkit-linear-gradient(45deg, #6c757d, #6c757d);
                                            }

                                            .panel-heading a {
                                                color: #000;
                                                font-size: 18px;
                                            }

                                            .panel-heading a.active {
                                                color: #029f5b;
                                                font-size: 18px;
                                                font-weight: bold;
                                            }

                                            .nav-pills .nav-link.active,
                                            .nav-pills .show>.nav-link {
                                                color: #fff;
                                                background: #02775b;
                                                background-image: linear-gradient(45deg, #317a12, #02775b);
                                                background-image: -webkit-linear-gradient(45deg, #317a12, #02775b);
                                                transition: all .4s ease;
                                            }

                                            .forgot-box {
                                                border-radius: 8px;
                                                background: inherit;
                                                padding: 20px;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_register_investor" class="modal fade in modal_scroll" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered ">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="login100-more" style="background-image: url('<?= base_url('assets') ?>/img/bg-login.jpg');">
                                    <div class="d-flex ">
                                        <div class="p-2 mx-auto text-white p-5 pt-2">
                                            <img class="logo-render lozad" data-src="<?= base_url('assets') ?>/img/logo_only_white.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content-form-box forgot-box ">
                                    <div class=" container-fluid ">
                                        <!--h5>Hi, Kawan Pendana..</h5-->
                                        <!--hr-->
                                        <button type="button" class="close ml-5 mr-5 pr-2 mt-3 text-dark" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="lni-close size-sm"></i> </span>
                                        </button>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class=" nav nav-pills nav-fill">

                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link Disabled" data-toggle="modal" data-target="#modal_register_investor" id="register-form-link"></a>
                                                        </li>
                                                    </ul>
                                                    <p></p>
                                                    <h4><b>Daftar Sebagai Pendana</b></h4>
                                                    <label style="font-size: 16px">Silahkan lengkapi data untuk Mendaftar.</label>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <!-- Register Tab -->
                                        <form id="register-form" method="POST" action="/register" aria-label="Register">
                                            <input type="hidden" name="_token" value="8EcGDYa6p8nbuPZ8oFzXPUtz2dlJ86L2eNrqup4W">
                                            <div class="row">
                                                <div class="col-12 float-left mb-2">
                                                    <p style="font-size: .8rem; font-weight: 600;" class="text-dark">Sudah punya akun ? <a href="#" class="text-danger" data-toggle="modal" data-target="#modal_login_investor" onclick="$('#modal_register_investor').modal('hide')">Silahkan masuk</a>
                                                    </p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group row">
                                                        <label for="username_register" class="col-12 col-form-label text-left">
                                                            <!--<span style="font-style: italic;">Username *</span>-->
                                                            Akun *
                                                        </label>
                                                        <div class="col-12">
                                                            <input id="username_register" type="text" class="form-control" name="username" placeholder="Ketik Akun Anda..." value="" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group row">
                                                        <label for="email" class="col-12 col-form-label text-left">
                                                            <!--<span style="font-style: italic;">E-Mail Address *</span>-->
                                                            <span style="font-style: italic;">E-Mail *</span>
                                                        </label>
                                                        <div class="col-12">
                                                            <input id="email_investor" type="email" class="form-control" name="email" placeholder="Ketik alamat email..." value="" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required>
                                                        </div>
                                                        <div>
                                                            <span id="error_email" style="color:red;font-size:11px;margin-left:15px"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group row">
                                                        <label for="password_register" class="col-12 col-form-label text-left">
                                                            <!--<span style="font-style: italic;">Password *</span>-->
                                                            Kata Sandi *
                                                        </label>
                                                        <div class="col-12">
                                                            <input type="password" id="register_password" class="form-control" name="password" placeholder="Ketik Kata Sandi..." required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group row">
                                                        <label for="password-confirm" class="col-12 col-form-label text-left">
                                                            <!-- <span style="font-style: italic;">Confirm Password *</span> -->
                                                            Konfirmasi Kata Sandi *
                                                        </label>
                                                        <div class="col-12">
                                                            <input id="register_password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Ketik Kembali Kata Sandi..." onkeyup="cek_confirm()" required>
                                                        </div>
                                                        <div>
                                                            <span id="error_confirm_password" style="color:red;font-size:11px;margin-left:15px"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12" style="margin-left:15px">
                                                    <span id="8char" class="fa fa-times" style="color:#FF0004;"></span>&nbsp;<small style="font-size:10px">Minimal 8 Karakter</small>&nbsp;
                                                    <input type="hidden" id="char">
                                                    <span id="ucase" class="fa fa-times" style="color:#FF0004;"></span>&nbsp;<small style="font-size:10px">Huruf Besar</small>&nbsp;
                                                    <input type="hidden" id="upper">
                                                    <span id="lcase" class="fa fa-times" style="color:#FF0004;"></span>&nbsp;<small style="font-size:10px">Huruf Kecil</small>&nbsp;
                                                    <input type="hidden" id="lower">
                                                    <span id="num" class="fa fa-times" style="color:#FF0004;"></span>&nbsp;<small style="font-size:10px">Karakter Angka</small>&nbsp;
                                                    <input type="hidden" id="int">
                                                    <span id="special_character" class="fa fa-times" style="color:#FF0004;"></span>&nbsp;<small style="font-size:10px">Karakter Spesial</small>&nbsp;
                                                    <input type="hidden" id="special_char">
                                                </div>
                                                <div class="col-lg-12">
                                                    <!--div class="form-group row">
													<div class="form-check">
														<input class="form-check-input" type="checkbox" id="agreed_term">
														<span>Agree with term and Condition <a href="/perjanjian" target="_blank">Read More...</a></span>
													</div>
												</div-->
                                                    <div class="form-group row" id="checkterm">
                                                        <div class="form-check pl-0 mx-auto">
                                                            <a class="btn" href="#" id="checks" onclick="modalTerm()">Klik disini untuk baca syarat dan ketentuan</a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="submit" id="button_register_investor" disabled class="tn btn-md btn-block btn-danaSyariah text-white">Daftar</button>
                                                        <!-- <a type="button"  class="btn btn-md btn-block text-success" data-toggle="modal" data-dismiss="modal" data-target="#loginModal"> <span class="text-dark">Sudah Punya Akun ? </span> Klik Disini</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <script type="text/javascript">
                                            function email_filter_validation_inv() {
                                                var email = document.getElementById("email_investor").value;
                                                var email_instan_inv1 = email.includes("mailinator");
                                                var email_instan_inv2 = email.includes("urhen");
                                                var email_instan_inv3 = email.includes("guerrillamail");
                                                var email_instan_inv4 = email.includes("maildrop");
                                                var email_instan_inv5 = email.includes("wemel");
                                                var email_instan_inv6 = email.includes("mt2015");
                                                var email_instan_inv7 = email.includes("dispostable");
                                                var email_instan_inv8 = email.includes("tempr");
                                                var email_instan_inv9 = email.includes("discard");
                                                var email_instan_inv10 = email.includes("mailcatch");
                                                var email_instan_inv11 = email.includes("einroit");
                                                var email_instan_inv12 = email.includes("mailnesia");
                                                var email_instan_inv13 = email.includes("yopmail");
                                                //alert(email);
                                                if (email_instan_inv1 || email_instan_inv2 || email_instan_inv3 || email_instan_inv4 || email_instan_inv5 || email_instan_inv6 || email_instan_inv7 || email_instan_inv8 || email_instan_inv9 || email_instan_inv10 || email_instan_inv11 || email_instan_inv12 || email_instan_inv13) {
                                                    $('#error_email').html('<b id="emailerror">Domain Email Anda tidak diizinkan. Silahkan gunakan domain email lain</b>');
                                                    $('#checks').hide();
                                                    $('#button_register_investor').attr('disabled', true);

                                                } else {
                                                    $('#checks').show();
                                                    $('#emailerror').hide();
                                                    return true;
                                                }
                                            }

                                            function email_filter_validation_brw() {
                                                var email = document.getElementById("email_borrower").value;
                                                var email_instan_brw1 = email.includes("mailinator");
                                                var email_instan_brw2 = email.includes("urhen");
                                                var email_instan_brw3 = email.includes("guerrillamail");
                                                var email_instan_brw4 = email.includes("maildrop");
                                                var email_instan_brw5 = email.includes("wemel");
                                                var email_instan_brw6 = email.includes("mt2015");
                                                var email_instan_brw7 = email.includes("dispostable");
                                                var email_instan_brw8 = email.includes("tempr");
                                                var email_instan_brw9 = email.includes("discard");
                                                var email_instan_brw10 = email.includes("mailcatch");
                                                var email_instan_brw11 = email.includes("einroit");
                                                var email_instan_brw12 = email.includes("mailnesia");
                                                var email_instan_brw13 = email.includes("yopmail");
                                                //alert(email);
                                                if (email_instan_brw1 || email_instan_brw2 || email_instan_brw3 || email_instan_brw4 || email_instan_brw5 || email_instan_brw6 || email_instan_brw7 || email_instan_brw8 || email_instan_brw9 || email_instan_brw10 || email_instan_brw11 || email_instan_brw12 || email_instan_brw13) {
                                                    //alert('Domain Email Anda tidak diizinkan. Silahkan gunakan domain email lain');
                                                    $('#error_email_brw').html('<b id="emailbrwerror">Domain Email Anda tidak diizinkan. Silahkan gunakan domain email lain</b>');
                                                    $('#checks_brw').hide();
                                                    $('#button_register_borrower').attr('disabled', true);

                                                } else {
                                                    $('#checks_brw').show();
                                                    $('#emailbrwerror').hide();
                                                    return true;
                                                }
                                            }
                                        </script>
                                        <style>
                                            .btn-danaSyariah.disabled,
                                            .btn-danaSyariah:disabled {
                                                color: #fff;
                                                background-color: #6c757d !important;
                                                border-color: #6c757d !important;
                                                background: #02775b;
                                                background-image: linear-gradient(45deg, #6c757d, #6c757d);
                                                background-image: -webkit-linear-gradient(45deg, #6c757d, #6c757d);
                                            }

                                            .panel-heading a {
                                                color: #000;
                                                font-size: 18px;
                                            }

                                            .panel-heading a.active {
                                                color: #029f5b;
                                                font-size: 18px;
                                                font-weight: bold;
                                            }

                                            .nav-pills .nav-link.active,
                                            .nav-pills .show>.nav-link {
                                                color: #fff;
                                                background: #02775b;
                                                background-image: linear-gradient(45deg, #317a12, #02775b);
                                                background-image: -webkit-linear-gradient(45deg, #317a12, #02775b);
                                                transition: all .4s ease;
                                            }

                                            .forgot-box {
                                                border-radius: 8px;
                                                background: inherit;
                                                padding: 20px;
                                            }
                                        </style>
                                        <script src="<?= base_url('assets') ?>/js/jquery-3.3.1.min.js"></script>
                                        <script type="text/javascript">
                                            $(document).ready(function() {
                                                $("input[type=password]").keyup(function() {

                                                    var ucase = new RegExp("[A-Z]+");
                                                    var lcase = new RegExp("[a-z]+");
                                                    var num = new RegExp("[0-9]+");
                                                    var special_character = new RegExp("[#?!@$%^&*-]+");

                                                    var thru = false;

                                                    if ($("#register_password").val().length >= 8) {
                                                        $("#8char").removeClass("fa fa-times");
                                                        $("#8char").addClass("fa fa-check");
                                                        $("#8char").css("color", "#00A41E");
                                                        $("#char").val(1);
                                                    } else {
                                                        $("#8char").removeClass("fa fa-check");
                                                        $("#8char").addClass("fa fa-times");
                                                        $("#8char").css("color", "#FF0004");
                                                        $("#char").val(0);
                                                    }

                                                    if (ucase.test($("#register_password").val())) {

                                                        $("#ucase").removeClass("fa fa-times");
                                                        $("#ucase").addClass("fa fa-check");
                                                        $("#ucase").css("color", "#00A41E");
                                                        $("#upper").val(1);
                                                    } else {
                                                        $("#ucase").removeClass("fa fa-check");
                                                        $("#ucase").addClass("fa fa-times");
                                                        $("#ucase").css("color", "#FF0004");
                                                        $("#upper").val(0);
                                                    }

                                                    if (lcase.test($("#register_password").val())) {
                                                        $("#lcase").removeClass("fa fa-times");
                                                        $("#lcase").addClass("fa fa-check");
                                                        $("#lcase").css("color", "#00A41E");
                                                        $("#lower").val(1);
                                                    } else {
                                                        $("#lcase").removeClass("fa fa-check");
                                                        $("#lcase").addClass("fa fa-times");
                                                        $("#lcase").css("color", "#FF0004");
                                                        $("#lower").val(0);
                                                    }

                                                    if (num.test($("#register_password").val())) {

                                                        $("#num").removeClass("fa fa-times");
                                                        $("#num").addClass("fa fa-check");
                                                        $("#num").css("color", "#00A41E");
                                                        $("#int").val(1);
                                                    } else {
                                                        $("#num").removeClass("fa fa-check");
                                                        $("#num").addClass("fa fa-times");
                                                        $("#num").css("color", "#FF0004");
                                                        $("#int").val(0);
                                                    }

                                                    if (special_character.test($("#register_password").val())) {
                                                        $("#special_character").removeClass("fa fa-times");
                                                        $("#special_character").addClass("fa fa-check");
                                                        $("#special_character").css("color", "#00A41E");
                                                        $("#special_char").val(1);
                                                    } else {
                                                        $("#special_character").removeClass("fa fa-check");
                                                        $("#special_character").addClass("fa fa-times");
                                                        $("#special_character").css("color", "#FF0004");
                                                        $("#special_char").val(0);
                                                    }

                                                    if (thru = true) {
                                                        if ($("#register_password").val() == $("#register_password_confirmation").val() && $("#int").val() == 1 && $("#lower").val() == 1 && $("#upper").val() == 1 && $("#char").val() == 1 && $("#setuju2").val() == 1 && $("#special_char").val() == 1) {
                                                            document.getElementById("button_register_investor").disabled = false;
                                                        } else {
                                                            document.getElementById("button_register_investor").disabled = true;
                                                        }
                                                        // else if($("#register_password").val() !== $("#register_password_confirmation").val() || $("#int").val()== 0 || $("#lower").val()== 0 || $("#upper").val()== 0 || $("#char").val()== 0 || $("#setuju2").val()== 0 || $("#special_char").val()== 0){
                                                        //   document.getElementById("button_register_investor").disabled = true; 
                                                        // }
                                                    } else {
                                                        document.getElementById("button_register_investor").disabled = true;
                                                    }
                                                });
                                            });

                                            function cek_confirm() {
                                                if ($("#register_password_confirmation").val() != $("#register_password").val()) {
                                                    $('#error_confirm_password').html('<b id="confirm_password_error">Konfirmasi kata sandi tidak sesuai dengan kata sandi baru.</b>');
                                                } else {
                                                    $('#confirm_password_error').hide();
                                                }
                                            }
                                        </script>
                                        <script>
                                            function modalTerm() {
                                                // alert()
                                                $("#modal_register_investor").modal('hide');
                                                $("#loginModalInvestor").modal('hide');
                                                $("#ModalTermCondition").modal('show');
                                                $("#ModalTermCondition").appendTo('body');
                                            }
                                        </script>
                                        <script>
                                            function readterm() {
                                                if ($("#register_password").val() == $("#register_password_confirmation").val() && $("#int").val() == 1 && $("#lower").val() == 1 && $("#upper").val() == 1 && $("#char").val() == 1 && $("#setuju2").val() == 1 && $("#special_char").val() == 1) {
                                                    document.getElementById("button_register_investor").disabled = false;
                                                } else {
                                                    document.getElementById("button_register_investor").disabled = true;
                                                }
                                                $("#modal_register_investor").modal('show');
                                                $("#ModalTermCondition").modal('hide');
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

        <div id="modal_login_borrower" class="modal fade in modal_scroll" role="dialog">
            <div class="modal-dialog modal-lg modal-dialog-centered ">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="login100-more" style="background-image: url('img/bg-login.jpg');">
                                    <div class="d-flex ">
                                        <div class="p-2 mx-auto text-white p-5 pt-2">
                                            <img class="logo-render lozad" data-src="<?= base_url('assets') ?>/img/logo_only_white.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content-form-box forgot-box ">
                                    <div class=" container-fluid ">
                                        <div>
                                            <!--h5>Hi, Kawan Penerima Pendanaan..</h5-->
                                            <!--hr-->
                                            <button type="button" class="close ml-5 mr-5 pr-2 mt-3 text-dark" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="lni-close size-sm"></i> </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class=" nav nav-pills nav-fill">
                                                        <li class="nav-item">
                                                            <!--a href="#" class="nav-link disabled" id="login-form-link">Masuk Sebagai Penerima Pendanaan</a-->
                                                        </li>


                                                    </ul>
                                                    <p></p>
                                                    <h4><b>Masuk Sebagai Penerima Pendanaan</b></h4>
                                                    <label style="font-size: 16px">Silahkan masukan detail akun Anda untuk dapat melanjutkan</label>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div id="login-form">

                                            <form method="POST" action="/borrower/login" aria-label="Login">
                                                <input type="hidden" name="_token" value="8EcGDYa6p8nbuPZ8oFzXPUtz2dlJ86L2eNrqup4W">
                                                <div class="form-group row">
                                                    <div class="col-12 ">
                                                        <label for="username_register" class="col-form-label text-left">
                                                            <!--<span style="font-style: italic;">Username *</span>-->
                                                            User Name / No Hp / Email *
                                                        </label>
                                                        <input id="username_login_brw" type="text" class="form-control" name="username" value="" placeholder="Ketik Akun Anda..." required>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <label for="username_register" class="col-form-label text-left">
                                                            <!--<span style="font-style: italic;">Password *</span>-->
                                                            Kata Sandi *
                                                        </label>
                                                        <input id="password_login" type="password" class="form-control" name="password" placeholder="Kata Sandi..." required>

                                                    </div>
                                                </div>
                                                <div class="container-fluid">
                                                    <div class="row no-gutters">
                                                        <div class="col-6 float-left mb-3" style="font-size: .8rem; font-weight: 600;">
                                                            <a href="password/reset4161.html?user_type=borrower">Lupa Kata Sandi</a>
                                                        </div>
                                                        <div class="col-6 float-right mb-3 text-dark" style="font-size: .8rem; font-weight: 600;">
                                                            Belum punya akun ? <a href="#" class="text-danger" data-toggle="modal" data-target="#modal_register_borrower" onclick="$('#modal_login_borrower').modal('hide')">Daftar di sini</a>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-xs-12 mt-2 mb-2">
                                                            <button type="submit" class="btn btn-md btn-block btn-danaSyariah text-white">MASUK</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <style>
                                            .btn-danaSyariah.disabled,
                                            .btn-danaSyariah:disabled {
                                                color: #fff;
                                                background-color: #6c757d !important;
                                                border-color: #6c757d !important;
                                                background: #02775b;
                                                background-image: linear-gradient(45deg, #6c757d, #6c757d);
                                                background-image: -webkit-linear-gradient(45deg, #6c757d, #6c757d);
                                            }

                                            .panel-heading a {
                                                color: #000;
                                                font-size: 18px;
                                            }

                                            .panel-heading a.active {
                                                color: #029f5b;
                                                font-size: 18px;
                                                font-weight: bold;
                                            }

                                            .nav-pills .nav-link.active,
                                            .nav-pills .show>.nav-link {
                                                color: #fff;
                                                background: #02775b;
                                                background-image: linear-gradient(45deg, #317a12, #02775b);
                                                background-image: -webkit-linear-gradient(45deg, #317a12, #02775b);
                                                transition: all .4s ease;
                                            }

                                            .forgot-box {
                                                border-radius: 8px;
                                                background: inherit;
                                                padding: 20px;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_register_borrower" class="modal fade in modal_scroll" role="dialog" aria-modal="true">
            <div class="modal-dialog modal-lg modal-dialog-centered ">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="login100-more" style="background-image: url('<?= base_url('assets') ?>/img/bg-login.jpg');">
                                    <div class="d-flex ">
                                        <div class="p-2 mx-auto text-white p-5 pt-2">
                                            <img class="logo-render lozad" data-src="<?= base_url('assets') ?>/img/logo_only_white.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                <div class="content-form-box forgot-box ">
                                    <div class=" container-fluid ">
                                        <div>
                                            <!--h5>Assalamualaikum</h5-->
                                            <!--hr-->
                                            <button type="button" class="close ml-5 mr-5 pr-2 mt-3 text-dark" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="lni-close size-sm"></i> </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class=" nav nav-pills nav-fill">
                                                        <!---->
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link Disabled" data-toggle="modal" data-target="#modal_register_borrower" id="register-form-link"></a>
                                                        </li>
                                                    </ul>
                                                    <p></p>
                                                    <h4><b>Daftar Sebagai Penerima Pendanaan</b></h4>
                                                    <label style="font-size: 16px">Silahkan mendaftar sebagai penerima pendanaan PT. Cankul Indonesia di sini.</label>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <!-- Register Tab -->
                                        <form id="register-form" method="POST" action="/borrower/register" aria-label="Register">
                                            <input type="hidden" name="_token" value="8EcGDYa6p8nbuPZ8oFzXPUtz2dlJ86L2eNrqup4W">
                                            <!-- social button -->
                                            <!--
								-->
                                            <!-- end social media button -->
                                            <div class="row">
                                                <div class="col-12 float-left mb-2">
                                                    <p style="font-size: .8rem; font-weight: 600;" class="text-dark">Sudah punya akun ?
                                                        <a href="#" class="text-danger" data-toggle="modal" data-target="#modal_login_borrower" onclick="$('#modal_register_borrower').modal('hide')">Silahkan masuk</a>
                                                    </p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group row">
                                                        <label for="username_register_borrower" class="col-12 col-form-label text-left">
                                                            <!--<span style="font-style: italic;">Username *</span>-->
                                                            Nama Pengguna *
                                                        </label>
                                                        <div class="col-12">
                                                            <input id="username_register" type="text" class="form-control" name="username_borrower" placeholder="Ketik Akun Anda..." value="" required>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group row">
                                                        <label for="email" class="col-12 col-form-label text-left">
                                                            <!--<span style="font-style: italic;">E-Mail Address *</span>-->
                                                            <span style="font-style: italic;">E-mail *</span>
                                                        </label>
                                                        <div class="col-12">
                                                            <input id="email_borrower" type="email" class="form-control" name="email" placeholder="Ketik Alamat Email..." value="" onkeyup="email_filter_validation_brw()" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required>
                                                        </div>
                                                        <div>
                                                            <span id="error_email_brw" style="color:red;font-size:11px;margin-left:15px"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group row">
                                                        <label for="password_register" class="col-12 col-form-label text-left">
                                                            <!--<span style="font-style: italic;">Password *</span>-->
                                                            Kata Sandi *
                                                        </label>
                                                        <div class="col-12" id="divPass">
                                                            <input id="password_register_borrower" type="password" class="form-control" name="password" placeholder="Ketik Kata Sandi..." required>
                                                            <span id="result"></span>
                                                        </div>
                                                        <div id="password-strength-status"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group row">
                                                        <label for="password-confirm" class="col-12 col-form-label text-left">

                                                            Konfirmasi Kata Sandi *
                                                        </label>

                                                        <div class="col-12">

                                                            <input id="password_confirm_borrower" type="password" class="form-control" name="password_confirmation" onkeyup="cek_confirm_brw()" placeholder="Ketik Kembali Kata Sandi..." required>
                                                            <input type="hidden" id="pass_conf_brw">
                                                        </div>
                                                        <div>
                                                            <span id="error_confirm_password_brw" style="color:red;font-size:11px;margin-left:15px"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="margin-left:15px">
                                                    <span id="8char_bor" class="fa fa-times" style="color:#FF0004;"></span>&nbsp;<small style="font-size:10px">Minimal 8 Karakter</small>&nbsp;
                                                    <input type="hidden" id="char_bor">
                                                    <span id="ucase_bor" class="fa fa-times" style="color:#FF0004;"></span>&nbsp;<small style="font-size:10px">Huruf Besar</small>&nbsp;
                                                    <input type="hidden" id="upper_bor">
                                                    <span id="lcase_bor" class="fa fa-times" style="color:#FF0004;"></span>&nbsp;<small style="font-size:10px">Huruf Kecil</small>&nbsp;
                                                    <input type="hidden" id="lower_bor">
                                                    <span id="num_bor" class="fa fa-times" style="color:#FF0004;"></span>&nbsp;<small style="font-size:10px">Karakter Angka</small>&nbsp;
                                                    <input type="hidden" id="int_bor">
                                                    <span id="special_character_bor" class="fa fa-times" style="color:#FF0004;"></span>&nbsp;<small style="font-size:10px">Karakter Spesial</small>&nbsp;
                                                    <input type="hidden" id="special_char_bor">
                                                </div>
                                                <div class="col-lg-12">
                                                    <!--div class="form-group row">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" id="agreed_term" >
													<span>Agree with term and Condition <a href="/perjanjian" target="_blank">Read More...</a></span>
												</div>
											</div-->
                                                    <div class="form-group row" id="checkterm">
                                                        <div class="form-check ml-0 text-left">
                                                            <input type="checkbox" id="setujusyarat" checked disabled> Saya Menyetujui <a id="checks_brw" href="#" onclick="modalTerm2()">Syarat dan Ketentuan dan Kebijakan Privasi</a> yang berlaku.
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="submit" id="button_register_borrower" disabled class="tn btn-md btn-block btn-danaSyariah text-white">Daftar</button>
                                                        <!-- <a type="button"  class="btn btn-md btn-block text-success" data-toggle="modal" data-dismiss="modal" data-target="#loginModal"> <span class="text-dark">Sudah Punya Akun ? </span> Klik Disini</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <style>
                                            .btn-danaSyariah.disabled,
                                            .btn-danaSyariah:disabled {
                                                color: #fff;
                                                background-color: #6c757d !important;
                                                border-color: #6c757d !important;
                                                background: #02775b;
                                                background-image: linear-gradient(45deg, #6c757d, #6c757d);
                                                background-image: -webkit-linear-gradient(45deg, #6c757d, #6c757d);
                                            }

                                            .panel-heading a {
                                                color: #000;
                                                font-size: 18px;
                                            }

                                            .panel-heading a.active {
                                                color: #029f5b;
                                                font-size: 18px;
                                                font-weight: bold;
                                            }

                                            .nav-pills .nav-link.active,
                                            .nav-pills .show>.nav-link {
                                                color: #fff;
                                                background: #02775b;
                                                background-image: linear-gradient(45deg, #317a12, #02775b);
                                                background-image: -webkit-linear-gradient(45deg, #317a12, #02775b);
                                                transition: all .4s ease;
                                            }

                                            .forgot-box {
                                                border-radius: 8px;
                                                background: inherit;
                                                padding: 20px;
                                            }
                                        </style>
                                        <script>
                                            $(document).on("input", "#username_login2", function(event) {
                                                this.value = this.value.replace(/[^a-zA-Z0-9_.@]/g, '');
                                            });

                                            $(document).on("input", "#username_register", function(event) {
                                                this.value = this.value.replace(/[^a-zA-Z0-9_.]/g, '');
                                            });
                                            $(document).ready(function() {
                                                $("input[type=password]").keyup(function() {

                                                    var ucase_bor = new RegExp("[A-Z]+");
                                                    var lcase_bor = new RegExp("[a-z]+");
                                                    var num_bor = new RegExp("[0-9]+");
                                                    var special_character_bor = new RegExp("[#?!@$%^&*-]+");

                                                    var thruee = false;

                                                    if ($("#password_register_borrower").val().length >= 8) {
                                                        $("#8char_bor").removeClass("fa fa-times");
                                                        $("#8char_bor").addClass("fa fa-check");
                                                        $("#8char_bor").css("color", "#00A41E");
                                                        $("#char_bor").val(1);
                                                    } else {
                                                        $("#8char_bor").removeClass("fa fa-check");
                                                        $("#8char_bor").addClass("fa fa-times");
                                                        $("#8char_bor").css("color", "#FF0004");
                                                        $("#char_bor").val(0);
                                                    }

                                                    if (ucase_bor.test($("#password_register_borrower").val())) {

                                                        $("#ucase_bor").removeClass("fa fa-times");
                                                        $("#ucase_bor").addClass("fa fa-check");
                                                        $("#ucase_bor").css("color", "#00A41E");
                                                        $("#upper_bor").val(1);
                                                    } else {
                                                        $("#ucase_bor").removeClass("fa fa-check");
                                                        $("#ucase_bor").addClass("fa fa-times");
                                                        $("#ucase_bor").css("color", "#FF0004");
                                                        $("#upper_bor").val(0);
                                                    }

                                                    if (lcase_bor.test($("#password_register_borrower").val())) {
                                                        $("#lcase_bor").removeClass("fa fa-times");
                                                        $("#lcase_bor").addClass("fa fa-check");
                                                        $("#lcase_bor").css("color", "#00A41E");
                                                        $("#lower_bor").val(1);
                                                    } else {
                                                        $("#lcase_bor").removeClass("fa fa-check");
                                                        $("#lcase_bor").addClass("fa fa-times");
                                                        $("#lcase_bor").css("color", "#FF0004");
                                                        $("#lower_bor").val(0);
                                                    }

                                                    if (num_bor.test($("#password_register_borrower").val())) {

                                                        $("#num_bor").removeClass("fa fa-times");
                                                        $("#num_bor").addClass("fa fa-check");
                                                        $("#num_bor").css("color", "#00A41E");
                                                        $("#int_bor").val(1);
                                                    } else {
                                                        $("#num_bor").removeClass("fa fa-check");
                                                        $("#num_bor").addClass("fa fa-times");
                                                        $("#num_bor").css("color", "#FF0004");
                                                        $("#int_bor").val(0);
                                                    }

                                                    if (special_character_bor.test($("#password_register_borrower").val())) {
                                                        $("#special_character_bor").removeClass("fa fa-times");
                                                        $("#special_character_bor").addClass("fa fa-check");
                                                        $("#special_character_bor").css("color", "#00A41E");
                                                        $("#special_char_bor").val(1);
                                                    } else {
                                                        $("#special_character_bor").removeClass("fa fa-check");
                                                        $("#special_character_bor").addClass("fa fa-times");
                                                        $("#special_character_bor").css("color", "#FF0004");
                                                        $("#special_char_bor").val(0);
                                                    }

                                                    if (thruee = true) {
                                                        if ($("#password_register_borrower").val() == $("#password_confirm_borrower").val() && $("#int_bor").val() == 1 && $("#lower_bor").val() == 1 && $("#upper_bor").val() == 1 && $("#char_bor").val() == 1 && $("#setuju2_bor").val() == 1 && $("#special_char_bor").val() == 1) {
                                                            document.getElementById("button_register_borrower").disabled = false;
                                                        } else {
                                                            document.getElementById("button_register_borrower").disabled = true;
                                                        }
                                                        // else if($("#password_register_borrower").val() !== $("#password_confirm_borrower").val() || $("#int_bor").val()== 0 || $("#lower_bor").val()== 0 || $("#upper_bor").val()== 0 || $("#char_bor").val()== 0 || $("#setuju2_bor").val()== 0 || $("#special_char_bor").val()== 0){
                                                        // 	document.getElementById("button_register_borrower").disabled = true; 
                                                        // }
                                                    } else {
                                                        document.getElementById("button_register_borrower").disabled = true;
                                                    }

                                                });
                                                // function checkStrength(password) {

                                                // }


                                                // $('input[type="checkbox"]').click(function(){
                                                //     if($(this).is(":checked")){
                                                //         $('#button_register_borrower').prop('disabled',false);
                                                //     }
                                                //     else if($(this).is(":not(:checked)")){
                                                //         $('#button_register_borrower').prop('disabled',true);
                                                //     }
                                                // });
                                                $("#setujusyarat").attr("checked", false);
                                                $(document).on('click', '#setujusyarat', function() {
                                                    if ($(this).prop("checked") == true) {
                                                        $("#button_register_borrower").attr('disabled', false);
                                                    } else {
                                                        $("#button_register_borrower").attr('disabled', true);
                                                    }
                                                });
                                            });
                                        </script>
                                        <script>
                                            function cek_confirm_brw() {
                                                if ($("#password_register_borrower").val() != $("#password_confirm_borrower").val()) {
                                                    $('#error_confirm_password_brw').html('<b id="confirm_password_error_brw">Konfirmasi kata sandi tidak sesuai dengan kata sandi baru.</b>');
                                                    $('#setujusyarat').attr('disabled', true);
                                                    $('input[type=checkbox]').prop('checked', false);
                                                } else {
                                                    $('#confirm_password_error_brw').hide();
                                                    $('#setujusyarat').attr('disabled', false);
                                                }

                                            }

                                            function modalTerm2() {
                                                // alert()
                                                $("#modal_register_borrower").modal('hide');
                                                $("#loginModalBorrower").modal('hide');
                                                $("#ModalTermCondition2").modal('show');
                                                $("#ModalTermCondition2").appendTo('body');
                                            }
                                        </script>
                                        <script>
                                            function readterm2() {
                                                if ($("#password_register_borrower").val() == $("#password_confirm_borrower").val() && $("#int_bor").val() == 1 && $("#lower_bor").val() == 1 && $("#upper_bor").val() == 1 && $("#char_bor").val() == 1 && $("#setuju2_bor").val() == 1 && $("#special_char_bor").val() == 1) {
                                                    document.getElementById("button_register_borrower").disabled = false;
                                                } else {
                                                    document.getElementById("button_register_borrower").disabled = true;
                                                }
                                                $("#modal_register_borrower").modal('show');
                                                $("#ModalTermCondition2").modal('hide');
                                            }
                                        </script>
                                        <script>
                                            $('#setuju').bind('click', function() {
                                                if ($(this).is(":checked")) {
                                                    $('#btnStj').removeAttr('disabled');
                                                    $('#btnStj').removeClass('btn-default').addClass('btn-success');
                                                    $("#setuju2").val(1);
                                                } else {
                                                    $('#btnStj').attr("disabled", true);
                                                    $('#btnStj').removeClass('btn-success').addClass('btn-default');
                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    <div id="loginModalAs" class="modal fade in modal_scroll" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <!-- Modal content-->
            <div class="modal-content modal-body">
                <!--div class="modal-body"-->
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="login100-more" style="background-image: url('img/bg-login.jpg');">
                            <div class="d-flex ">
                                <div class="p-2 mx-auto text-white p-5 pt-2">
                                    <img class="logo-render lozad" data-src="<?= base_url('assets') ?>/img/logo_only_white.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="content-form-box forgot-box ">
                            <div class=" container-fluid ">
                                <div>
                                    <!--<h5>Hi, Kawan..</h5>-->
                                    <label>Silahkan pilih untuk melanjutkan sebagai: </label>
                                    <hr>
                                    <button type="button" class="close ml-5 mr-5 pr-2 mt-3 text-dark" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="lni-close size-sm"></i> </span>
                                    </button>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class=" nav nav-pills nav-fill">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="modal" data-target="#modal_login_investor" data-dismiss="modal" aria-label="Close" class="nav-link active mx-1 my-1">PENDANA</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#" data-toggle="modal" data-target="#modal_login_borrower" data-dismiss="modal" aria-label="Close" class="nav-link active mx-1 my-1">PENERIMA PENDANAAN</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/div-->
            </div>
        </div>
    </div>





    <div id="registerModalAs" class="modal fade in modal_scroll" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <!-- Modal content-->
            <div class="modal-content modal-body">
                <!--div class="modal-body"-->
                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="login100-more" style="background-image: url('img/bg-login.jpg');">
                            <div class="d-flex ">
                                <div class="p-2 mx-auto text-white p-5 pt-2">
                                    <img class="logo-render lozad" data-src="<?= base_url('assets') ?>/img/logo_only_white.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="content-form-box forgot-box ">
                            <div class=" container-fluid ">
                                <div>
                                    <!--<h5>Hi, Kawan..</h5>-->
                                    <label>Silahkan pilih untuk melanjutkan sebagai: </label>
                                    <hr>
                                    <button type="button" class="close ml-5 mr-5 pr-2 mt-3 text-dark" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><i class="lni-close size-sm"></i> </span>
                                    </button>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class=" nav nav-pills nav-fill">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="modal" data-target="#modal_register_investor" data-dismiss="modal" aria-label="Close" class="nav-link active mx-1 my-1">PENDANA</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#" data-toggle="modal" data-target="#modal_register_borrower" class="nav-link active mx-1 my-1" id="register-form-link" onclick="$('#registerModalAs').modal('hide')">PENERIMA PENDANAAN</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/div-->
            </div>
        </div>
    </div>





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