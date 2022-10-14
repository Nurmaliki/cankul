<div id="modal_register_investor" class="modal fade in modal_scroll" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered ">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
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
                                <form id="register_funder_form" method="POST" action="<?= base_url() ?>register_funder/action" aria-label="Register">
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
                                                    Username *
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
                                            <!-- <div class="form-group row" id="checkterm">
                                                        <div class="form-check pl-0 mx-auto">
                                                            <a class="btn" href="#" id="checks" onclick="modalTerm()">Klik disini untuk baca syarat dan ketentuan</a>
                                                        </div>
                                                    </div> -->
                                            <div>
                                                <button type="submit" id="button_register_investor" class="tn btn-md btn-block btn-danaSyariah text-white">Daftar</button>
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
                                            // $('#button_register_investor').attr('disabled', true);

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

                                            // if (thru = true) {
                                            if ($("#register_password").val() == $("#register_password_confirmation").val() && $("#int").val() == 1 && $("#lower").val() == 1 && $("#upper").val() == 1 && $("#char").val() == 1 && $("#special_char").val() == 1) {
                                                document.getElementById("button_register_investor").disabled = false;
                                            } else {
                                                document.getElementById("button_register_investor").disabled = true;
                                            }
                                            // else if($("#register_password").val() !== $("#register_password_confirmation").val() || $("#int").val()== 0 || $("#lower").val()== 0 || $("#upper").val()== 0 || $("#char").val()== 0 || $("#setuju2").val()== 0 || $("#special_char").val()== 0){
                                            //   document.getElementById("button_register_investor").disabled = true; 
                                            // }
                                            // } else {
                                            //     document.getElementById("button_register_investor").disabled = true;
                                            // }
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