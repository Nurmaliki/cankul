<div id="loginModalBorrower" class="modal fade in modal_scroll" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered ">
        <!-- Modal content-->
        <div class="modal-content modal-body">
            <!--div class="modal-body"-->
            <div class="row no-gutters">
                <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="login100-more" style="background-image: url('<?= base_url('assets') ?>/img/bg-login.jpg');">
                        <div class="d-flex ">
                            <div class="p-2 mx-auto text-white p-5 pt-2">
                                <img class="logo-render lozad" data-src="<?= base_url('assets') ?>/img/logo_only_white.png" alt="">
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
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
                                    background-image: linear-gradient(45deg, #00ffc2, #00ffc2);
                                    background-image: -webkit-linear-gradient(45deg, #00ffc2, #00ffc2);
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