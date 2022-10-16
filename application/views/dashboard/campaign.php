<!-- Page Content -->
<div id="detect-screen" class="content-full-right">
    <div class="container col-12">
        <div class="row my-5">

            <div id="col" class="col-12 col-md-9 mt-30">
            </div>

            <div id="col" class="col-12 col-md-12 mt-30">
                <span class="mb-10 pb-10 ">
                    <h1 class="no-paddingTop font-w400 judul" style="float: left; margin-block-end: 0em;">
                        Campaign</h1>
                    <!-- <span id="btn-ajukan-pendanaan" class="pull-right">
                        <a href="e" class="btn btn-rounded btn-big btn-noborder min-width-150 text-white"><span class="p-5">Ajukan Pendanaan Baru </span></a>

                    </span> -->
                </span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 mt-4 pt-4 mx-auto">
                <div id="alert-msg" class="alert alert-warning d-none" role="alert">
                    <div class="row">
                        <div class="col-10">
                            <div id="text-msg"></div>
                        </div>
                        <div class="col-2 my-auto">
                            <button type="button" class="close my-auto" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 pt-4 mb-4 pb-4">
            <div id="layout-informasi-pendanaan" class="col-md-12">
                <div class="card border border-dark">

                    <div class="row">
                        <div class="col">
                            <p class="pt-0 pl-4" style="margin-top: -0.8rem"> <span class="bg-white h5 font-weight-normal">&nbsp; Campaign
                                    Aktif &nbsp;</span></p>
                        </div>
                    </div>
                    <span class="pull-right">
                        <a href="<?= base_url() ?>campaign/add" class="btn btn-rounded btn-big btn-noborder min-width-150 text-white"><span class="p-5"> Add Campaign</span></a>

                    </span>
                    <div class="card-body pt-4 px-4">
                        <div class="row mb-4">
                            <div class="col-md-12">

                                <div class="table-responsive">
                                    <div id="table_pendanaan_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div>
                                            <div id="table_pendanaan_filter" class="dataTables_filter"><label>Pencarian:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table_pendanaan"></label></div>
                                            <div>
                                                <table id="table_pendanaan" class="table table-striped table-bordered dt-responsive dataTable no-footer" cellpadding="0" cellspacing="0" width="100%" role="grid" style="width: 100%;">

                                                    <thead>
                                                        <tr role="row">
                                                            <th class="align-middle text-center text-capitalize">name </th>
                                                            <th class="align-middle text-center text-capitalize">description </th>
                                                            <th class="align-middle text-center text-capitalize">return_percentage </th>
                                                            <th class="align-middle text-center text-capitalize">date_start </th>
                                                            <th class="align-middle text-center text-capitalize">date_end </th>
                                                            <!-- <th class="align-middle text-center text-capitalize">beneficiary_id </th> -->
                                                            <!-- <th class="align-middle text-center text-capitalize">company_id </th> -->
                                                            <th class="align-middle text-center text-capitalize">target </th>
                                                            <th class="align-middle text-center text-capitalize">status </th>
                                                            <th class="align-middle text-center text-capitalize">region </th>
                                                            <th class="align-middle text-center text-capitalize">youtube </th>
                                                            <th class="align-middle text-center text-capitalize">overview </th>
                                                            <!-- <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 27px;" aria-label="Aksi">Aksi</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($data as $key => $value) { ?>
                                                            <tr class="odd">
                                                                <td><?= $value->name ?> </td>
                                                                <td><?= $value->description ?> </td>
                                                                <td><?= $value->return_percentage ?> </td>
                                                                <td><?= $value->date_start ?> </td>
                                                                <td><?= $value->date_end ?> </td>
                                                                <!-- <td><?= $value->beneficiary_id ?> </td> -->
                                                                <!-- <td><?= $value->company_id ?> </td> -->
                                                                <td><?= $value->target ?> </td>
                                                                <td><?= $value->status ?> </td>
                                                                <td><?= $value->region ?> </td>
                                                                <td><?= $value->youtube ?> </td>
                                                                <td><?= $value->overview ?> </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                                <div id="table_pendanaan_processing" class="dataTables_processing card" style="display: none;">Memproses...</div>
                                            </div>
                                            <div class="dataTables_paginate paging_simple_numbers" id="table_pendanaan_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="table_pendanaan_previous"><a href="https://www.danasyariah.id/borrower/beranda#" aria-controls="table_pendanaan" data-dt-idx="0" tabindex="0" class="page-link">⇐</a></li>
                                                    <li class="paginate_button page-item next disabled" id="table_pendanaan_next"><a href="https://www.danasyariah.id/borrower/beranda#" aria-controls="table_pendanaan" data-dt-idx="1" tabindex="0" class="page-link">⇒</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->