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
            <img class="img-fluid rounded-8 d-none d-md-block" src="<?php echo base_url('assets/dist/img/promo/1.png') ?>" alt="">
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
                                        <p class="text-gray text-md" id="copy-message">Copy Text</p>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <p class="text-gray">Silahkan Salin dan Kirim Nomor Invoice
                            Anda ke Whatsapp Kami</p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-5">
                    <a class="bg-primary p-3 mr-3 rounded-10" href="https://www.instagram.com/koiteppanyaki?igsh=eGtydjB2NHR4a2ln" target="_blank">
                        <img src="<?php echo base_url('assets/dist/img/icons/instagram_white.svg') ?>" alt="Instagram">
                    </a>

                    <a class="bg-primary p-3 mr-3 rounded-10" href="https://wa.me" target="_blank">
                        <img src="<?php echo base_url('assets/dist/img/icons/whatsap_white.svg') ?>" alt="WhatsApp">
                    </a>

                    <a class="bg-primary p-3 rounded-10" href="https://www.tiktok.com" target="_blank">
                        <img src="<?php echo base_url('assets/dist/img/icons/tiktok_white.svg') ?>" alt="TikTok">
                    </a>
                </div>

            </div>

            <img class="img-fluid rounded-8 d-none d-md-block" src="<?php echo base_url('assets/dist/img/promo/2.png') ?>" alt="">
        </section>

        <!-- hidden -->
        <section class="container mt-5 d-md-none">
            <div class="bg-gray--500 w-full rounded-10 d-flex justify-content-center align-items-center text-center" style="height: 200px;">
                <h4>Ads Here</h4>
            </div>
        </section>


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
    </script>

</body>

</html>