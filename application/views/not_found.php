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
               <img class="pb-3 img-responsive img-forgot" src="<?= base_url('assets') ?>/img/forgotpassword.png" alt="Pendanaan Halal">
               <h1>404</h1>
               <h3>Maaf, Halaman yang anda cari belum tersedia</h3>
               <small id="passwordHelpBlock" class="form-text text-muted pt-4">
                   <a href="<?= base_url() ?>"> <i class="fas fa-arrow-left pr-2"></i> Kembali ke halaman Home </a>
               </small>
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