  <div id="modal_login_investor" class="modal fade in modal_scroll" role="dialog">
      <div class="modal-dialog modal-lg modal-dialog-centered ">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-body">
                  <div class="row no-gutters">

                      <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
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
                                              <h4><b>Masuk Sebagai Funder</b></h4>
                                              <label style="font-size: 16px">Silahkan masukan detail akun Anda untuk dapat melanjutkan</label>
                                          </div>
                                      </div>
                                      <hr>
                                  </div>
                                  <div id="login-form">
                                      <!-- <p>Please enter your user name and password to login</p> -->
                                      <form id="login_funder_form" method="POST" action="<?= base_url() ?>login/funder" aria-label="Login">
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
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>