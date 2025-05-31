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

    <!-- Moment -->
    <script src="<?= base_url("assets/plugins/moment/moment.min.js")  ?>"></script>

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

    <!-- slick carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



    <style>
        body {
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }
    </style>

</head>

<body>
    <header class="position-relative px-md-5"> <!-- Adjust height as needed -->
        <span class="border-line" style="position: absolute; top: 100%; width: 100%; border-top: 2px solid #E4E4E4;"></span> <!-- Border line -->
        <nav class="d-flex p-3 justify-content-between align-items-center position-relative h-100">
            <img class="img-fluid position-absolute d-md-block d-none" src="<?php echo base_url('assets/dist/img/logo_group.svg') ?>" alt="" style="top: 0; left: 50%; transform: translateX(-50%); height: 100%; object-fit: contain;">

            <div>
                <a href="<?php echo base_url(); ?>">
                    <img class="img-fluid" src="<?php echo base_url('assets/dist/img/logo-koi-teppayanki.png'); ?>" alt="logo-koi-teppayanki" style="width: 100%;">
                </a>
                <h3 class="text-gray fs-9 font-weight-normal">
                    #1 TEPPAYANKI BRAND SINCE 1997
                </h3>
            </div>

            <div class="dropdown d-flex align-items-center">
                <img class="img-fluid" src="<?php echo base_url('assets/dist/img/icons/telp.svg') ?>" alt="Icon Telp" style="width: 2rem;">
                <button class="btn dropdown-toggle border-0 px-2 py-1 text-dark d-flex align-items-center gap-1 font-weight-medium fs-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

        <section class="d-flex flex-column justify-content-center align-items-center text-center">
            <img class="img-fluid mt-4 d-block d-md-none" src="<?php echo base_url('assets/dist/img/logo_group.svg') ?>" alt="">

            <div class="d-flex justify-content-around w-100 mt-4" style="max-width: 300px;">
                <div class="step active">
                    <div class="circle">1</div>
                </div>
                <div class="step">
                    <div class="circle">2</div>
                </div>
                <div class="step">
                    <div class="circle">3</div>
                </div>
            </div>

            <div class="mt-4">
                <h1 class="font-weight-normal fs-24">
                    <strong class="d-inline-block mb-2" style="border-bottom: 2px solid black;">
                        Order Form
                    </strong>
                    <br />
                    KOI Teppanyaki Home Service
                </h1>
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




            <div class="card w-100 mx-md-9">
                <form class="p-3" id="orderForm">

                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <div class="input-group">
                            <!-- Icon kiri -->
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light border-right-0">
                                    <img src="<?php echo base_url('assets/dist/img/icons/kota.svg') ?>" alt="Icon Provinsi">
                                </span>
                            </div>

                            <!-- Select Provinsi -->
                            <select required name="provinsi" class="form-control custom-select-no-arrow bg-light border-left-0 border-right-0" id="provinsi" aria-describedby="provinsiHelp">
                                <option value="">Pilih Kota Tempat Anda Tinggal</option>
                                <?php foreach ($provinsi as $prov) : ?>
                                    <option value="<?= esc($prov['id']) ?>"><?= esc($prov['name']) ?></option>
                                <?php endforeach; ?>
                            </select>

                            <!-- Chevron kanan -->
                            <label for="provinsi" class="input-group-append mb-0">
                                <span class="input-group-text bg-light border-left-0" style="cursor: pointer;">
                                    <i class="fas fa-chevron-down text-muted"></i>
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group d-none" id="kota-group">
                        <label for="kota">Kota/Kabupaten</label>
                        <div class="input-group">
                            <!-- Icon kiri -->
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light border-right-0">
                                    <img src="<?php echo base_url('assets/dist/img/icons/kota.svg') ?>" alt="Icon Kota">
                                </span>
                            </div>

                            <!-- Select Kota -->
                            <select id="kota" name="kota" class="form-control custom-select-no-arrow bg-light border-left-0 border-right-0">
                                <option value="">Pilih Kota Tempat Anda Tinggal</option>
                            </select>

                            <!-- Chevron kanan -->
                            <label for="kota" class="input-group-append mb-0">
                                <span class="input-group-text bg-light border-left-0" style="cursor: pointer;">
                                    <i class="fas fa-chevron-down text-muted"></i>
                                </span>
                            </label>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <div class="input-group">
                            <!-- Icon kiri -->
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light border-right-0">
                                    <img src="<?php echo base_url('assets/dist/img/icons/tanggal.svg') ?>" alt="Icon Tanggal">
                                </span>
                            </div>

                            <!-- Input tanggal -->
                            <input required type="text" name="tanggal" class="form-control bg-light border-left-0 border-right-0" id="tanggal" placeholder="Pilih Tanggal">

                            <!-- Chevron kanan sebagai bagian dari label -->
                            <label for="tanggal" class="input-group-append mb-0">
                                <span class="input-group-text bg-light border-left-0" style="cursor: pointer;">
                                    <i class="fas fa-chevron-down text-muted"></i>
                                </span>
                            </label>
                        </div>
                    </div>


                    <!-- Jam Acara -->
                    <div class="form-group">
                        <label for="jam">Jam Acara</label>
                        <div class="input-group mb-3">
                            <!-- Icon jam kiri -->
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light border-right-0">
                                    <img src="<?php echo base_url('assets/dist/img/icons/jam.svg') ?>" alt="Icon Jam" style="width:16px; height:16px;">
                                </span>
                            </div>

                            <!-- Dropdown jam -->
                            <select required class="form-control bg-light border-left-0 border-right-0 custom-select-no-arrow" name="jam" id="jam">
                                <option selected disabled>Pilih Jam</option>
                                <option value="01:30">01:30</option>
                                <option value="02:00">02:00</option>
                                <option value="02:30">02:30</option>
                                <option value="03:00">03:00</option>
                                <option value="03:30">03:30</option>
                                <option value="04:00">04:00</option>
                            </select>

                            <!-- Chevron kanan, klik juga trigger select -->
                            <label for="jam" class="input-group-append mb-0">
                                <span class="input-group-text bg-light border-left-0" style="cursor: pointer;">
                                    <i class="fas fa-chevron-down text-muted"></i>
                                </span>
                            </label>
                        </div>
                    </div>



                    <!-- No Telepon -->
                    <div class="form-group">
                        <label for="no_telp">No Telepon</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-light border-right-0">
                                    +62 |
                                </span>
                            </div>
                            <input required type="tel" pattern="[0-9]{10,13}" type="text" class="form-control bg-light border-left-0" name="no_telp" id="no_telp" placeholder="Masukkan No Telepon">
                        </div>
                    </div>

                    <!-- button selanjutnya -->
                    <button type="submit" class="btn w-100 btn-custom-primary rounded-8 mt-2 py-2 font-weight-bold">Selanjutnya</button>

                </form>
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

        <section class="mt-4">
            <h3 class="fs-12 font-weight-bold clr-red text-center font-italic mb-4">ORDER AND BE A PART OF #KOIFAMILY</h3>
            <div class="slick-carousel">
                <?php
                foreach ($slider as $img) {
                    echo '<div class="carousel-image">';
                    echo '<img src="' . base_url($img['image_url']) . '" class="img-fluid rounded-8">';
                    echo '</div>';
                }
                ?>
            </div>



            <!-- banner promos -->
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

        </section>
    </main>


    <?= include('js/index.js.php') ?>



    <!-- daterangepicker -->

    <script src="<?= base_url("assets/plugins/daterangepicker/daterangepicker.js")  ?>"></script>

    <script>
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

            $('.slick-carousel').slick({
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 5,
                autoplay: true,
                autoplaySpeed: 2000,
                speed: 500,
                arrows: false,
                dots: true, // <<== tampilkan dots di bawah
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 5
                        }
                    }
                ]
            });

            // telselect
            $('#telSelect').on('change', function() {
                if (this.value) {
                    window.location.href = this.value;
                }
            });


        });
    </script>

    <script>
        // form submit add to localsotrage no ajax
        $(document).ready(function() {
            $('#orderForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                // ajax
                $.ajax({
                    url: '<?= base_url('order/save_order_header') ?>',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        // redirect to checkout page
                        window.location.href = "menu_list";
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>


</body>


</html>