<!DOCTYPE html>
<html lang="en" class="no-focus">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="csrf-token" content="XxmAuXuEJKxTdyLTzW0hlfvymde8fp1nArkshAcV">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Beranda</title>

    <!-- style -->
    <meta name="description" content="Dasbor Penerima Dana &amp; UI Framework V3">
    <meta name="author" content="dsiteam">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dana Syariah - Dasbor Penerima Dana &amp; UI Framework V3">
    <meta property="og:site_name" content="Dana Syariah">
    <meta property="og:description" content="Dana Syariah - Dasbor Penerima Dana &amp; UI Framework V3">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="https://www.danasyariah.id/img/favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="192x192" href="https://www.danasyariah.id/assetsBorrower/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.danasyariah.id/assetsBorrower/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" integrity="sha512-RvQxwf+3zJuNwl4e0sZjQeX7kUa3o82bDETpgVCH2RiwYSZVDdFJ7N/woNigN/ldyOOoKw8584jM4plQdt8bhA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/css">
    <link rel="stylesheet" id="css-main" href="<?= base_url('assets/dashboard') ?>/css/codebase.min.css">
    <!-- slick -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/slick-theme.css">
    <!-- end slick -->
    <!-- select2 -->
    <link href="<?= base_url('assets/dashboard') ?>/css/select2.min.css" rel="stylesheet">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <link rel="stylesheet" id="css-theme" href="<?= base_url('assets/dashboard') ?>/css/flat.css">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/simplemde.min.css">
    <!-- DropZone -->

    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/basic.css">
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/dropzone.css">
    <!-- rangepicker 
        <link rel="stylesheet" href="https://www.danasyariah.id/assetsBorrower/css/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
		-->

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/dataTables.bootstrap4.css">
    <!-- sweetAlert -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/sweetalert2.min.css">
    <!-- datepicker -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/bootstrap-datepicker3.min.css">
    <!-- flatpickr -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard') ?>/css/flatpickr.min.css">

    <script src="<?= base_url('assets/dashboard') ?>/js/jquery3.4.1.min.js.download"></script>
    <style>
        .bg-gradient-hijau {
            background: rgb(47, 122, 21);
            background: -moz-linear-gradient(51deg, rgba(47, 122, 21, 1) 0%, rgba(6, 119, 87, 1) 100%);
            background: -webkit-linear-gradient(51deg, rgba(47, 122, 21, 1) 0%, rgba(6, 119, 87, 1) 100%);
            background: linear-gradient(51deg, rgba(47, 122, 21, 1) 0%, rgba(6, 119, 87, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#2f7a15", endColorstr="#067757", GradientType=1);
        }

        .bg-gradient-hijau-2 {
            background: rgb(21, 122, 89);
            background: -moz-linear-gradient(51deg, rgba(21, 122, 89, 1) 0%, rgba(6, 95, 119, 1) 100%);
            background: -webkit-linear-gradient(51deg, rgba(21, 122, 89, 1) 0%, rgba(6, 95, 119, 1) 100%);
            background: linear-gradient(51deg, rgba(21, 122, 89, 1) 0%, rgba(6, 95, 119, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#157a59", endColorstr="#065f77", GradientType=1);
        }

        .bg-gradient-blue {
            background: rgb(21, 85, 122);
            background: -moz-linear-gradient(51deg, rgba(21, 85, 122, 1) 0%, rgba(6, 55, 119, 1) 100%);
            background: -webkit-linear-gradient(51deg, rgba(21, 85, 122, 1) 0%, rgba(6, 55, 119, 1) 100%);
            background: linear-gradient(51deg, rgba(21, 85, 122, 1) 0%, rgba(6, 55, 119, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#15557a", endColorstr="#063777", GradientType=1);
        }
    </style>
    <!-- END Stylesheets -->
    <style>
        .cke {
            visibility: hidden;
        }
    </style>
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body>

    <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-narrow side-trans-enabled">