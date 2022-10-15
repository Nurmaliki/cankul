 <div id="modal_register_borrower" class="modal fade in modal_scroll" role="dialog" aria-modal="true">
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
                                             <h4><b>Daftar Sebagai Beneficiary</b></h4>
                                             <label style="font-size: 16px">Silahkan mendaftar sebagai penerima pendanaan PT. Cankul Indonesia di sini.</label>
                                         </div>
                                     </div>
                                     <hr>
                                 </div>
                                 <!-- Register Tab -->
                                 <form id="register_beneficiary_form" method="POST" action="<?= base_url() ?>register_beneficiary/action" aria-label="Register">
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
                                             <!-- <div class="form-group row" id="checkterm">
                                                 <div class="form-check ml-0 text-left">
                                                     <input type="checkbox" id="setujusyarat" checked disabled> Saya Menyetujui <a id="checks_brw" href="#" onclick="modalTerm2()">Syarat dan Ketentuan dan Kebijakan Privasi</a> yang berlaku.
                                                 </div>
                                             </div> -->
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

                                             // if (thruee = true) {
                                             if ($("#password_register_borrower").val() == $("#password_confirm_borrower").val() && $("#int_bor").val() == 1 && $("#lower_bor").val() == 1 && $("#upper_bor").val() == 1 && $("#char_bor").val() == 1 && $("#special_char_bor").val() == 1) {
                                                 document.getElementById("button_register_borrower").disabled = false;
                                             } else {
                                                 document.getElementById("button_register_borrower").disabled = true;
                                             }
                                             // else if($("#password_register_borrower").val() !== $("#password_confirm_borrower").val() || $("#int_bor").val()== 0 || $("#lower_bor").val()== 0 || $("#upper_bor").val()== 0 || $("#char_bor").val()== 0 || $("#setuju2_bor").val()== 0 || $("#special_char_bor").val()== 0){
                                             // 	document.getElementById("button_register_borrower").disabled = true; 
                                             // }
                                             // } else {
                                             //     document.getElementById("button_register_borrower").disabled = true;
                                             // }

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