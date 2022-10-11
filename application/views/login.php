   <style>
       /* .golden_text h1, .golden_text p, .golden_text h3, .golden_text h5, .golden_text i, .golden_text a{
        color:#F1C411 !important;
    } */

       .white_text h1,
       .white_text i,
       .white_text h5 {
           color: #FFF !important;
       }

       .img-forgot {
           width: 60%;
       }

       @media only screen and (max-width: 600px) {
           .img-forgot {
               width: 100%;
           }
       }

       @media only screen and (max-width: 768px) {
           .img-forgot {
               width: 80%;
           }
       }
   </style>

   <div class="sub-banner-2 pt-5">
       <div class="container pt-5">
           <div class="team-wrapper pt-5">


               <div id="login-form">

                   <form method="POST" action="/borrower/login" aria-label="Login">
                       <input type="hidden" name="_token" value="8EcGDYa6p8nbuPZ8oFzXPUtz2dlJ86L2eNrqup4W">
                       <div class="form-group row">
                           <div class="col-12 ">
                               <label for="username_register" class="col-form-label text-left">
                                   <!--<span style="font-style: italic;">Username *</span>-->
                                   User Name / No Hp / Email *
                               </label>
                               <input id="username_login_brw" type="text" class="form-control" name="username" value="" placeholder="Ketik Akun Anda..." required="">

                           </div>
                       </div>
                       <div class="form-group row">
                           <div class="col-12">
                               <label for="username_register" class="col-form-label text-left">
                                   <!--<span style="font-style: italic;">Password *</span>-->
                                   Kata Sandi *
                               </label>
                               <input id="password_login" type="password" class="form-control" name="password" placeholder="Kata Sandi..." required="">

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
               <!-- </div>
               </div> -->

           </div>
       </div>
       <br><br><br><br>
   </div>

   <style type="text/css">
       /*

       .title-with-line {
           margin-left: -5px;
           /* height: 50px; */
       background-image: -webkit-linear-gradient(bottom, #ffc100 50%, transparent 50%);
       }

       /*
.font-montserrat-bold {
    font-family: 'Montserrat-Bold', sans-serif !important;
}*/
       .serviceBox {
           color: #303030;
           background-color: #fff;
           font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
           ;
           text-align: center;
           padding: 25px 10px;
           margin: 50px 0 50px;
           border-radius: 15px;
       }

       .bg-dsi-gradient {
           background: rgb(231, 255, 238);
           background: -moz-linear-gradient(176deg, rgba(231, 255, 238, 0.3) 0%, rgba(255, 255, 255, 1) 100%);
           background: -webkit-linear-gradient(176deg, rgba(231, 255, 238, 0.3) 0%, rgba(255, 255, 255, 1) 100%);
           background: linear-gradient(176deg, rgba(231, 255, 238, 0.3) 0%, rgba(255, 255, 255, 1) 100%);
           filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e7ffee", endColorstr="#ffffff", GradientType=1);
       }

       .bg-dsi-gradient-flip {
           background: rgb(231, 255, 238);
           background: -moz-linear-gradient(0deg, rgba(231, 255, 238, 0.3) 0%, rgba(255, 255, 255, 1) 100%);
           background: -webkit-linear-gradient(0deg, rgba(231, 255, 238, 0.3) 0%, rgba(255, 255, 255, 1) 100%);
           background: linear-gradient(0deg, rgba(231, 255, 238, 0.3) 0%, rgba(255, 255, 255, 1) 100%);
           filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e7ffee", endColorstr="#ffffff", GradientType=1);
       }

       .serviceBox .service-icon {
           color: #fff;
           background: linear-gradient(to bottom, #0faf3f, #FAC93C);
           font-size: 40px;
           line-height: 100px;
           height: 100px;
           width: 100px;
           margin: -100px auto 30px;
           border-radius: 50%;
           display: block;
           transition: all 0.3s ease 0s;
       }

       .serviceBox:hover .service-icon {
           font-size: 60px;
           box-shadow: 0 0 20px -5px #000;
       }

       .serviceBox:hover {
           box-shadow: 0 0 20px -5px #000;
       }

       .serviceBox .title {
           color: #0faf3f;
           font-size: 13px;
           font-weight: 600;
           text-transform: uppercase;
           margin: 0 0 10px;
       }

       .serviceBox .description {
           font-size: 20px;
           text-align: center;
           font-weight: bold;
           /*text-transform: uppercase;*/
           margin: 0 0 20px;
       }

       .serviceBox .note {
           font-size: 9px;
           text-align: center;
           font-weight: 300;
           text-transform: uppercase;
       }

       .disclaimerBox {
           column-count: 2;
       }

       .logokom {
           width: 80px;
           height: auto;
           -ms-flex: none;
           -webkit-flex: none;
           flex: none;
           opacity: 0.8;
           margin-right: auto;
           margin-left: auto;
       }

       @media only screen and (max-width:990px) {
           .serviceBox {
               margin: 110px 0 0;
           }
       }

       @media only screen and (max-width:768) {
           .serviceBox {
               margin: 110px 0 0;
           }

           .disclaimerBox {
               Width: 90%;
               column-count: 2;
           }
       }

       @media only screen and (max-width:480px) {
           .serviceBox {
               margin: 110px 0 0;
           }

           .disclaimerBox {
               Width: 90%;
               column-count: 1;
           }
       }
   </style>