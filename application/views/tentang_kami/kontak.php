<style>
    .mapouter {
        text-align: right;
        /* height:500px; */
        width: 100%;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 100%;
        width: 100%;
    }
</style>
<!-- hero us start -->
<div class="about-us content-area-2 bg-green-soft banner-style-one parallax" data-speed-x="30" data-speed-y="40">
    <!-- <img src="img/wave-static-02.svg" class="w-100 position-absolute ts-bottom__0"> -->
    <div>

        <div id="parallax-container" class="container pt-5 pb-5 banner-style-two">
            <div class="row parallax" data-speed-x="10" data-speed-y="10">
                <div class="col-lg-7 col-xs-12 align-self-center pt-5 ">

                    <div class="about-texts">
                        <h2 class="wow fadeInLeft delay-03s">
                            <p style="font-weight: 500; font-size: .9em; line-height: 1em; display: block;"> KONTAK </p>
                        </h2>
                        <p style="font-size: 1.2em; line-height: 1.5em; font-weight: 400;" class="pb-3 wow fadeInLeft delay-09s pt-3">Sapa kami, kami dengan senang hati datang atau dikunjungi <br></p>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <!-- <a href="#" data-toggle="modal" data-target="#registerModal" class="blog-slider__button parallax" data-speed-x="10" data-speed-y="10">Jadi Penulis</a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 pt-5 ">
                    <!-- <canvas></canvas> -->
                    <div id="parallax-container">
                        <!-- <img class="start-png-home parallax" src="/img/search-man.png"  alt="" data-speed-x="60" data-speed-y="44">  -->
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/eiubt79exTI?start=9" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <div class="hero-slide lazy pt-2 wow fadeInRight delay-03s">
                            <div>
                                <div class="image parallax" data-speed-x="20" data-speed-y="28" style="padding:20% 0">
                                    <img src="<?= base_url('assets') ?>/img/ojk-mui_n.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 pt-5 ">
                    <div id="parallax-container">
                        <div class="hero-slide lazy pt-2 wow fadeInRight delay-03s">
                            <div>
                                <div class="image parallax" data-speed-x="20" data-speed-y="28" style="padding:25% 0 !important">
                                    <img src="<?= base_url('assets') ?>/img/Stamp_Legal_dan_Aman.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div>
        <!-- hero us start -->

        <!-- contact content start -->
        <div class="contact-2 content-area-7">
            <div class="container wow fadeInUp delay-04s">
                <div class="main-title">
                    <h1>Kontak Kami</h1>
                </div>


                <div class="contact-info">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 contact-info">
                            <i class="fa fa-map-marker"></i>
                            <p>Alamat Kantor</p>
                            <strong>
                                Jalan jalan
                                <!-- District 8, Prosperity Tower Lantai 12 Unit J,<br>
                                    JL. Jendral Sudirman Kav. 52-53,<br>
                                    Kelurahan Senayan, Kecamatan Kebayoran Baru,<br>
                                    Jakarta Selatan 12190<br> -->
                            </strong>
                        </div>
                        <div class="col-md-4 col-sm-6 contact-info">
                            <i class="fa fa-phone"></i>
                            <p>Telepon</p>
                            <strong>
                                <p>Phone: (021) 1234 4567</p>
                                <!--
                        Phone: +62 (21) 521 0306 <br>
                        Phone: +62 (21) 521 0142 <br>
                        -->

                                WA : <a rel='noreferrer' href='https://wa.me/628111111111?text=Assalamualaikum,%20Saya%20tertarik%20pada%20Dana%20Syariah.'> 628111111111</a><br>
                            </strong>
                        </div>
                        <div class="col-md-4 col-sm-6 contact-info">
                            <i class="fa fa-envelope"></i>
                            <p>Alamat Email</p>
                            <strong>cso@danasyariah.id</strong>
                        </div>
                        <!-- <div class="col-md-3 col-sm-6 contact-info">
                    <i class="fa fa-fax"></i>
                    <p>Fax</p>
                    <strong>+55 417 634 7X71</strong>
                </div> -->
                    </div>
                </div>

                <form action="https://www.danasyariah.id/guest/message" method="POST">
                    <input type="hidden" name="_token" value="LA2IyPDpXf8M1Dqar2Cv33FZSK1Dyulo6JbMAALq">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group number">
                                <input type="text" name="phone" class="form-control" placeholder="Number" required>
                            </div>
                            <div class="form-group subject">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group message">
                                <textarea class="form-control" name="message" placeholder="Write message" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <br>
                            <div class="send-btn text-center">
                                <button type="submit" class="btn btn-color btn-md">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- contact content end -->
        <!-- Google map start -->
        <div class="section wow fadeInUp delay-04s">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.138927685207!2d106.8063356!3d-6.227049999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4055c155553%3A0x28d147e6cf574c9f!2sPT%20Dana%20Syariah%20Indonesia%20%3A%20Platform%20Investasi%20Syariah!5e0!3m2!1sid!2sid!4v1574920668624!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    <a href="https://www.maps-erstellen.de"></a>
                </div>

            </div>
        </div>
        <!-- Google map end -->

        <style type="text/css">
            /*
@font-face {
    font-family: 'Montserrat-Bold';
    src: url('https://www.danasyariah.id/admin/assets/fonts/Montserrat-Bold.ttf');
}*/
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