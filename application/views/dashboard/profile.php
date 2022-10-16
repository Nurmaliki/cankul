    <!-- START: Page Content -->
    <div id="detect-screen" class="content-full-right">
        <div class="container">
            <div class="row mb-4">
                <div id="col" class="col-12 col-md-12 mt-30">
                    <span class="mb-10 pb-10 ">
                        <h3 class="no-paddingTop font-w400" id="label-individu" style="float: left; margin-block-end: 0em; color: #31394D">
                            Form Update Profile </h3>
                        <!-- <h3 class="no-paddingTop font-w400 d-none" id="label-badan-hukum" style="float: left; margin-block-end: 0em; color: #31394D">
                            Form Lengkapi Profile Badan Hukum</h3> -->

                    </span>
                </div>
            </div>


            <div id="layout-individu" class="row mt-5 pt-5">
                <div class="col-12 mt-5 pt-5">
                    <form id="update_profile_form" action="<?= base_url('profile/update') ?>" enctype="multipart/form-data" method="POST" novalidate="novalidate">
                        <div class="js-wizard-simple block border layout pt-4" id="layout-informasi-pribadi" disabled="">
                            <div class="block-content block-content-full tab-content pb-4 mb-4">
                                <div id="smartwizard" class="sw sw-theme-dots sw-justified">

                                    <ul class="nav nav-tabs" style="border: 0;">
                                        <li id="li-step-informasi-pribadi">
                                            <a class="nav-link inactive active" id="step-informasi-pribadi-title" href="#step-informasi-pribadi" style="border: 0;">
                                                Informasi Pribadi
                                            </a>
                                        </li>
                                        <!-- <li id="li-step-informasi-pengajuan">
                                            <a class="nav-link inactive" id="step-informasi-pengajuan-title" href="#step-informasi-pengajuan" style="border: 0;">
                                                Informasi Pengajuan
                                            </a>
                                        </li> -->
                                    </ul>


                                    <hr class="line mb-4 pb-4">


                                    <div class="tab-content">
                                        <div id="step-informasi-pribadi" class="tab-pane" role="tabpanel" style="display: block;">

                                            <!-- <input type="hidden" id="borrower_type" name="borrower_type" value="1">
                                            <input name="status" type="hidden" value="1"> -->
                                            <input name="detail" type="hidden" value="<?= $detail ?>">
                                            <input name="update" type="hidden" value="<?= $detail ? 1 : 0 ?>">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="first_name" class="ml-0">Nama Depan <i class="text-danger">*</i></label>
                                                        <input class="form-control checkKarakterAneh" type="text" maxlength="35" id="first_name" name="first_name" placeholder="Masukkan nama anda" value="<?= $detail ? $profile->first_name : "" ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="last_name" class="ml-0">Nama Belakang <i class="text-danger">*</i></label>
                                                        <input class="form-control checkKarakterAneh" type="text" maxlength="35" id="last_name" name="last_name" placeholder="Masukkan nama anda" value="<?= $detail ? $profile->last_name : "" ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title" class="ml-0">Nama Pangilan <i class="text-danger">*</i></label>
                                                        <input class="form-control no-zero no-four" type="text" id="title" name="title" minlength="16" maxlength="16" placeholder="Nama Pangilan" value="<?= $detail ? $profile->title : "" ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="mother_name" class="ml-0">Nama Ibu Kandung <i class="text-danger">*</i></label>
                                                        <input class="form-control no-zero no-four" type="text" id="mother_name" name="mother_name" minlength="16" maxlength="16" placeholder="Nama Ibu Kandung" value="<?= $detail ? $profile->mother_name : "" ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="nationality" class="ml-0">Warga Negara <i class="text-danger">*</i></label>
                                                        <input class="form-control no-zero no-four" type="text" id="nationality" name="nationality" minlength="16" maxlength="16" placeholder="WNI ...." value="<?= $detail ? $profile->nationality : "" ?>" required="">
                                                    </div>
                                                </div>

                                            </div>



                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="ml-0">Jenis Kelamin <i class="text-danger">*</i></label>
                                                        <select class="form-control custom-select" id="gender" name="gender" required="">
                                                            <option value="">-- Pilih Satu --</option>
                                                            <option <?= $detail ? ($profile->gender == 1 ? 'selected' : "") : "" ?> value="1">Pria</option>
                                                            <option <?= $detail ? ($profile->gender == 0 ? 'selected' : '') : "" ?> value="0">Wanita</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="ml-0">Status Pernikahan <i class="text-danger">*</i></label>
                                                        <div class="input-group">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="marital_status" id="status_kawin_0" <?= $detail ? ($profile->marital_status == 'married' ? 'checked' : '') : "" ?> value="married" required="">
                                                                <label class="form-check-label text-muted" for="status_kawin_0">Sudah
                                                                    Menikah</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="marital_status" id="status_kawin_1" <?= $detail ? ($profile->marital_status == 'single' ? 'checked' : '') : "" ?> value="single">
                                                                <label class="form-check-label text-muted" for="status_kawin_1">Belum
                                                                    Menikah</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="marital_status" id="status_kawin_2" <?= $detail ? ($profile->marital_status == 'widow' ? 'checked' : '') : "" ?> value="widow">
                                                                <label class="form-check-label text-muted" for="status_kawin_2">Duda/Janda</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="ml-0" for="last_education">Pendidikan
                                                            Terakhir <i class="text-danger">*</i></label>
                                                        <select class="form-control custom-select" id="last_education" name="last_education" required="">
                                                            <option value="">-- Pilih Satu --</option>
                                                            <option <?= $detail ? ($profile->last_education == 'SD' ? 'selected' : '') : "" ?> value="SD">SD</option>
                                                            <option <?= $detail ? ($profile->last_education == 'SMP' ? 'selected' : '') : "" ?> value="SMP">SMP</option>
                                                            <option <?= $detail ? ($profile->last_education == 'SMA' ? 'selected' : '') : "" ?> value="SMA">SMA/SMK</option>
                                                            <option <?= $detail ? ($profile->last_education == 'DIPLOMA' ? 'selected' : '') : "" ?> value="DIPLOMA">DIPLOMA</option>
                                                            <option <?= $detail ? ($profile->last_education == 'SARJANA' ? 'selected' : '') : "" ?> value="SARJANA">SARJANA</option>
                                                            <option <?= $detail ? ($profile->last_education == 'MAGISTER' ? 'selected' : '') : "" ?> value="MAGISTER">MAGISTER</option>
                                                            <option <?= $detail ? ($profile->last_education == 'DOKTOR' ? 'selected' : '') : "" ?> value="DOKTOR">DOKTOR</option>
                                                            <option <?= $detail ? ($profile->last_education == 'BADAN HUKUM' ? 'selected' : '') : "" ?> value="BADAN HUKUM">BADAN HUKUM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label id="label_telepon" class="ml-0">No. Telepon Selular <i class="text-danger">*</i></label>
                                                        <div class="input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text input-group-text-dsi">
                                                                    +62 </span>
                                                            </div>
                                                            <input class="form-control no-zero eight" type="text" onkeyup="if (/[^\d/]/g.test(this.value)) this.value = this.value.replace(/[^\d/]/g,'')" minlength="9" pattern=".{9,13}" maxlength="13" id="phone" name="phone" placeholder="Masukkan No. Handphone" value="<?= $detail ? $profile->phone : "" ?>" required="">

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>



                                            <div class="row">
                                                <div class="col-12 mb-4 pb-4">
                                                    <div class="form-check form-check-inline line">
                                                        <label class="form-check-label text-black h6 ml-0">Alamat Sesuai KTP
                                                            &nbsp;</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="address">Alamat Sesuai KTP <i class="text-danger">*</i></label>
                                                        <textarea class="form-control form-control-lg" maxlength="90" id="address" name="address" rows="6" placeholder="Masukkan alamat lengkap Anda" required=""><?= $detail ? $profile->address : "" ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="province">Provinsi <i class="text-danger">*</i></label>
                                                        <select class="form-control custom-select" id="province" name="province" required="">
                                                            <option value="">-- Pilih Satu --</option>
                                                            <option <?= $detail ? ($profile->province == 'Bali' ? 'selected' : '') : "" ?> value="Bali">Bali</option>
                                                            <option <?= $detail ? ($profile->province == 'Bangka Belitung' ? 'selected' : '') : "" ?> value="Bangka Belitung">Bangka Belitung</option>
                                                            <option <?= $detail ? ($profile->province == 'Banten' ? 'selected' : '') : "" ?> value="Banten">Banten</option>
                                                            <option <?= $detail ? ($profile->province == 'Bengkulu' ? 'selected' : '') : "" ?> value="Bengkulu">Bengkulu</option>
                                                            <option <?= $detail ? ($profile->province == 'DI Yogyakarta' ? 'selected' : '') : "" ?> value="DI Yogyakarta">DI Yogyakarta</option>
                                                            <option <?= $detail ? ($profile->province == 'DKI Jakarta' ? 'selected' : '') : "" ?> value="DKI Jakarta">DKI Jakarta</option>
                                                            <option <?= $detail ? ($profile->province == 'Jambi' ? 'selected' : '') : "" ?> value="Jambi">Jambi</option>
                                                            <option <?= $detail ? ($profile->province == 'Jawa Bara' ? 'selected' : '') : "" ?> value="Jawa Barat">Jawa Barat</option>
                                                            <option <?= $detail ? ($profile->province == 'Jawa Tengah' ? 'selected' : '') : "" ?> value="Jawa Tengah">Jawa Tengah</option>
                                                            <option <?= $detail ? ($profile->province == 'Jawa Timur' ? 'selected' : '') : "" ?> value="Jawa Timur">Jawa Timur</option>
                                                            <option <?= $detail ? ($profile->province == 'Kalimantan Barat' ? 'selected' : '') : "" ?> value="Kalimantan Barat">Kalimantan Barat</option>
                                                            <option <?= $detail ? ($profile->province == 'Kalimantan Selatan' ? 'selected' : '') : "" ?> value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                            <option <?= $detail ? ($profile->province == 'Kalimantan Tengah' ? 'selected' : '') : "" ?> value="Kalimantan Tengah">Kalimantan Tengah</option>
                                                            <option <?= $detail ? ($profile->province == 'Kalimantan Timur' ? 'selected' : '') : "" ?> value="Kalimantan Timur">Kalimantan Timur</option>
                                                            <option <?= $detail ? ($profile->province == 'Kalimantan Utara' ? 'selected' : '') : "" ?> value="Kalimantan Utara">Kalimantan Utara</option>
                                                            <option <?= $detail ? ($profile->province == 'Kepulauan Riau' ? 'selected' : '') : "" ?> value="Kepulauan Riau">Kepulauan Riau</option>
                                                            <option <?= $detail ? ($profile->province == 'Lampung' ? 'selected' : '') : "" ?> value="Lampung">Lampung</option>
                                                            <option <?= $detail ? ($profile->province == 'Nanggroe Aceh Darussalam' ? 'selected' : '') : "" ?> value="Nanggroe Aceh Darussalam ">Nanggroe Aceh Darussalam </option>
                                                            <option <?= $detail ? ($profile->province == 'Nusa Tenggara Barat - NTB' ? 'selected' : '') : "" ?> value="Nusa Tenggara Barat - NTB">Nusa Tenggara Barat - NTB</option>
                                                            <option <?= $detail ? ($profile->province == 'Nusa Tenggara Timur - NTT' ? 'selected' : '') : "" ?> value="Nusa Tenggara Timur - NTT">Nusa Tenggara Timur - NTT</option>
                                                            <option <?= $detail ? ($profile->province == 'Riau' ? 'selected' : '') : "" ?> value="Riau">Riau</option>
                                                            <option <?= $detail ? ($profile->province == 'Sulawesi Barat' ? 'selected' : '') : "" ?> value="Sulawesi Barat">Sulawesi Barat</option>
                                                            <option <?= $detail ? ($profile->province == 'Sulawesi Selatan' ? 'selected' : '') : "" ?> value="Sulawesi Selatan">Sulawesi Selatan</option>
                                                            <option <?= $detail ? ($profile->province == 'Sumatera Barat' ? 'selected' : '') : "" ?> value="Sumatera Barat">Sumatera Barat</option>
                                                            <option <?= $detail ? ($profile->province == 'Sumatera Selatan' ? 'selected' : '') : "" ?> value="Sumatera Selatan">Sumatera Selatan</option>
                                                            <option <?= $detail ? ($profile->province == 'Sumatera Utara' ? 'selected' : '') : "" ?> value="Sumatera Utara">Sumatera Utara</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="city">Kota/Kabupaten <i class="text-danger">*</i></label>

                                                        <input class="form-control no-zero eight" type="text" id="city" name="city" placeholder="Masukan Nama Kota ..." value="<?= $detail ? $profile->city : "" ?>" required>


                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="kecamatan" class="ml-0">Kecamatan <i class="text-danger">*</i></label>

                                                        <input class="form-control no-zero eight" type="text" id="kecamatan" name="kecamatan" placeholder="Masukan Nama Kecamatan ..." value="<?= $detail ? $profile->kecamatan : "" ?>" required="">

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="kelurahan" class="ml-0">Kelurahan <i class="text-danger">*</i></label>

                                                        <input class="form-control no-zero eight" type="text" id="kelurahan" name="kelurahan" placeholder="Masukan Nama kelurahan ..." value="<?= $detail ? $profile->kelurahan : "" ?>" required="">

                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="rt" class="ml-0">Rt <i class="text-danger">*</i></label>
                                                        <input class="form-control" type="text" maxlength="30" id="rt" name="rt" placeholder="--" value="<?= $detail ? $profile->rt : "" ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="Rt" class="ml-0">rw <i class="text-danger">*</i></label>
                                                        <input class="form-control" type="text" maxlength="30" id="rw" name="rw" placeholder="--" value="<?= $detail ? $profile->rw : "" ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 mb-4 pb-4">
                                                    <div class="form-check form-check-inline line">
                                                        <label class="form-check-label text-black h6 ml-0">Informasi Pekerjaan
                                                            &nbsp;</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="job_title" class="ml-0">Pekerjaan <i class="text-danger">*</i></label>

                                                        <input class="form-control" type="text" maxlength="30" id="job_title" name="job_title" placeholder="--" value="<?= $detail ? $profile->job_title : "" ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="job_field" class="ml-0">Bidang
                                                            Pekerjaan <i class="text-danger">*</i></label>
                                                        <input class="form-control" type="text" maxlength="30" id="job_field" name="job_field" placeholder="--" value="<?= $detail ? $profile->job_field : "" ?>">

                                                    </div>
                                                </div>


                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="funds_source" class="ml-0">Sumber Pendapatan <i class="text-danger">*</i></label>

                                                        <input class="form-control no-zero eight" type="text" id="funds_source" name="funds_source" placeholder="Sumber Pendapatan ..." value="<?= $detail ? $profile->funds_source : "" ?>" required="">

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="monthly_income" class="ml-0">Pendapatan Perbulan <i class="text-danger">*</i></label>

                                                        <input class="form-control no-zero eight" type="text" id="monthly_income" name="monthly_income" placeholder="Masukan Nama kelurahan ..." value="<?= $detail ? $profile->monthly_income : "" ?>" required="">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 mb-4 pb-4">
                                                    <div class="form-check form-check-inline line">
                                                        <label class="form-check-label text-black h6 ml-0">Foto &nbsp;</label>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-6 col-sm-12 mb-4">
                                                    <label class="ml-0">Foto Diri <i class="text-danger">*</i></label>
                                                    <div id="preview_camera_diri" name="preview_camera_diri" class="pt-3">
                                                        <img class="imagePreview mb-3" id="preview-1" src="" style="">
                                                        <div>

                                                            <input type="file" name="foto_diri" id="foto_diri">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-md-6 col-sm-12 mb-4">
                                                    <label class="ml-0">Foto KTP <i class="text-danger">*</i></label>
                                                    <div id="preview_camera_ktp" name="preview_camera_ktp" class="pt-3">
                                                        <img class="imagePreview mb-3" id="preview-1" src="" style="">
                                                        <!-- <div>
                                                            <button class="btn btn-primary green-dsi" type="button" id="btn_camera_ktp" name="btn_camera_ktp" onclick="btnCameraClick('camera_ktp', 'preview_camera_ktp', 'take_camera_ktp')">
                                                                Kamera
                                                            </button>
                                                        </div> -->
                                                        <input type="file" name="ktp" id="ktp">

                                                    </div>



                                                    <!-- <input type="text" class="input-hidden" id="user_camera_ktp_val" required="" name="user_camera_ktp_val" value=""> -->
                                                </div>



                                            </div>


                                        </div>


                                    </div>
                                    <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: right;">
                                        <!-- <button class="btn sw-btn-prev disabled d-none btn-rounded btn-big btn-noborder btn-success btn-lg p-2 px-3 pull-left" type="button">Kembali</button> -->
                                        <!-- <button class="btn sw-btn-next btn-rounded btn-big btn-noborder btn-success btn-lg p-2 px-3 pull-right" type="button">Selanjutnya</button> -->
                                        <button class="btn sw-btn-next btn-rounded btn-big btn-noborder btn-success btn-lg p-2 px-3 pull-right" type="submit">Simpan</button>
                                        <!-- <button type="button" id="finish" class="btn btn-rounded btn-big btn-noborder btn-success btn-lg p-2 px-3 pull-right sw-btn-group-extra d-none" disabled="">Kirim</button> -->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- <input type="submit" id="submitindividu" class="d-none" value="submit"> -->
                    </form>
                </div>
            </div>



            <!-- END: Form Badan Hukum -->
        </div>
    </div>