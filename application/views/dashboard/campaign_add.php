    <!-- START: Page Content -->
    <div id="detect-screen" class="content-full-right">
        <div class="container">
            <div class="row mb-4">
                <div id="col" class="col-12 col-md-12 mt-30">
                    <span class="mb-10 pb-10 ">
                        <h3 class="no-paddingTop font-w400" id="label-individu" style="float: left; margin-block-end: 0em; color: #31394D">
                            Add Campaign </h3>
                    </span>
                </div>
            </div>


            <div id="layout-individu" class="row mt-5 pt-5">
                <div class="col-12 mt-5 pt-5">
                    <form id="add_campaign" action="<?= base_url('campaign/add_action') ?>" enctype="multipart/form-data" method="POST" novalidate="novalidate">
                        <div class="js-wizard-simple block border layout pt-4" id="layout-informasi-pribadi" disabled="">
                            <div class="block-content block-content-full tab-content pb-4 mb-4">
                                <div id="smartwizard" class="sw sw-theme-dots sw-justified">

                                    <!-- <ul class="nav nav-tabs" style="border: 0;">
                                        <li id="li-step-informasi-pribadi">
                                            <a class="nav-link inactive active" id="step-informasi-pribadi-title" href="#step-informasi-pribadi" style="border: 0;">
                                                Informasi Pribadi
                                            </a>
                                        </li>
                                    </ul> -->
                                    <input type="hidden" name="update" value="0">

                                    <hr class="line mb-4 pb-4">


                                    <div class="tab-content">
                                        <div id="step-informasi-pribadi" class="tab-pane" role="tabpanel" style="display: block;">


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="name" class="ml-0">Nama <i class="text-danger">*</i></label>
                                                        <input class="form-control checkKarakterAneh" type="text" maxlength="35" id="name" name="name" placeholder="" value="" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="description">Description <i class="text-danger">*</i></label>
                                                        <textarea class="form-control form-control-lg" maxlength="90" id="description" name="description" rows="6" placeholder="" required=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="return_percentage" class="ml-0">Return Percentage <i class="text-danger">*</i></label>
                                                        <input class="form-control checkKarakterAneh" type="number" maxlength="35" id="return_percentage" name="return_percentage" placeholder="" value="" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="date_start" class="ml-0">Start <i class="text-danger">*</i></label>
                                                        <input class="form-control checkKarakterAneh" type="date" maxlength="35" id="date_start" name="date_start" placeholder="" value="" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="date_end" class="ml-0">End <i class="text-danger">*</i></label>
                                                        <input class="form-control checkKarakterAneh" type="date" maxlength="35" id="date_end" name="date_end" placeholder="" value="" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="target" class="ml-0">Target <i class="text-danger">*</i></label>
                                                        <input class="form-control checkKarakterAneh" type="text" maxlength="35" id="target" name="target" placeholder="Target" value="" required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="toolbar toolbar-bottom" role="toolbar" style="text-align: right;">
                                        <button class="btn sw-btn-next btn-rounded btn-big btn-noborder btn-success btn-lg p-2 px-3 pull-right" type="submit">Simpan</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>