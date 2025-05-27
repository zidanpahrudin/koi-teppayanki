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
                    <a class="dropdown-item py-2 d-flex align-items-center font-weight-medium fs-12" href="#">
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
        <div class="mt-4 container">
            <div class="d-flex align-items-center mb-3">
                <!-- Back Button -->
                <a class="me-3 text-decoration-none text-muted" href="<?php echo base_url('menu_list'); ?>">
                    <img src="<?php echo base_url('assets/dist/img/icons/chevron-left.svg'); ?>" alt="Back">
                </a>

                <!-- Title untuk mobile: flex-grow -->
                <h4 class="m-0 text-center font-weight-bold flex-grow-1 d-block d-md-none">
                    Keranjang
                </h4>

                <!-- Title untuk tablet ke atas: margin start -->
                <h4 class="m-0 text-center font-weight-bold ml-md-4 d-none d-md-block">
                    Keranjang
                </h4>
            </div>


        </div>

        <section class="container mt-4 mb-5">
            <div class="bg-secondary rounded-top-10 p-3">
                <h4 class="m-0 flex-grow-1 text-center font-weight-bold">KOI Teppanyaki Home Service</h4>
            </div>

            <?php foreach ($packages as $item) : ?>
                <div class="container border rounded-bottom-10 py-3 px-4 mb-4">
                    <div class="row">
                        <div class="col" style="max-width: 150px;">
                            <img class="img-fluid" src="<?php echo $item['image'] ?>" alt="">
                        </div>
                        <div class="col-8">
                            <h3><?php echo $item['title'] ?></h3>
                            <p class="">| <span class="clr-primary "><?php echo $item['price'] ?></span></p>
                            <div>
                                <p class="text-gray"><?php echo $item['items'] ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- create border bottom -->
                    <div class="border-bottom my-3"></div>
                    <div class="row justify-content-between">
                        <button class="col col-md-2 btn btn-custom-primary font-weight-bold rounded px-4 mx-2">Custom Menu</button>
                        <div class="col col-md-2 mx-2 d-flex justify-content-between align-items-center border rounded p-2" style="background-color: #f1f1f1;">
                            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle" id="decreaseQty"><i class="fa fa-minus"></i></button>
                            <span id="orderQty" class="mx-4"><?php echo $item['qty'] ?></span>
                            <button type="button" class="btn btn-sm btn-outline-primary rounded-circle" id="increaseQty"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>



            <div class="container border rounded-10 py-3 px-4 mb-4">
                <div class="row">
                    <div class="col-7">
                        <h5 class="font-weight-bold">Ada lagi pesanan lainnya?</h5>
                        <div>
                            <p>silahkan klik tombol tambah menu untuk menambahkan menu lainnya </p>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <a type="button" href="<?php echo base_url('menu_list') ?>" class="col btn btn-custom-primary font-weight-bold rounded px-4 mx-2">Tambah Menu</a>
                    </div>
                </div>
            </div>

            <div class="container border rounded-bottom py-3 px-4 mb-4">
                <div class="row">
                    <h4 class="font-weight-bold">Rincian Pesanan</h4>
                    <div class="container">
                        <h5 class="font-weight-bold">KOI Teppayanki</h5>
                        <?php $totalPrice = 0; ?>
                        <?php foreach ($packages as $item) : ?>
                            <!-- add variable for total price -->
                            <?php $totalPrice += $item['total_price'] ?>
                            <div class="row justify-content-between">
                                <p><?php echo $item['title'] ?> (<?php echo $item['qty'] ?> pax )</p>
                                <p class="text-gray">Rp. <?php echo $item['price'] ?></p>
                            </div>
                        <?php endforeach; ?>
                        <div class="border-bottom my-3"></div>
                        <div class="row justify-content-between font-weight-bold">
                            <p>Pembelian KOI Teppayanki</p>
                            <p class="text-gray">Rp. <?php echo $totalPrice ?></p>
                        </div>

                        <h4 class="font-weight-bold">Rincian Pembayaran</h4>
                        <div class="container">
                            <div class="row justify-content-between font-weight-bold">
                                <p>Total Pembelian KOI</p>
                                <p>Rp. <?php echo $totalPrice ?></p>
                            </div>
                            <p class="text-primary font-weight-bold">Diskon</p>
                            <div class="row justify-content-between text-primary font-weight-bold">
                                <p>Total Diskon</p>
                                <p>Rp. 0</p>
                            </div>
                            <div class="row justify-content-between font-weight-bold">
                                <p>Sub Total Pembelian KOI</p>
                                <p>Rp. <?php echo $totalPrice ?></p>
                            </div>
                            <p class="text-primary font-weight-bold">Charge</p>
                            <div class="row justify-content-between text-primary font-weight-bold">
                                <p>Total Charge</p>
                                <p>Rp. 0</p>
                            </div>
                        </div>
                        <!-- border bottom -->
                        <div class="border-bottom my-3"></div>
                        <div class="row justify-content-between">
                            <h5 class="font-weight-bold">Total Pembayaran</h5>
                            <h5 class="font-weight-bold">Rp. <?php echo $totalPrice ?></h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="card d-flex flex-row align-items-center bg-secondary p-3" style="border-radius: 15px 15px 0 0;">
                    <!-- Left Side (Image and Text) -->
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2.25C10.0716 2.25 8.18657 2.82183 6.58319 3.89317C4.97982 4.96451 3.73013 6.48726 2.99218 8.26884C2.25422 10.0504 2.06114 12.0108 2.43735 13.9021C2.81355 15.7934 3.74215 17.5307 5.10571 18.8943C6.46928 20.2579 8.20656 21.1865 10.0979 21.5627C11.9892 21.9389 13.9496 21.7458 15.7312 21.0078C17.5127 20.2699 19.0355 19.0202 20.1068 17.4168C21.1782 15.8134 21.75 13.9284 21.75 12C21.7473 9.41498 20.7192 6.93661 18.8913 5.10872C17.0634 3.28084 14.585 2.25273 12 2.25ZM12 20.25C10.3683 20.25 8.77326 19.7661 7.41655 18.8596C6.05984 17.9531 5.00242 16.6646 4.378 15.1571C3.75358 13.6496 3.5902 11.9908 3.90853 10.3905C4.22685 8.79016 5.01259 7.32015 6.16637 6.16637C7.32016 5.01259 8.79017 4.22685 10.3905 3.90852C11.9909 3.59019 13.6497 3.75357 15.1571 4.37799C16.6646 5.00242 17.9531 6.05984 18.8596 7.41655C19.7661 8.77325 20.25 10.3683 20.25 12C20.2475 14.1873 19.3775 16.2843 17.8309 17.8309C16.2843 19.3775 14.1873 20.2475 12 20.25ZM13.5 16.5C13.5 16.6989 13.421 16.8897 13.2803 17.0303C13.1397 17.171 12.9489 17.25 12.75 17.25C12.3522 17.25 11.9706 17.092 11.6893 16.8107C11.408 16.5294 11.25 16.1478 11.25 15.75V12C11.0511 12 10.8603 11.921 10.7197 11.7803C10.579 11.6397 10.5 11.4489 10.5 11.25C10.5 11.0511 10.579 10.8603 10.7197 10.7197C10.8603 10.579 11.0511 10.5 11.25 10.5C11.6478 10.5 12.0294 10.658 12.3107 10.9393C12.592 11.2206 12.75 11.6022 12.75 12V15.75C12.9489 15.75 13.1397 15.829 13.2803 15.9697C13.421 16.1103 13.5 16.3011 13.5 16.5ZM10.5 7.875C10.5 7.6525 10.566 7.43499 10.6896 7.24998C10.8132 7.06498 10.9889 6.92078 11.1945 6.83564C11.4001 6.75049 11.6263 6.72821 11.8445 6.77162C12.0627 6.81502 12.2632 6.92217 12.4205 7.0795C12.5778 7.23684 12.685 7.43729 12.7284 7.65552C12.7718 7.87375 12.7495 8.09995 12.6644 8.30552C12.5792 8.51109 12.435 8.68679 12.25 8.8104C12.065 8.93402 11.8475 9 11.625 9C11.3266 9 11.0405 8.88147 10.8295 8.6705C10.6185 8.45952 10.5 8.17337 10.5 7.875Z" fill="white" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h5 class="mb-0 ">Klik Untuk Melanjutkan</h5>
                            <p class="mb-0 text-sm">Pastikan makanan anda sudah benar semuanya</p>
                        </div>
                    </div>

                    <!-- Right Side (Price and Arrow) -->

                    <div class="ml-auto d-flex align-items-center">
                        <h5 class="mr-3 mb-0">Selanjutnya</h5>
                        <a href="<?php echo base_url('confirmation_order') ?>" class="btn">
                            <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 0.5L7 6.5L1 12.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </section>




    </main>

    <script>
        $(document).on('click', '#increaseQty', function() {
            let current = parseInt($('#orderQty').text());
            $('#orderQty').text(current + 1);
        });

        $(document).on('click', '#decreaseQty', function() {
            let current = parseInt($('#orderQty').text());
            if (current > 1) {
                $('#orderQty').text(current - 1);
            }
        });
    </script>

</body>

</html>