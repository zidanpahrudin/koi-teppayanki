<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reservation</title>

    <!-- google font DM sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/daterangepicker/daterangepicker.css") ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">

    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/custom.css') ?>">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/select2/css/select2.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css") ?>">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css") ?>">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/bs-stepper/css/bs-stepper.min.css") ?>">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/dropzone/min/dropzone.min.css") ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css") ?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css") ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/jqvmap/jqvmap.min.css") ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/daterangepicker/daterangepicker.css") ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/summernote/summernote-bs4.min.css") ?>">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css") ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/toastr/toastr.min.css") ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">


    <!-- jQuery -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?> "></script>
    <script src="<?= base_url("assets/plugins/jquery-ui/jquery-ui.min.js") ?> "></script>

    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Select2 -->
    <script src="<?= base_url("assets/plugins/select2/js/select2.full.min.js") ?>"></script>

    <!-- Bootstrap4 Duallistbox -->
    <script src="<?= base_url("assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js") ?>"></script>
    <!-- InputMask -->
    <script src="<?= base_url("assets/plugins/inputmask/jquery.inputmask.min.js") ?>"></script>
    <!-- bootstrap color picker -->
    <script src="<?= base_url("assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js") ?>"></script>
    <!-- Bootstrap Switch -->
    <script src="<?= base_url("assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js") ?>"></script>
    <!-- BS-Stepper -->
    <script src="<?= base_url("assets/plugins/bs-stepper/js/bs-stepper.min.js") ?>"></script>
    <!-- dropzonejs -->
    <script src="<?= base_url("assets/plugins/dropzone/min/dropzone.min.js") ?>"></script>

    <script src="<?= base_url("assets/plugins/chart.js/Chart.min.js")  ?>"></script>
    <!-- Sparkline -->
    <script src="<?= base_url("assets/plugins/sparklines/sparkline.js") ?>"></script>
    <!-- JQVMap -->
    <script src="<?= base_url("assets/plugins/jqvmap/jquery.vmap.min.js")  ?>"></script>
    <script src="<?= base_url("assets/plugins/jqvmap/maps/jquery.vmap.usa.js")  ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url("assets/plugins/jquery-knob/jquery.knob.min.js")  ?>"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url("assets/plugins/moment/moment.min.js")  ?>"></script>
    <script src="<?= base_url("assets/plugins/daterangepicker/daterangepicker.js")  ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url("assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")  ?>"></script>
    <!-- Summernote -->
    <script src="<?= base_url("assets/plugins/summernote/summernote-bs4.min.js")  ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")  ?>"></script>


    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
    <!-- <script src="<?= base_url("assets/dist/js/demo.js")  ?>"></script> -->
    <!-- <script src="<?= base_url("assets/dist/js/pages/dashboard.js")  ?>"></script> -->


    <!-- DataTables  & Plugins -->
    <script src="<?= base_url("assets/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/datatables-responsive/js/dataTables.responsive.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/datatables-buttons/js/dataTables.buttons.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/jszip/jszip.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/pdfmake/pdfmake.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/pdfmake/vfs_fonts.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/datatables-buttons/js/buttons.html5.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/datatables-buttons/js/buttons.print.min.js") ?>"></script>
    <script src="<?= base_url("assets/plugins/datatables-buttons/js/buttons.colVis.min.js") ?>"></script>

    <!-- SweetAlert2 -->
    <script src="<?= base_url("assets/plugins/sweetalert2/sweetalert2.min.js") ?>"></script>
    <!-- Toastr -->
    <script src="<?= base_url("assets/plugins/toastr/toastr.min.js") ?>"></script>

    <!-- jQuery Mapael -->
    <script src="<?= base_url('assets/plugins/jquery-mousewheel/jquery.mousewheel.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/raphael/raphael.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-mapael/jquery.mapael.min.js') ?>"></script>
    <script src="<?= base_url('assets/plugins/jquery-mapael/maps/usa_states.min.js') ?>"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <style>
        body {
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .menu-scroll-wrapper {
            display: flex;
            overflow-x: auto;
            gap: 1rem;
            padding-bottom: 0.5rem;
            scrollbar-color: red transparent;
            /* Firefox */
        }

        /* WebKit browsers (Chrome, Edge, Safari) */
        .menu-scroll-wrapper::-webkit-scrollbar {
            height: 20px;
            /* Increased height for a larger scrollbar */
        }

        .menu-scroll-wrapper::-webkit-scrollbar-track {
            background: transparent;
            /* Transparent background */
            border: none;
            /* Remove border for a cleaner look */
        }

        .menu-scroll-wrapper::-webkit-scrollbar-thumb {
            background-color: red;
            /* Red thumb */
            border-radius: 10px;
            /* Rounded thumb */
            border: none;
            /* No border */
        }

        /* Remove arrows for WebKit browsers (Chrome, Edge, Safari) */
        .menu-scroll-wrapper::-webkit-scrollbar-button {
            display: none;
            /* Hide the scrollbar buttons (arrows) */
        }


        .menu-column {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            min-width: 200px;
        }
    </style>

</head>

<body>
    <header class="position-relative p-3">
        <span class="border-line"></span>
        <nav class="d-flex justify-content-between">
            <div>
                <a href="<?php echo base_url(); ?>">
                    <img class="img-fluid" src="<?php echo base_url('assets/dist/img/logo-koi-teppayanki.png'); ?>" alt="logo-koi-teppayanki">
                </a>
                <h3 class="text-gray fs-9 font-weight-normal">
                    #1 TEPPAYANKI BRAND SINCE 1997
                </h3>
            </div>
            <div class="dropdown d-flex align-items-center">
                <img src="<?php echo base_url('assets/dist/img/icons/telp.svg') ?>" alt="Icon Telp" class="img-fluid">

                <button class="btn dropdown-toggle border-0 px-2 py-1 text-dark d-flex align-items-center gap-1 font-weight-medium fs-12" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hubungi Kami
                    <i class="fas fa-chevron-down ml-2 fs-12"></i>
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: #f8f9fa;">
                    <a class="dropdown-item py-2 d-flex align-items-center font-weight-medium fs-12" href="https://www.instagram.com/koiteppanyaki?igsh=eGtydjB2NHR4a2ln">
                        <img src="<?php echo base_url('assets/dist/img/icons/instagram.svg') ?>" alt="Icon Instagram" class="mr-2" width="16">
                        @koi.teppanyaki
                    </a>
                    <a class="dropdown-item py-2 d-flex align-items-center font-weight-medium fs-12" href="https://wa.me/6285954321475">
                        <img src="<?php echo base_url('assets/dist/img/icons/whatsapp.svg') ?>" alt="Icon WhatsApp" class="mr-2" width="16">
                        0812-8881-6061
                    </a>
                </div>
            </div>


        </nav>

    </header>

    <main class="px-4">
        <section class="d-flex flex-column justify-content-center align-items-center text-center">

            <div class="d-flex justify-content-around w-100 mt-4" style="max-width: 300px;">
                <div class="step">
                    <img src="<?php echo base_url('assets/dist/img/icons/done.svg') ?>" />
                </div>
                <div class="step">
                    <img src="<?php echo base_url('assets/dist/img/icons/done.svg') ?>" />
                </div>
                <div class="step active">
                    <img src="<?php echo base_url('assets/dist/img/icons/done.svg') ?>" />
                </div>
            </div>
        </section>

        <section class="d-flex justify-content-around align-items-center max-w-2xl mx-auto">
            <?php if (!empty($promo_banner)): ?>
                <?php
                $matching_banners_left = array_filter($promo_banner, function ($pb) {
                    return $pb['orientation'] === 'portrait' && $pb['display_position'] === 'home-top-left';
                });
                ?>

                <?php if (!empty($matching_banners_left)): ?>
                    <div class="promo-slider-left d-none d-md-block" style="max-width: 200px;">
                        <?php foreach ($matching_banners_left as $pb): ?>
                            <div>
                                <img
                                    class="img-fluid rounded-8"
                                    src="<?php echo base_url($pb['image_url']); ?>"
                                    alt="Promo Banner">
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="d-none d-md-flex bg-gray--500 w-full rounded-10 justify-content-center align-items-center text-center" style="width: 434px; height: 351px;">
                        <h4>Ads Here</h4>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="d-none d-md-flex bg-gray--500 w-full rounded-10 justify-content-center align-items-center text-center" style="width: 434px; height: 351px;">
                    <h4>Ads Here</h4>
                </div>
            <?php endif; ?>

            <div class="container">
                <div class="justify-content-center text-center">
                    <img src="<?php echo base_url('assets/dist/img/ilustration/Checklist-pana.svg') ?>" class="img-fluid mb-4" alt="">
                    <h3 class="font-weight-bold px-5">Thank You For Your Order ! 🙏</h3>
                    <p class="text-gray">a great experience is coming your way!</p>

                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-12 col-md-auto text-center">
                                    <h3 class="font-weight-bold" id="order-id"># <?php echo $order_no; ?></h3>
                                </div>
                                <div class="col-12 col-md-auto d-flex justify-content-center align-items-center"> <!-- Ensure the button is centered -->
                                    <button class="btn d-flex align-items-center justify-content-center" onclick="copyText()">
                                        <img src="<?php echo base_url('assets/dist/img/icons/copy.png') ?>" alt="Icon copy">
                                        <p class="text-gray text-md text-lg" id="copy-message">Copy Text</p>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <p class="text-gray text-underline">Silahkan Salin dan Kirim Nomor Invoice
                            Anda ke Whatsapp Kami</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-5">
                    <a class="btn-custom-medsos p-3 mr-3 rounded-10" href="https://www.instagram.com/koiteppanyaki?igsh=eGtydjB2NHR4a2ln" target="_blank">
                        <svg class="chevron" width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.46896 17.0306L0.968958 9.53055C0.899225 9.4609 0.843905 9.37818 0.806163 9.28713C0.768419 9.19608 0.748994 9.09849 0.748994 8.99993C0.748994 8.90137 0.768419 8.80377 0.806163 8.71272C0.843905 8.62168 0.899225 8.53896 0.968958 8.4693L8.46896 0.969304C8.60969 0.828573 8.80056 0.749512 8.99958 0.749512C9.19861 0.749512 9.38948 0.828573 9.53021 0.969304C9.67094 1.11003 9.75 1.30091 9.75 1.49993C9.75 1.69895 9.67094 1.88982 9.53021 2.03055L2.5599 8.99993L9.53021 15.9693C9.59989 16.039 9.65517 16.1217 9.69288 16.2128C9.73059 16.3038 9.75 16.4014 9.75 16.4999C9.75 16.5985 9.73059 16.6961 9.69288 16.7871C9.65517 16.8781 9.59989 16.9609 9.53021 17.0306C9.46053 17.1002 9.3778 17.1555 9.28676 17.1932C9.19571 17.2309 9.09813 17.2503 8.99958 17.2503C8.90104 17.2503 8.80346 17.2309 8.71241 17.1932C8.62137 17.1555 8.53864 17.1002 8.46896 17.0306Z" fill="#FFC353" />
                        </svg>

                        <svg class="icon" width="33" height="32" viewBox="0 0 33 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.5 10C15.3133 10 14.1533 10.3519 13.1666 11.0112C12.1799 11.6705 11.4108 12.6075 10.9567 13.7039C10.5026 14.8003 10.3838 16.0067 10.6153 17.1705C10.8468 18.3344 11.4182 19.4035 12.2574 20.2426C13.0965 21.0818 14.1656 21.6532 15.3295 21.8847C16.4933 22.1162 17.6997 21.9974 18.7961 21.5433C19.8925 21.0892 20.8295 20.3201 21.4888 19.3334C22.1481 18.3467 22.5 17.1867 22.5 16C22.4983 14.4092 21.8657 12.884 20.7408 11.7592C19.616 10.6343 18.0908 10.0017 16.5 10ZM16.5 20C15.7089 20 14.9355 19.7654 14.2777 19.3259C13.6199 18.8864 13.1072 18.2616 12.8045 17.5307C12.5017 16.7998 12.4225 15.9956 12.5769 15.2196C12.7312 14.4437 13.1122 13.731 13.6716 13.1716C14.231 12.6122 14.9437 12.2312 15.7196 12.0769C16.4956 11.9225 17.2998 12.0017 18.0307 12.3045C18.7616 12.6072 19.3864 13.1199 19.8259 13.7777C20.2654 14.4355 20.5 15.2089 20.5 16C20.5 17.0609 20.0786 18.0783 19.3284 18.8284C18.5783 19.5786 17.5609 20 16.5 20ZM22.5 3H10.5C8.64409 3.00199 6.86477 3.74012 5.55245 5.05245C4.24012 6.36477 3.50199 8.14409 3.5 10V22C3.50199 23.8559 4.24012 25.6352 5.55245 26.9476C6.86477 28.2599 8.64409 28.998 10.5 29H22.5C24.3559 28.998 26.1352 28.2599 27.4476 26.9476C28.7599 25.6352 29.498 23.8559 29.5 22V10C29.498 8.14409 28.7599 6.36477 27.4476 5.05245C26.1352 3.74012 24.3559 3.00199 22.5 3ZM27.5 22C27.5 23.3261 26.9732 24.5979 26.0355 25.5355C25.0979 26.4732 23.8261 27 22.5 27H10.5C9.17392 27 7.90215 26.4732 6.96447 25.5355C6.02678 24.5979 5.5 23.3261 5.5 22V10C5.5 8.67392 6.02678 7.40215 6.96447 6.46447C7.90215 5.52678 9.17392 5 10.5 5H22.5C23.8261 5 25.0979 5.52678 26.0355 6.46447C26.9732 7.40215 27.5 8.67392 27.5 10V22ZM24.5 9.5C24.5 9.79667 24.412 10.0867 24.2472 10.3334C24.0824 10.58 23.8481 10.7723 23.574 10.8858C23.2999 10.9994 22.9983 11.0291 22.7074 10.9712C22.4164 10.9133 22.1491 10.7704 21.9393 10.5607C21.7296 10.3509 21.5867 10.0836 21.5288 9.79264C21.4709 9.50166 21.5007 9.20006 21.6142 8.92597C21.7277 8.65189 21.92 8.41762 22.1666 8.2528C22.4133 8.08797 22.7033 8 23 8C23.3978 8 23.7794 8.15804 24.0607 8.43934C24.342 8.72064 24.5 9.10218 24.5 9.5Z" fill="currentColor" />
                        </svg>

                        <div class="custom-medsos-detail">
                            <p class="text-white mb-0">@KOI.TEPPAYANKI</p>
                        </div>
                    </a>

                    <a class="btn-custom-medsos p-3 mr-3 rounded-10" href="https://wa.me" target="_blank">
                        <svg class="chevron" width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.46896 17.0306L0.968958 9.53055C0.899225 9.4609 0.843905 9.37818 0.806163 9.28713C0.768419 9.19608 0.748994 9.09849 0.748994 8.99993C0.748994 8.90137 0.768419 8.80377 0.806163 8.71272C0.843905 8.62168 0.899225 8.53896 0.968958 8.4693L8.46896 0.969304C8.60969 0.828573 8.80056 0.749512 8.99958 0.749512C9.19861 0.749512 9.38948 0.828573 9.53021 0.969304C9.67094 1.11003 9.75 1.30091 9.75 1.49993C9.75 1.69895 9.67094 1.88982 9.53021 2.03055L2.5599 8.99993L9.53021 15.9693C9.59989 16.039 9.65517 16.1217 9.69288 16.2128C9.73059 16.3038 9.75 16.4014 9.75 16.4999C9.75 16.5985 9.73059 16.6961 9.69288 16.7871C9.65517 16.8781 9.59989 16.9609 9.53021 17.0306C9.46053 17.1002 9.3778 17.1555 9.28676 17.1932C9.19571 17.2309 9.09813 17.2503 8.99958 17.2503C8.90104 17.2503 8.80346 17.2309 8.71241 17.1932C8.62137 17.1555 8.53864 17.1002 8.46896 17.0306Z" fill="#FFC353" />
                        </svg>
                        <svg class="icon" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.9464 18.105L19.9464 16.105C19.789 16.0265 19.6136 15.991 19.438 16.002C19.2625 16.0129 19.0929 16.07 18.9464 16.1675L17.1102 17.3925C16.2672 16.9291 15.5736 16.2354 15.1102 15.3925L16.3352 13.5562C16.4326 13.4098 16.4897 13.2402 16.5007 13.0646C16.5117 12.8891 16.4761 12.7137 16.3977 12.5562L14.3977 8.55625C14.3148 8.38884 14.1867 8.248 14.0278 8.14968C13.869 8.05137 13.6857 7.99952 13.4989 8C12.1728 8 10.9011 8.52678 9.9634 9.46447C9.02572 10.4021 8.49893 11.6739 8.49893 13C8.50224 15.9164 9.66223 18.7123 11.7244 20.7745C13.7866 22.8367 16.5826 23.9967 19.4989 24C20.1555 24 20.8057 23.8707 21.4123 23.6194C22.019 23.3681 22.5702 22.9998 23.0345 22.5355C23.4988 22.0712 23.8671 21.52 24.1183 20.9134C24.3696 20.3068 24.4989 19.6566 24.4989 19C24.4991 18.8142 24.4474 18.6321 24.3499 18.474C24.2523 18.3159 24.1126 18.1881 23.9464 18.105ZM19.4989 22C17.1128 21.9974 14.8251 21.0483 13.1379 19.361C11.4506 17.6738 10.5016 15.3861 10.4989 13C10.4987 12.3064 10.7389 11.6342 11.1785 11.0977C11.6181 10.5612 12.2301 10.1936 12.9102 10.0575L14.3452 12.9325L13.1239 14.75C13.0327 14.8869 12.9766 15.0442 12.9607 15.2079C12.9448 15.3717 12.9695 15.5368 13.0327 15.6888C13.7482 17.3892 15.101 18.742 16.8014 19.4575C16.9538 19.5235 17.1202 19.5505 17.2856 19.5361C17.451 19.5217 17.6103 19.4663 17.7489 19.375L19.5752 18.1575L22.4502 19.5925C22.313 20.2734 21.9438 20.8856 21.4056 21.3247C20.8674 21.7637 20.1935 22.0024 19.4989 22ZM16.4989 3C14.2545 2.99951 12.0482 3.58011 10.0947 4.68529C8.14129 5.79046 6.50724 7.38256 5.35165 9.30662C4.19605 11.2307 3.55828 13.4212 3.50042 15.6648C3.44255 17.9085 3.96656 20.1289 5.02143 22.11L3.60268 26.3662C3.48516 26.7186 3.46811 27.0968 3.55343 27.4583C3.63875 27.8199 3.82308 28.1505 4.08575 28.4132C4.34842 28.6759 4.67905 28.8602 5.04059 28.9455C5.40213 29.0308 5.78029 29.0138 6.13268 28.8962L10.3889 27.4775C12.1324 28.4048 14.0642 28.9228 16.0377 28.992C18.0112 29.0613 19.9746 28.68 21.7788 27.8772C23.5829 27.0743 25.1805 25.871 26.4502 24.3586C27.7199 22.8462 28.6283 21.0644 29.1066 19.1484C29.5848 17.2325 29.6203 15.2328 29.2103 13.301C28.8004 11.3693 27.9557 9.55642 26.7405 7.9999C25.5252 6.44337 23.9714 5.18415 22.1968 4.31782C20.4223 3.45149 18.4737 3.00081 16.4989 3ZM16.4989 27C14.5652 27.0013 12.6653 26.4921 10.9914 25.5238C10.8689 25.4527 10.7326 25.4085 10.5917 25.394C10.4507 25.3796 10.3084 25.3953 10.1739 25.44L5.49893 27L7.05768 22.325C7.10261 22.1907 7.11849 22.0483 7.10427 21.9074C7.09005 21.7665 7.04605 21.6301 6.97518 21.5075C5.76265 19.4111 5.27582 16.9732 5.59022 14.572C5.90462 12.1707 7.00267 9.94027 8.71404 8.22674C10.4254 6.51321 12.6544 5.41234 15.0553 5.0949C17.4562 4.77747 19.8947 5.26122 21.9926 6.47111C24.0905 7.68099 25.7305 9.54939 26.6581 11.7864C27.5858 14.0235 27.7493 16.5042 27.1232 18.8436C26.4972 21.1831 25.1166 23.2505 23.1956 24.7253C21.2747 26.2 18.9207 26.9996 16.4989 27Z" fill="white" />
                        </svg>

                        <div class="custom-medsos-detail">
                            <p class="text-white mb-0">OUR WHATSAPP</p>
                        </div>

                    </a>

                    <a class="btn-custom-medsos p-3 rounded-10" href="https://www.tiktok.com" target="_blank">
                        <svg class="chevron" width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.46896 17.0306L0.968958 9.53055C0.899225 9.4609 0.843905 9.37818 0.806163 9.28713C0.768419 9.19608 0.748994 9.09849 0.748994 8.99993C0.748994 8.90137 0.768419 8.80377 0.806163 8.71272C0.843905 8.62168 0.899225 8.53896 0.968958 8.4693L8.46896 0.969304C8.60969 0.828573 8.80056 0.749512 8.99958 0.749512C9.19861 0.749512 9.38948 0.828573 9.53021 0.969304C9.67094 1.11003 9.75 1.30091 9.75 1.49993C9.75 1.69895 9.67094 1.88982 9.53021 2.03055L2.5599 8.99993L9.53021 15.9693C9.59989 16.039 9.65517 16.1217 9.69288 16.2128C9.73059 16.3038 9.75 16.4014 9.75 16.4999C9.75 16.5985 9.73059 16.6961 9.69288 16.7871C9.65517 16.8781 9.59989 16.9609 9.53021 17.0306C9.46053 17.1002 9.3778 17.1555 9.28676 17.1932C9.19571 17.2309 9.09813 17.2503 8.99958 17.2503C8.90104 17.2503 8.80346 17.2309 8.71241 17.1932C8.62137 17.1555 8.53864 17.1002 8.46896 17.0306Z" fill="#FFC353" />
                        </svg>
                        <svg class="icon" width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.5 9C26.9092 8.99835 25.384 8.36567 24.2592 7.24081C23.1343 6.11595 22.5017 4.59079 22.5 3C22.5 2.73478 22.3946 2.48043 22.2071 2.29289C22.0196 2.10536 21.7652 2 21.5 2H16.5C16.2348 2 15.9804 2.10536 15.7929 2.29289C15.6054 2.48043 15.5 2.73478 15.5 3V19.5C15.4998 19.9474 15.3796 20.3865 15.1518 20.7715C14.9241 21.1566 14.5972 21.4735 14.2053 21.6891C13.8133 21.9048 13.3707 22.0114 12.9236 21.9977C12.4764 21.984 12.0411 21.8506 11.6631 21.6114C11.2851 21.3722 10.9782 21.0359 10.7744 20.6376C10.5707 20.2394 10.4775 19.7938 10.5046 19.3472C10.5317 18.9007 10.6782 18.4696 10.9287 18.099C11.1792 17.7283 11.5245 17.4317 11.9288 17.24C12.0997 17.1589 12.2442 17.0309 12.3453 16.8709C12.4464 16.7109 12.5001 16.5255 12.5 16.3363V11C12.5001 10.8538 12.4681 10.7094 12.4063 10.5769C12.3445 10.4445 12.2544 10.3271 12.1424 10.2332C12.0304 10.1393 11.8992 10.0711 11.7579 10.0334C11.6167 9.9957 11.4689 9.98942 11.325 10.015C6.86375 10.81 3.5 14.8875 3.5 19.5C3.5 22.0196 4.50089 24.4359 6.28249 26.2175C8.06408 27.9991 10.4804 29 13 29C15.5196 29 17.9359 27.9991 19.7175 26.2175C21.4991 24.4359 22.5 22.0196 22.5 19.5V14.5363C24.3521 15.5026 26.411 16.0049 28.5 16C28.7652 16 29.0196 15.8946 29.2071 15.7071C29.3946 15.5196 29.5 15.2652 29.5 15V10C29.5 9.73478 29.3946 9.48043 29.2071 9.29289C29.0196 9.10536 28.7652 9 28.5 9ZM27.5 13.955C25.5458 13.7818 23.6746 13.0844 22.0837 11.9362C21.9342 11.8287 21.7579 11.7646 21.5743 11.7509C21.3906 11.7373 21.2068 11.7746 21.043 11.8587C20.8792 11.9429 20.7418 12.0706 20.646 12.2279C20.5502 12.3852 20.4997 12.5658 20.5 12.75V19.5C20.5 21.4891 19.7098 23.3968 18.3033 24.8033C16.8968 26.2098 14.9891 27 13 27C11.0109 27 9.10322 26.2098 7.6967 24.8033C6.29018 23.3968 5.5 21.4891 5.5 19.5C5.5 16.2625 7.58 13.3588 10.5 12.3V15.7587C9.85356 16.1907 9.33005 16.7827 8.9805 17.4771C8.63094 18.1716 8.46727 18.9447 8.50542 19.7213C8.54358 20.4978 8.78226 21.2512 9.19821 21.908C9.61417 22.5648 10.1932 23.1027 10.8789 23.4691C11.5645 23.8356 12.3334 24.0182 13.1107 23.999C13.8879 23.9799 14.6469 23.7598 15.3137 23.36C15.9805 22.9603 16.5324 22.3946 16.9156 21.7181C17.2987 21.0417 17.5001 20.2775 17.5 19.5V4H20.5625C20.7874 5.76135 21.5906 7.39822 22.8462 8.65379C24.1018 9.90937 25.7386 10.7126 27.5 10.9375V13.955Z" fill="white" />
                        </svg>

                        <div class="custom-medsos-detail">
                            <p class="text-white mb-0">@KOI.TEPPAYANKI</p>
                        </div>

                    </a>
                </div>

            </div>

            <?php if (!empty($promo_banner)): ?>
                <?php
                $matching_banners = array_filter($promo_banner, function ($pb) {
                    return $pb['orientation'] === 'portrait' && $pb['display_position'] === 'home-top-right';
                });
                ?>

                <?php if (!empty($matching_banners)): ?>
                    <div class="promo-slider d-none d-md-block" style="max-width: 200px;">
                        <?php foreach ($matching_banners as $pb): ?>
                            <div>
                                <img
                                    class="img-fluid rounded-8"
                                    src="<?php echo base_url($pb['image_url']); ?>"
                                    alt="Promo Banner">
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="d-none d-md-flex bg-gray--500 w-full rounded-10 justify-content-center align-items-center text-center" style="width: 434px; height: 351px;">
                        <h4>Ads Here</h4>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div class="d-none d-md-flex bg-gray--500 w-full rounded-10 justify-content-center align-items-center text-center" style="width: 434px; height: 351px;">
                    <h4>Ads Here</h4>
                </div>
            <?php endif; ?>
        </section>

        <!-- hidden -->
        <?php if (!empty($promo_banner)): ?>
            <?php
            $matching_bottom_banners = array_filter($promo_banner, function ($pb) {
                return $pb['orientation'] === 'landscape' && $pb['display_position'] === 'home-bottom';
            });
            ?>

            <?php if (!empty($matching_bottom_banners)): ?>
                <div class="row mt-4 d-md-none">
                    <div class="col-12">
                        <div class="promo-slider-bottom">
                            <?php foreach ($matching_bottom_banners as $pb): ?>
                                <div>
                                    <img class="img-fluid rounded-8"
                                        src="<?php echo base_url($pb['image_url']); ?>"
                                        alt="Promo Banner">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="row mt-4 d-md-none">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="d-flex bg-gray--500 w-full rounded-10 justify-content-center align-items-center text-center" style="height: 154px;">
                                <h4>Ads Here</h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <div class="row mt-4 d-md-none">
                <div class="col-md-4">
                    <div class="card">
                        <div class="d-flex bg-gray--500 w-full rounded-10 justify-content-center align-items-center text-center" style="height: 154px;">
                            <h4>Ads Here</h4>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>



    </main>


    <script>
        function copyText() {
            // Get the text from the h3 element
            var text = document.getElementById('order-id').innerText;

            // Create a temporary input element to copy the text
            var tempInput = document.createElement('input');
            tempInput.value = text;
            document.body.appendChild(tempInput);

            // Select the text
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); // For mobile devices

            // Execute the copy command
            document.execCommand('copy');

            // Remove the temporary input
            document.body.removeChild(tempInput);

            // Update the button text to show the copied message
            var copyMessage = document.getElementById('copy-message');
            copyMessage.innerText = 'Text Copied!';

            // Optionally, reset the message after a few seconds
            setTimeout(function() {
                copyMessage.innerText = 'Copy Text';
            }, 2000);
        }

        function initSlider(selector) {
            const $slider = $(selector);

            if (!$slider.length) return;

            let images = $slider.find('img');
            let totalImages = images.length;
            let loadedCount = 0;

            if (totalImages === 0) {
                startSlick();
            } else {
                images.each(function() {
                    if (this.complete) {
                        loadedCount++;
                        if (loadedCount === totalImages) {
                            startSlick();
                        }
                    } else {
                        $(this).on('load', function() {
                            loadedCount++;
                            if (loadedCount === totalImages) {
                                startSlick();
                            }
                        });
                    }
                });
            }

            function startSlick() {
                if ($slider.hasClass('slick-initialized')) {
                    $slider.slick('unslick');
                }

                $slider.slick({
                    autoplay: true,
                    autoplaySpeed: 3000,
                    arrows: false,
                    dots: false,
                    infinite: true,
                    speed: 500,
                    fade: false,
                    cssEase: 'linear'
                });
            }
        }

        // Untuk handle resize secara efisien
        let resizeTimer;

        function reinitAllSliders() {
            initSlider('.promo-slider');
            initSlider('.promo-slider-left');
            initSlider('.promo-slider-bottom');
        }

        $(document).ready(function() {
            reinitAllSliders();
        });

        $(document).on('ajaxComplete', function() {
            reinitAllSliders();
        });

        // Tambahkan ini untuk handle screen resize
        $(window).on('resize orientationchange', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                reinitAllSliders();
            }, 300); // delay untuk menghindari trigger berulang-ulang
        });
    </script>

</body>

</html>