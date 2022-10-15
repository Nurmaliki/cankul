</main>



<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // const brw_id = "292771"
        // let route_list_pendanaan = 'https://www.danasyariah.id/borrower/get-json-list-pendanaan/brw_id_val'
        // route_list_pendanaan = route_list_pendanaan.replace('brw_id_val', brw_id)

        // let list_pendanaan_active = $('#table_pendanaan').DataTable({
        //     dom: '<f<tr>ip>',
        //     searching: true,
        //     processing: true,
        //     serverSide: true,
        //     paging: true,
        //     info: false,
        //     pageLength: 10,
        //     order: [
        //         [0, "desc"]
        //     ],
        //     ajax: {
        //         url: route_list_pendanaan
        //     },
        //     columnDefs: [
        //         // { "width": "2%", "targets": 0 },
        //         {
        //             className: "text-center",
        //             targets: "_all"
        //         },
        //     ],
        //     columns: [{
        //             data: 'pengajuan_id',
        //             name: 'pengajuan_id'
        //         },
        //         {
        //             data: 'pendanaan_nama',
        //             name: 'pendanaan_nama'
        //         },
        //         {
        //             data: 'tujuan_pembiayaan',
        //             name: 'tujuan_pembiayaan'
        //         },
        //         {
        //             data: null,
        //             orderable: false,
        //             render: function(data, type, row, meta) {
        //                 return '-';
        //             }
        //         },
        //         {
        //             data: 'durasi_proyek',
        //             name: 'durasi_proyek'
        //         },
        //         {
        //             data: 'pendanaan_dana_dibutuhkan',
        //             render: $.fn.dataTable.render.number(',', '.', 2, 'Rp')
        //         },
        //         {
        //             data: null,
        //             orderable: false,
        //             render: function(data, type, row, meta) {
        //                 return '-';
        //             }
        //         },
        //         {
        //             data: null,
        //             orderable: false,
        //             render: function(data, type, row, meta) {
        //                 return '-';
        //             }
        //         },
        //         {
        //             data: null,
        //             orderable: false,
        //             render: function(data, type, row, meta) {
        //                 return `-`;
        //             }
        //         },
        //         {
        //             data: 'status',
        //             data: null,
        //             name: 'status',
        //             render: function(data, type, row, meta) {
        //                 let status = data.status
        //                 let btn_text = ''
        //                 if (status == '0') {
        //                     btn_text = 'Pengajuan Baru'
        //                 } else if (status == '1') {
        //                     btn_text = 'Lolos Tahap 1'
        //                 } else if (status == '3') {
        //                     btn_text = 'Proses Verifikasi'
        //                 } else if (status == '11') {
        //                     btn_text = 'Proses Verifikasi'
        //                 } else if (status == '5') {
        //                     btn_text = 'Diterima'
        //                 }
        //                 return btn_text
        //             }
        //         },
        //         {
        //             data: 'detail_pendanaan',
        //             name: 'detail_pendanaan',
        //             orderable: false,
        //             serachable: false
        //         }
        //     ]
        // })

        // let route_get_notif_pendanaan = "https://www.danasyariah.id/borrower/get-notif-pendanaan/brw_id_val"
        // route_get_notif_pendanaan = route_get_notif_pendanaan.replace('brw_id_val', brw_id)
        // $.ajax({
        //     url: route_get_notif_pendanaan,
        //     method: "GET",
        //     dataType: 'JSON',
        //     success: function(response) {
        //         let status_user = response.data.status_user
        //         let total_pengajuan = response.data.total_pengajuan
        //         let msg = ''
        //         if (status_user == 'active') {

        //             if (total_pengajuan > 0) {
        //                 msg = `
        //         Anda memiliki ${response.data.total_pengajuan} Pengajuan Pendanaan yang telah <span class="text-success font-weight-bold">LOLOS</span>
        //         Verifikasi Tahap Awal, segera <u><a href="/borrower/pendanaan" class="text-success font-weight-bold">Lengkapi Data Pengajuan Anda
        //         </a></u>untuk lanjut ke tahap berikutnya
        //         `

        //                 $('#alert-msg').removeClass('d-none')
        //                 $('#text-msg').html(msg)
        //             }

        //         } else if (status_user == 'notfilled') {
        //             if (total_pengajuan > 0) {
        //                 msg = `
        //         Selamat pengajun pendanaan Anda telah <span class="text-success font-weight-bold">LOLOS</span>
        //         Verifikasi Tahap Awal, silahkan <u><a href="/borrower/lengkapi_profile" class="text-success font-weight-bold">Lengkapi Data Registrasi
        //         </a></u>untuk lanjut ke tahap berikutnya
        //         `

        //                 $('#alert-msg').removeClass('d-none')
        //                 $('#text-msg').html(msg)
        //             }
        //         }
        //     }
        // });
    });

    const formatRupiah = (angka, prefix) => {
        let number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? prefix + rupiah : '');
    }
</script>

</div>

<!-- END Page Container -->

<!-- Codebase JS -->
<script src="<?= base_url('assets/dashboard') ?>/js/codebase.core.min.js.download"></script>
<script src="<?= base_url('assets/dashboard') ?>/js/codebase.app.min.js.download"></script>
<!-- picker range -->
<script src="<?= base_url('assets/dashboard') ?>/js/bootstrap-datepicker.min.js.download"></script>
<script src="<?= base_url('assets/dashboard') ?>/js/flatpickr.min.js.download"></script>
<!-- dropzone image -->
<script src="<?= base_url('assets/dashboard') ?>/js/dropzone.js.download"></script>
<!-- pie chart -->
<script src="<?= base_url('assets/dashboard') ?>/js/jquery.sparkline.min.js.download"></script>
<script src="<?= base_url('assets/dashboard') ?>/js/jquery.easypiechart.min.js.download"></script>

<!-- Page JS Plugins Form wizard -->
<script src="<?= base_url('assets/dashboard') ?>/js/jquery.bootstrap.wizard.js.download"></script>
<script src="<?= base_url('assets/dashboard') ?>/js/jquery.validate.min.js.download"></script>

<script src="<?= base_url('assets/dashboard') ?>/js/be_forms_wizard.min.js.download"></script>
<!-- IDE -->
<script src="<?= base_url('assets/dashboard') ?>/js/simplemde.min.js.download"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/dashboard') ?>/js/select2.full.min.js.download"></script>
<!-- CKEDITOR -->
<script src="<?= base_url('assets/dashboard') ?>/js/ckeditor.js.download"></script>
<!-- SweetAlert JS -->
<script src="<?= base_url('assets/dashboard') ?>/js/sweetalert2.min.js.download"></script>
<!-- slide -->
<script src="<?= base_url('assets/dashboard') ?>/js/slick.min.js.download"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/dashboard') ?>/js/jquery.dataTables.min.js.download"></script>
<script src="<?= base_url('assets/dashboard') ?>/js/dataTables.bootstrap4.min.js.download"></script>
<!-- Page JS Code -->
<script src="<?= base_url('assets/dashboard') ?>/js/dataTables.bootstrap4.min.js.download"></script>
<script src="<?= base_url('assets/dashboard') ?>/js/jquery.maskedinput.min.js.download"></script>

<script async src="<?= base_url('assets') ?>/js/script_action.js"></script>
<script>
    jQuery(function() {
        Codebase.helpers('slick');
    });
</script>


<script>
    jQuery(function() {
        Codebase.helpers('table-tools');
    });
</script>
<script>
    jQuery(function() {
        Codebase.helpers('ckeditor');
    });
</script>
<script>
    jQuery(function() {
        Codebase.helpers('datepicker');
    });
</script>
<script>
    jQuery(function() {
        Codebase.helpers('flatpickr');
    });
</script>
<script>
    jQuery(function() {
        Codebase.helpers('masked-inputs');
    });
</script>
<!--<script>jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker']); });</script>-->
<script>
    // pie chart            
    $(function() {
        $('.js-pie-chart-enabled').easyPieChart();
    });
    // for sidebar right
    // function resize() {
    //     if ($(window).width() < 514) {
    //         $('#page-container').removeClass('side-overlay-o');
    //         $('#col').addClass('col-12');
    //         $('#col2').addClass('col-12');
    //         $('#status-plafon').addClass('d-none');
    //         $('.content-header').addClass('content-header-small');
    //         $('#detect-screen').removeClass('content-full-right');
    //         $('#detect-screen').addClass('content-full-right-small');
    //         $('#btn-ajukan-pendanaan').removeClass('pull-right');
    //         $('.simplebar-content').addClass('simplebar-content-small');
    //     }
    //     else if ($(window).width() < 641){
    //         $('#status-plafon').addClass('d-none');
    //     }
    //     else if ($(window).width() < 991) {
    //         $('#page-container').removeClass('side-overlay-o');
    //         $('#status-plafon').removeClass('d-none');
    //         $('#detect-screen').removeClass('content-full-right-small');
    //         $('#detect-screen').addClass('content-full-right');
    //         $('#btn-ajukan-pendanaan').addClass('pull-right');
    //         $('.simplebar-content').removeClass('simplebar-content-small');
    //         $('.simplebar-content').addClass('simplebar-content');
    //     }
    //     else {
    //         $('#page-container').addClass('side-overlay-o');
    //         $('#status-plafon').removeClass('d-none');
    //         $('#detect-screen').removeClass('content-full-right-small');
    //         $('#detect-screen').addClass('content-full-right')
    //         $('#btn-ajukan-pendanaan').addClass('pull-right');
    //         $('.simplebar-content').removeClass('simplebar-content-small');
    //         $('.simplebar-content').addClass('simplebar-content');
    //     }
    // }

    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    };

    // var brw_id = "292771"
    // // console.log(brw_id);
    // $.ajax({
    //     url: "/borrower/getlastproyekapproved/" + brw_id,
    //     datatype: "json",
    //     success: function(html) {
    //         // console.log(html);
    //         // var dibutuhkan = parseInt(html.data.pendanaan_dana_dibutuhkan);
    //         // var danaTerkumpul = parseInt(html.data.terkumpul)+parseInt(html.danaTerkumpul.nominal_awal);
    //         // var persentaseTerkumpul = (danaTerkumpul/dibutuhkan)*100; 
    //         // var persendana = persentaseTerkumpul.toFixed(1)+"%";
    //         // if (persendana == "100.0%"){persendana = 100+"%"}
    //         // // console.log(
    //         // //     'dibutuhkan :'+dibutuhkan+' danaterkumpul : '+danaTerkumpul+' persentaseTerkumpul : '+persentaseTerkumpul+' persendana : '+persendana
    //         // // );
    //         // $('.namaproyek').text(html.data.nama);
    //         // $('#danadibutuhkan').text("Rp. "+formatNumber(parseInt(html.data.total_need)));
    //         // $('#imbalhasil').text(html.data.profit_margin+' %');
    //         // $('#durasiproyek').text(html.data.tenor_waktu+' Bulan');
    //         // $('#minimuminvestasi').text("Rp. "+formatNumber(parseInt(html.data.harga_paket)));
    //         // $('#jenisakad').text((html.data.pendanaan_akad == 1 ? 'Murabahah' : 'Mudarabah'));
    //         // $('#terimahasil').text((html.data.mode_pembayaran == 1 ? 'Tiap Bulan' : 'Akhir Proyek'));
    //         // $('#metodepembayaran').text((html.data.metode_pembayaran == 1 ? 'FULL' : 'Parsial'));
    //         // $('#persendana').text(persendana);
    //         // $('#progressbar').attr('style', "width: "+persendana+";");
    //         // $('#link').attr('href', "/borrower/detilProyek/"+html.data.id);
    //         // var plafon = html.dataPlafon.total_plafon;
    //         var plafon = html.dataPlafon;
    //         $('#plafon').text("Rp. " + formatNumber(parseInt(plafon)));
    //         $('#tersedia').text("Rp. " + formatNumber(parseInt(plafon - html.total_pokok)));
    //         $("#nilai_tersedia").val(plafon - html.total_pokok);
    //         if (html.total_pokok == null || html.total_pokok == 0 || html.total_pokok == " ") {
    //             $('#pp').text("Rp. 0");
    //             $('#terpakai').text("Rp. 0");
    //         } else {
    //             $('#pp').text("Rp. " + formatNumber(parseInt(html.total_pokok)));
    //             $('#terpakai').text("Rp. " + formatNumber(parseInt(html.total_pokok)));
    //         }
    //         if (html.total_imbal == null || html.total_imbal == 0 || html.total_imbal == " ") {
    //             $('#tih').text("Rp. 0");
    //         } else {
    //             $('#tih').text("Rp. " + formatNumber(parseInt(html.total_imbal)));
    //         }
    //         if (html.total_pinjaman == null || html.total_pinjaman == 0 || html.total_pinjaman == " ") {
    //             $('#tp').text("Rp. 0");
    //         } else {
    //             $('#tp').text("Rp. " + formatNumber(parseInt(html.total_pinjaman)));
    //         }
    //         if (html.tagihan == null || html.tagihan == 0 || html.tagihan == " ") {
    //             $('#tt').text("Rp. 0");
    //         } else {
    //             $('#tt').text("Rp. " + formatNumber(parseInt(html.tagihan)));
    //         }
    //     }
    // });

    $(document).ready(function() {
        //$(window).resize(resize);
        //resize();
        //session brw_id
        // var brw_id = "292771"
        // // console.log(brw_id);
        //     $.ajax({
        //         url:"/borrower/getlastproyekapproved/"+brw_id,
        //         datatype:"json",
        //         success:function(html){
        //             console.log(html);
        //             // var dibutuhkan = parseInt(html.data.pendanaan_dana_dibutuhkan);
        //             // var danaTerkumpul = parseInt(html.data.terkumpul)+parseInt(html.danaTerkumpul.nominal_awal);
        //             // var persentaseTerkumpul = (danaTerkumpul/dibutuhkan)*100; 
        //             // var persendana = persentaseTerkumpul.toFixed(1)+"%";
        //             // if (persendana == "100.0%"){persendana = 100+"%"}
        //             // // console.log(
        //             // //     'dibutuhkan :'+dibutuhkan+' danaterkumpul : '+danaTerkumpul+' persentaseTerkumpul : '+persentaseTerkumpul+' persendana : '+persendana
        //             // // );
        //             // $('.namaproyek').text(html.data.nama);
        //             // $('#danadibutuhkan').text("Rp. "+formatNumber(parseInt(html.data.total_need)));
        //             // $('#imbalhasil').text(html.data.profit_margin+' %');
        //             // $('#durasiproyek').text(html.data.tenor_waktu+' Bulan');
        //             // $('#minimuminvestasi').text("Rp. "+formatNumber(parseInt(html.data.harga_paket)));
        //             // $('#jenisakad').text((html.data.pendanaan_akad == 1 ? 'Murabahah' : 'Mudarabah'));
        //             // $('#terimahasil').text((html.data.mode_pembayaran == 1 ? 'Tiap Bulan' : 'Akhir Proyek'));
        //             // $('#metodepembayaran').text((html.data.metode_pembayaran == 1 ? 'FULL' : 'Parsial'));
        //             // $('#persendana').text(persendana);
        //             // $('#progressbar').attr('style', "width: "+persendana+";");
        //             // $('#link').attr('href', "/borrower/detilProyek/"+html.data.id);
        //             var plafon = html.dataPlafon.total_plafon;
        //             $('#plafon').text("Rp. "+formatNumber(parseInt(plafon)));
        //             $('#tersedia').text("Rp. "+formatNumber(parseInt(plafon - html.total_pokok)));
        //             if(html.total_pokok == null || html.total_pokok == 0 || html.total_pokok == " "){
        //                 $('#pp').text("Rp. 0");
        //                 $('#terpakai').text("Rp. 0");
        //             }else{
        //                 $('#pp').text("Rp. "+formatNumber(parseInt(html.total_pokok)));
        //                 $('#terpakai').text("Rp. "+formatNumber(parseInt(html.total_pokok)));
        //             }
        //             if(html.total_imbal == null || html.total_imbal == 0 || html.total_imbal == " "){
        //                 $('#tih').text("Rp. 0");
        //             }else{
        //                 $('#tih').text("Rp. "+formatNumber(parseInt(html.total_imbal)));
        //             }
        //             if(html.total_pinjaman == null || html.total_pinjaman == 0 || html.total_pinjaman == " "){
        //                 $('#tp').text("Rp. 0");
        //             }else{
        //                 $('#tp').text("Rp. "+formatNumber(parseInt(html.total_pinjaman)));
        //             }
        //             if(html.tagihan == null || html.tagihan == 0 || html.tagihan == " "){
        //                 $('#tt').text("Rp. 0");
        //             }else{
        //                 $('#tt').text("Rp. "+formatNumber(parseInt(html.tagihan)));    
        //             }
        //         }
        //     });

        $(document).on('click', '#deitil', function() {
            var id = $(this).attr("class");
            var persendana = '0.0%';
            $('.namaproyek').text('');
            // if(id == 0){
            //     alert('Menunggu Pendanaan Di Approve !!');
            //     $('#link').attr('href', "#");
            //     $('.namaproyek').text('Menunggu Pendanaan Di Approve !');
            //     $('#danadibutuhkan').text("Rp. -");
            //     $('#durasiproyek').text('0 Bulan');
            //     $('#imbalhasil').text('0.00 %');
            //     $('#minimuminvestasi').text("Rp. 0");
            //     $('#jenisakad').text("-");
            //     $('#terimahasil').text("-");
            //     $('#persendana').text(persendana);
            //     $('#progressbar').attr('style', "width: "+persendana+";");
            // }
            // else{
            // $.ajax({
            //     url: "/borrower/getProyekbyId/" + id,
            //     datatype: "json",
            //     success: function(html) {
            //         // console.log(html);
            //         var dibutuhkan = parseInt(html.data.pendanaan_dana_dibutuhkan);
            //         var danaTerkumpul = parseInt(html.data.terkumpul) + parseInt(html.danaTerkumpul.nominal_awal);
            //         var persentaseTerkumpul = (danaTerkumpul / dibutuhkan) * 100;
            //         var persendana = persentaseTerkumpul.toFixed(1) + "%";
            //         if (persendana == "100.0%") {
            //             persendana = 100 + "%"
            //         }
            //         $('.namaproyek').text(html.data.nama);
            //         $('#danadibutuhkan').text("Rp. " + formatNumber(parseInt(html.data.total_need)));
            //         $('#imbalhasil').text(html.data.profit_margin + ' %');
            //         $('#durasiproyek').text(html.data.tenor_waktu + ' Bulan');
            //         $('#minimuminvestasi').text("Rp. " + formatNumber(parseInt(html.data.harga_paket)));
            //         $('#jenisakad').text((html.data.pendanaan_akad == 1 ? 'Murabahah' : 'Mudarabah'));
            //         $('#terimahasil').text((html.data.mode_pembayaran == 1 ? 'Tiap Bulan' : 'Akhir Proyek'));
            //         $('#metodepembayaran').text((html.data.metode_pembayaran == 1 ? 'FULL' : 'Parsial'));
            //         $('#persendana').text(persendana);
            //         $('#progressbar').attr('style', "width: " + persendana + ";");
            //         $('#link').attr('href', "/borrower/detilProyek/" + html.data.id);
            //     }
            // });
            // }
        });
    });

    $("#change_layout_12").click(function(e) {

        $('#col').removeClass('col-md-9');
        $('#col').addClass('col-md-12');
        $('#col2').removeClass('col-md-9');
        $('#col2').addClass('col-md-12');

    });
    $("#change_layout_8").click(function(e) {
        if ($('#col').hasClass('col-md-9')) {
            $('#col').removeClass('col-md-9');
            $('#col').addClass('col-md-12');
            $('#col2').removeClass('col-md-9');
            $('#col2').addClass('col-md-12');
        } else {
            $('#col').removeClass('col-md-12');
            $('#col').addClass('col-md-9');
            $('#col2').removeClass('col-md-12');
            $('#col2').addClass('col-md-9');
        }

    });
</script>
</body>

</html>