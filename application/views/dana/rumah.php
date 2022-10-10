<div class="title-section" style="padding-top: 100px;">
    <div class="container">
        <div class="row wow fadeInUp delay-04s">
            <div class="col-12">
                <div class="row">
                    <div class="detail col-12">
                        <h2 class="text-left heading">
                            <b>Dana Rumah</b>
                        </h2>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 text-left">
                        <p><b>Dana Rumah</b> merupakan layanan Dana Syariah Indonesia, untuk alternatif pembiayaan kepemilikan rumah dengan skema syariah, yang mudah.</p>
                        <br>
                        <p><b>4 Alasan mudah punya rumah, dengan Dana Rumah</b><br>
                            1.&nbsp Skema akad syariah.<br>
                            2.&nbsp DP bisa 0% dan angsuran lebih ringan.<br>
                            3.&nbsp Terbuka untuk Wiraswasta dan Karyawan.<br>
                            4.&nbsp Daftar online, proses mudah dan cepat.<br></p>
                        <br>
                        <p><b>Syarat Bergabung :</b><br>
                            1.&nbsp Warga negara Indonesia.<br>
                            2.&nbsp Usia minimal 21 tahun, maksimal 55 tahun pada waktu akhir pelunasan.<br>
                            3.&nbsp Untuk rumah baru (indent/ready stock), rumah bekas (second), take over.<br></p>
                    </div>
                    <div class="col-4 text-right">
                        <img alt="dana syariah indonesia" class="start-png-home parallax d-none d-xl-block d-lg-block pl-10" src="/img/kalkulator_image.png">
                    </div>
                    <div class="col-8 text-left">
                        <br>
                        <p><b>Tertarik mengajukan pembiayaan kepemilikan rumah?</b><br></p>
                        <p>Ajukan segera melalui mobile app Dana Syariah Indonesia, yang dapat didownload melalui <a href="https://play.google.com/store/apps/details?id=com.cankul.mobilecankul">Android playstore</a> dan <a href="https://itunes.apple.com/US/app/id1461445952?mt=8">Apple App Store</a> dan juga website <a href="https://www.cankul.id">cankul.id</a>.<br></p>
                    </div>
                    <div class="col-4 text-right">
                        <br>
                        <br>
                        <a href="https://play.google.com/store/apps/details?id=com.cankul.mobilecankul" class="parallax  mb-3 ml-auto lozad" data-speed-x="20" data-speed-y="4"><img class="img-fluid mt-2" src="https://www.cankul.id/img/ic-google-play-png-logo.png" width="138" alt=""></a>
                        <span width="50"></span>
                        <a href="https://itunes.apple.com/US/app/id1461445952?mt=8" class="mb-3  mr-4 parallax wowc fadeInUp delay-04s ml-auto" data-speed-x="10" data-speed-y="4">
                            <img class="img-fluid mt-2 lozad" src="https://www.cankul.id/img/ic-app-store-png-logo.png" width="150" height="30" alt="download mobile app store">
                        </a>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
<div class="row">
    <p><br></p>
</div>
<div class="kalkulator-kpr bg-dsi-gradient-flip" style="padding-top: 10px !important;font-size: 14px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 s-brd-1 wow fadeInUp delay-04s">
                <div class="services-info-5 text-left" style="background: #dfe6e9 !important;border-radius: 0px !important;">
                    <div class="col">


                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label for="file" id="step-manual-4"> Tujuan Pembiayaan <span style="color: red;">* </span></label>
                                <select name="tujuan_pendanaan" class="form-control custom-select tujuanPendanaanSelect mb-2" id="tujuan_pendanaan" disabled>
                                    <!--<option value="">Pilih</option>-->
                                    <option value="1">Kepemilikan Rumah</option>

                                </select>
                                <span id="kepemilikanRumah" class="d-none" style="font-size: 10px;">Kepemilikan Rumah adalah pinjaman pemilikan rumah dengan syarat telah/mampu melunasi uang muka</span>
                                <span id="praKepemilikanRumah" class="d-none" style="font-size: 10px;">Pra Kepemilikan Rumah adalah pinjaman uang muka untuk pemilikan rumah yang dapat dicicil maksimal selama 12 bulan</span>
                            </div>

                        </div>


                        <div class="col-sm-12 mb-2">
                            <div class="form-group">
                                <label for="file" id="step-manual-6"> Harga Objek Properti <span style="color: red;">* </span>
                                </label>
                                <input type="text" name="harga_objek_pendanaan" id="harga_objek_pendanaan" class="form-control  numberOnly no-zero form-control-sm" />
                            </div>
                        </div>


                        <div class="col-sm-12 mb-2" id="wrapperUangMuka">
                            <div class="form-group">
                                <label for="uang_muka">Uang Muka <span style="color: red;">*
                                    </span></label>
                                <input type="text" name="uang_muka" id="uang_muka" class="form-control numberOnly form-control-sm" />
                            </div>
                        </div>

                        <div class="col-sm-12 mb-2">
                            <div class="form-group">
                                <label for="nilai_pengajuan">Nilai Pengajuan Pembiayaan <span style="color: red;">* </span></label>
                                <input type="text" name="nilai_pengajuan" id="nilai_pengajuan" class="form-control numberOnly no-zero  form-control-sm" readonly />
                            </div>
                        </div>


                        <div class="col-sm-12 mb-4">
                            <div class="form-group">
                                <label for="tenor">Jangka Waktu <span style="color: red;">*
                                    </span></label>
                                <div id="tenor_wrapper">
                                    <select name="tenor" class="form-control custom-select tenorSelect" id="tenor">
                                        <option value="">Pilih</option>
                                        <option value="1">1 Tahun</option>
                                        <option value="2">2 Tahun</option>
                                        <option value="3">3 Tahun</option>
                                        <option value="4">4 Tahun</option>
                                        <option value="5">5 Tahun</option>
                                        <option value="6">6 Tahun</option>
                                        <option value="7">7 Tahun</option>
                                        <option value="8">8 Tahun</option>
                                        <option value="9">9 Tahun</option>
                                        <option value="10">10 Tahun</option>
                                        <option value="11">11 Tahun</option>
                                        <option value="12">12 Tahun</option>
                                        <option value="13">13 Tahun</option>
                                        <option value="14">14 Tahun</option>
                                        <option value="15">15 Tahun</option>
                                    </select>
                                </div>

                                <div id="tenor_pra_wrapper" class="d-none">
                                    <select name="tenor_pra" class="form-control  custom-select" id="tenor_pra">
                                        <option value="">Pilih</option>
                                        <option value="1">1 Bulan</option>
                                        <option value="2">2 Bulan</option>
                                        <option value="3">3 Bulan</option>
                                        <option value="4">4 Bulan</option>
                                        <option value="5">5 Bulan</option>
                                        <option value="6">6 Bulan</option>
                                        <option value="7">7 Bulan</option>
                                        <option value="8">8 Bulan</option>
                                        <option value="9">9 Bulan</option>
                                        <option value="10">10 Bulan</option>
                                        <option value="11">11 Bulan</option>
                                        <option value="12">12 Bulan</option>
                                    </select>

                                </div>


                            </div>
                        </div>

                        <div class="col-sm-12 mb-4">
                            <div class="form-group">
                                <label for="tenor">Persentase Margin <span style="color: red;">*
                                    </span></label>
                                <div id="margin_wrapper">
                                    <select name="margin" class="form-control custom-select tenorSelect" id="margin">
                                        <option value="">Pilih Margin</option>
                                        <option value="14">14%</option>
                                        <option value="16">16%</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div id="alert_wrapper"></div>
                        <div class="col-sm-12">
                            <button type="button" class="btn text-white btn-block" id="btnHitungSimulasiKpr" style="background-color: #057758;">
                                Hitung </button>

                            <button type="button" class="btn text-white btn-block d-none" id="btnLoadingHitung" style="background-color: #057758;" disabled>
                                Mohon tunggu ... </button>

                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-8 col-md-6 col-sm-12 s-brd-1 wow fadeInUp delay-04s">
                <div class="services-info-5 text-left">
                    <div class="col">
                        <h6><i style="color: #4e85b2; font-size:1rem;" class="fas fa-calculator pt-2"> </i> Detail
                            Angsuran
                        </h6>
                        <table class="table table-striped table-bordered" id="dataResultSimulasi">

                        </table>
                        <span id="disclamer" class="text-justify d-none" style="font-size: 11px;">
                            Catatan :<br>
                            <ol style="margin-left: 10px">
                                <li>Angka-angka terlampir hanya simulasi, sesuai dengan asumsi margin terlampir, nilai sebenarnya akan tercantum dalam kontrak setelah disetujui.</li>
                                <li>Secara umum angka-angka terlampir belum termasuk biaya-biaya transaksi seperti pajak, biaya notaris, dll. Jika diinginkan biaya-biaya dalam transaksi tersebut, dapat juga disertakan ke dalam perhitungan angsuran.</li>
                                <li>Nilai margin terkini yang berlaku, dapat dilihat pada kalkulator simulasi di website www.cankul.id atau melalui Apps Dana Syariah Indonesia.</li>
                                <ol>
                                    <!-- Perhitungan diatas merupakan simulasi awal dalam pengajuan permohonan Dana Rumah anda, dan bukan menjadi acuan dalam persetujuan pendanaan yang akan anda terima. -->
                        </span>
                    </div>
                </div>


            </div>


        </div>


    </div>

</div>



<style type="text/css">
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