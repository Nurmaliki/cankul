<!-- Page Content -->
<div id="detect-screen" class="content-full-right">
    <div class="container col-12">
        <div class="row my-5">

            <div id="col" class="col-12 col-md-9 mt-30">
            </div>

            <div id="col" class="col-12 col-md-12 mt-30">
                <span class="mb-10 pb-10 ">
                    <h1 class="no-paddingTop font-w400 judul" style="float: left; margin-block-end: 0em;">
                        Beranda</h1>
                    <span id="btn-ajukan-pendanaan" class="pull-right">
                        <a href="e" class="btn btn-rounded btn-big btn-noborder min-width-150 text-white"><span class="p-5">Ajukan Pendanaan Baru </span></a>

                    </span>
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
                            <p class="pt-0 pl-4" style="margin-top: -0.8rem"> <span class="bg-white h5 font-weight-normal">&nbsp; Pendanaan
                                    Aktif &nbsp;</span></p>
                        </div>
                    </div>

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
                                                            <th class="align-middle text-center text-capitalize sorting_desc" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 67px;" aria-sort="descending" aria-label="ID Pengajuan: activate to sort column ascending">ID Pengajuan</th>
                                                            <th class="align-middle text-center text-capitalize sorting" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 71px;" aria-label="Tipe Pendanaan: activate to sort column ascending">Tipe Pendanaan</th>
                                                            <th class="align-middle text-center text-capitalize sorting" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 71px;" aria-label="Tujuan Pendanaan
                                                : activate to sort column ascending">Tujuan Pendanaan
                                                            </th>
                                                            <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 46px;" aria-label="Nomor Akad">Nomor Akad</th>
                                                            <th class="align-middle text-center text-capitalize sorting" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 46px;" aria-label="Tenor (Bulan): activate to sort column ascending">Tenor (Bulan)</th>
                                                            <th class="align-middle text-center text-capitalize sorting" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 60px;" aria-label="Pokok Pinjaman: activate to sort column ascending">Pokok Pinjaman</th>
                                                            <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 40px;" aria-label="Sisa Pokok">Sisa Pokok</th>
                                                            <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 50px;" aria-label="Tanggal Mulai">Tanggal Mulai</th>
                                                            <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 50px;" aria-label="Tanggal Selesai
                                                ">Tanggal Selesai
                                                            </th>
                                                            <th class="align-middle text-center text-capitalize sorting" tabindex="0" aria-controls="table_pendanaan" rowspan="1" colspan="1" style="width: 39px;" aria-label="Status: activate to sort column ascending">Status</th>
                                                            <th class="align-middle text-center text-capitalize sorting_disabled" rowspan="1" colspan="1" style="width: 27px;" aria-label="Aksi">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd">
                                                            <td valign="top" colspan="11" class="dataTables_empty">No data available in table</td>
                                                        </tr>
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