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

    <main class="px-4 container">
        <section class="d-flex flex-column justify-content-center align-items-center text-center">
            <img class="img-fluid mt-4" src="<?php echo base_url('assets/dist/img/logo_group.svg') ?>" alt="">

            <div class="d-flex justify-content-around w-100 mt-4" style="max-width: 300px;">
                <div class="step">
                    <img src="<?php echo base_url('assets/dist/img/icons/done.svg') ?>" />
                </div>
                <div class="step">
                    <img src="<?php echo base_url('assets/dist/img/icons/done.svg') ?>" />
                </div>
                <div class="step active">
                    <div class="circle">3</div>
                </div>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center align-items-center">
                    <h1 class="font-weight-normal fs-24">
                        <strong class="d-inline-block mb-2" style="border-bottom: 2px solid black;">
                            Customer Information Form
                        </strong>
                    </h1>
                </div>
            </div>

        </section>

        <section>
            <!-- url to send -->

            <form id="orderForm" method="post" action="<?php echo base_url('confirmation_order') ?>">
                <div class="card p-4 rounded-10">
                    <!-- Full Name -->
                    <div class="form-group">
                        <label for="full_name">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control bg-light p-4 rounded-10" name="full_name" id="full_name" placeholder="Masukkan Nama Lengkap Anda">
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone_no">Nomor HP</label>
                        <input type="text" class="form-control bg-light p-4 rounded-10" name="phone_no" id="phone_no" placeholder="Masukkan Nomor HP Anda">
                    </div>

                    <!-- Order Date -->
                    <div class="form-group">
                        <label for="order_date">Tanggal Acara</label>
                        <div class="input-group">
                            <input type="text" name="order_date" class="form-control bg-light p-4 rounded-10" id="tanggal" placeholder="Pilih Tanggal">
                        </div>
                    </div>

                    <!-- Event Time -->
                    <div class="form-group">
                        <label for="event_time">Jam Acara (00:01-11:59 am | 12:00 - 23:59)</label>
                        <div class="input-group mb-3">
                            <input type="text" name="event_time" class="form-control bg-light p-4 rounded-10" id="event_time" placeholder="Masukan Jam Acara">
                        </div>
                    </div>

                    <!-- City -->
                    <div class="form-group">
                        <label for="city">Kota</label>
                        <input type="text" class="form-control bg-light p-4 rounded-10" name="city" id="city" placeholder="Masukkan Wilayah Kota">
                    </div>

                    <!-- Address -->
                    <div class="form-group">
                        <label for="address">Alamat Acara <span class="text-danger">*</span></label>
                        <input type="text" class="form-control bg-light p-4 rounded-10" name="address" id="address" placeholder="Masukkan Alamat">
                    </div>

                    <!-- Event Type -->
                    <div class="form-group">
                        <label for="event_type">Jenis Acara <span class="text-danger">*</span></label>
                        <select class="form-control bg-light text-dark custom-select-no-arrow rounded-10" name="event_type" id="event_type" style="height: 48px; padding-left: 1rem; padding-right: 2.5rem;">
                            <option selected disabled>Pilih Jenis Acara</option>
                            <option value="ulang_tahun">Ulang Tahun</option>
                            <option value="arisan">Arisan</option>
                            <option value="syukuran">Syukuran</option>
                            <option value="acara_keluarga">Acara Keluarga</option>
                            <option value="acara_kantor">Acara Kantor</option>
                            <option value="acara_komunitas">Acara Komunitas</option>
                            <option value="pernikahan">Pernikahan / Tunangan</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    <!-- Know From -->
                    <div class="form-group">
                        <label for="know_from">Mengetahui KOI Teppanyaki Dari</label>
                        <select class="form-control bg-light text-dark custom-select-no-arrow rounded-10" name="know_from" id="know_from" style="height: 48px; padding-left: 1rem; padding-right: 2.5rem;">
                            <option selected disabled>Mengetahui KOI Teppanyaki Dari</option>
                            <option value="outlet">Mall / Outlet</option>
                            <option value="instagram">Instagram</option>
                            <option value="tiktok">Tiktok</option>
                            <option value="facebook">Facebook</option>
                            <option value="website">Google / Website</option>
                            <option value="teman">Teman</option>
                            <option value="pernah_order">Pernah order sebelumnya</option>
                            <option value="referral">Referal</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    <!-- Remarks -->
                    <div class="form-group">
                        <label for="remarks">Catatan</label>
                        <textarea class="form-control bg-light p-4 rounded-10" name="remarks" id="remarks" placeholder="Masukkan Catatan Tambahan Jika Ada (contoh: Acara di Lantai 3)"></textarea>
                    </div>

                    <!-- Note Section -->
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="mr-3 text-primary font-weight-bold">NOTE</h2>
                        <p>20 - 60 PAX (Waktu Service di 3 Jam) 61 - 100+ PAX (Waktu Service di 4 Jam) TO BOX Rp.2000/Box (Harap Kabari Jika Perlu)</p>
                    </div>

                    <!-- Disclaimer -->
                    <p class="text-center"> <span class="text-primary font-weight-bold text-md">DISCLAIMER : </span>Form ini bukan konfirmasi pemesanan. Pembayaran dan konfirmasi akan dilakukan melalui Whatsapp. </p>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mr-3">Tombol ‘Submit’ Tidak Aktif? Harap Lengkapi Data Yang Bertanda</p>
                        <button type="submit" class="btn w-100 bg-gray box-red-shadow shadow rounded-8 mt-2 py-2">Submit</button>
                    </div>

                </div>
            </form>

        </section>






    </main>

    <script>
        $(document).ready(function() {
            $('#tanggal').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                autoUpdateInput: false,
                locale: {
                    format: 'DD/MM/YYYY',
                    cancelLabel: 'Batal',
                    applyLabel: 'Pilih'
                }
            });

            $('#tanggal').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('DD/MM/YYYY'));
            });

            $('#tanggal').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
            });

        })
    </script>

</body>

</html>