    <!-- START: Page Content -->
    <div id="detect-screen" class="content-full-right">
        <div class="container">
            <div class="row mb-4">
                <div id="col" class="col-12 col-md-12 mt-30">
                    <span class="mb-10 pb-10 ">
                        <h3 class="no-paddingTop font-w400" id="label-individu" style="float: left; margin-block-end: 0em; color: #31394D">
                            Update Company </h3>
                        <!-- <h3 class="no-paddingTop font-w400 d-none" id="label-badan-hukum" style="float: left; margin-block-end: 0em; color: #31394D">
                            Form Lengkapi Profile Badan Hukum</h3> -->

                    </span>
                </div>
            </div>


            <div id="layout-individu" class="row mt-5 pt-5">
                <div class="col-12 mt-5 pt-5">
                    <form id="update_company_form" action="<?= base_url('company/add_action') ?>" enctype="multipart/form-data" method="POST" novalidate="novalidate">
                        <div class="js-wizard-simple block border layout pt-4" id="layout-informasi-pribadi" disabled="">
                            <div class="block-content block-content-full tab-content pb-4 mb-4">
                                <div id="smartwizard" class="sw sw-theme-dots sw-justified">



                                    <hr class="line mb-4 pb-4">


                                    <div class="tab-content">
                                        <div id="step-informasi-pribadi" class="tab-pane" role="tabpanel" style="display: block;">

                                            <!-- <input type="hidden" id="borrower_type" name="borrower_type" value="1">
                                            <input name="status" type="hidden" value="1"> -->
                                            <!-- Company -->
                                            <div class="row">
                                                <div class="col-12 mb-4 pb-4">
                                                    <div class="form-check form-check-inline line">
                                                        <label class="form-check-label text-black h6 ml-0">Informasi Company
                                                            &nbsp;</label>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="update" value="<?= ($company) ? 1 : 0 ?>">
                                                <input type="hidden" name="id" value="<?= $company ? $company_data->id : "" ?>">

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="name" class="ml-0">Nama Company <i class="text-danger">*</i></label>

                                                        <input class="form-control" type="text" maxlength="30" id="name" name="name" placeholder="Nama Company" value="<?= $company ? $company_data->name : "" ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="region" class="ml-0">Region Company
                                                            Pekerjaan <i class="text-danger">*</i></label>
                                                        <input class="form-control" type="text" maxlength="30" id="region" name="region" placeholder="Region Company" value="<?= $company ? $company_data->region : "" ?>">

                                                    </div>
                                                </div>


                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="youtube" class="ml-0">Youtube <i class="text-danger">*</i></label>

                                                        <input class="form-control no-zero eight" type="text" id="youtube" name="youtube" placeholder="Youtube" value="<?= $company ? $company_data->youtube : "" ?>" required="">

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="overview" class="ml-0">Overview <i class="text-danger">*</i></label>

                                                        <input class="form-control no-zero eight" type="text" id="overview" name="overview" placeholder="Overview" value="<?= $company ? $company_data->overview : "" ?>" required="">

                                                    </div>
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