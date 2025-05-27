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
        <section class="d-flex flex-column justify-content-center align-items-center text-center">
            <img class="img-fluid mt-4" src="<?php echo base_url('assets/dist/img/logo_group.svg') ?>" alt="">

            <div class="d-flex justify-content-around w-100 mt-4" style="max-width: 300px;">
                <div class="step">
                    <img src="<?php echo base_url('assets/dist/img/icons/done.svg') ?>" />

                </div>
                <div class="step active">
                    <div class="circle">2</div>
                </div>
                <div class="step">
                    <div class="circle">3</div>
                </div>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center align-items-center">
                    <h1 class="font-weight-normal fs-24">
                        <a class="text-decoration-none text-gray mr-3" href="<?php echo base_url(); ?>">
                            <img src="<?php echo base_url('assets/dist/img/icons/chevron-left.svg') ?>" />
                        </a>

                        <strong class="d-inline-block mb-2" style="border-bottom: 2px solid black;">
                            Menu List
                        </strong>

                        <br />
                        KOI Teppanyaki Home Service
                    </h1>
                </div>
            </div>

        </section>

        <section class="container py-4">
            <div class="menu-scroll-wrapper">
                <?php
                $chunks = array_chunk($menu_list, 2);
                foreach ($chunks as $pair) : ?>
                    <div class="menu-column">
                        <?php foreach ($pair as $menu) :
                            $modalId = 'modal_' . $menu['package_id']; ?>
                            <div class="card">
                                <img class="img-fluid" src="<?php echo $menu['menu_image'] ?>" alt="Menu Image" />
                                <button
                                    id="<?php echo $menu['package_id'] ?>"
                                    class="btn btn-primary mt-3 paket"
                                    style="width: 100%;"
                                    data-toggle="modal"
                                    data-target="#<?php echo $modalId; ?>">
                                    Pilih Paket
                                </button>
                            </div>

                            <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modalId; ?>Label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="<?php echo $modalId; ?>Label"><?php echo $menu['package_name']; ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="order-form-<?php echo $menu['package_id']; ?>">
                                                <!-- form content here -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
                <div class="custom-scrollbar">
                    <div class="thumb"></div>
                </div>
            </div>
        </section>



        <div class="container">
            <div class="card d-flex flex-row align-items-center bg-secondary p-3" style="border-radius: 15px 15px 0 0;">
                <!-- Left Side (Image and Text) -->
                <div class=" d-flex align-items-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 9.75012H20.2153C20.0269 7.70157 19.0799 5.79733 17.56 4.41089C16.0402 3.02445 14.0572 2.25586 12 2.25586C9.94279 2.25586 7.95981 3.02445 6.43998 4.41089C4.92015 5.79733 3.97314 7.70157 3.78469 9.75012H3C2.80109 9.75012 2.61032 9.82914 2.46967 9.96979C2.32902 10.1104 2.25 10.3012 2.25 10.5001C2.2533 12.2837 2.74415 14.0325 3.66948 15.5573C4.59481 17.0821 5.9194 18.3249 7.5 19.1514V19.5001C7.5 19.8979 7.65804 20.2795 7.93934 20.5608C8.22064 20.8421 8.60218 21.0001 9 21.0001H15C15.3978 21.0001 15.7794 20.8421 16.0607 20.5608C16.342 20.2795 16.5 19.8979 16.5 19.5001V19.1514C18.0806 18.3249 19.4052 17.0821 20.3305 15.5573C21.2558 14.0325 21.7467 12.2837 21.75 10.5001C21.75 10.3012 21.671 10.1104 21.5303 9.96979C21.3897 9.82914 21.1989 9.75012 21 9.75012ZM18.7069 9.75012H13.8862C14.7955 8.38595 16.1712 7.40029 17.7553 6.97793C18.2733 7.82042 18.5982 8.76714 18.7069 9.75012ZM16.2638 5.27168C16.4356 5.41231 16.6003 5.56075 16.7578 5.717C14.7613 6.41933 13.1114 7.86275 12.15 9.74825H9.38437C9.85313 8.43427 10.7161 7.29706 11.8555 6.49198C12.9948 5.68689 14.3549 5.25319 15.75 5.25012C15.9216 5.25012 16.0931 5.25856 16.2638 5.27168ZM12 3.75012C12.6018 3.75052 13.2009 3.83155 13.7812 3.99106C12.3679 4.34166 11.072 5.05863 10.024 6.0697C8.97606 7.08078 8.21316 8.35023 7.81219 9.75012H5.29312C5.47917 8.10093 6.26562 6.57787 7.50254 5.47132C8.73946 4.36476 10.3403 3.75209 12 3.75012ZM15.4369 18.0001C15.306 18.0602 15.1953 18.1567 15.1178 18.2781C15.0404 18.3994 14.9994 18.5405 15 18.6845V19.5001H9V18.6845C9.00055 18.5405 8.95965 18.3994 8.88218 18.2781C8.80471 18.1567 8.69395 18.0602 8.56312 18.0001C7.24417 17.3932 6.10807 16.45 5.26885 15.2652C4.42963 14.0804 3.91681 12.6957 3.78188 11.2501H20.2153C20.0806 12.6954 19.5682 14.0799 18.7295 15.2647C17.8908 16.4494 16.7553 17.3928 15.4369 18.0001Z" fill="white" />
                    </svg>
                    <div class="ml-3">
                        <h5 class="mb-0" id="cart-count"> Paket Pesanan</h5>
                        <p class="mb-0 text-sm">Pesanan anda dalam keranjang</p>
                    </div>
                </div>

                <!-- Right Side (Price and Arrow) -->

                <div class="ml-auto d-flex align-items-center">
                    <h5 class="mr-3 mb-0" id="total">Rp. 0</h5>
                    <a href="<?php echo base_url('cart/get_cart') ?>" class="btn">
                        <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 0.5L7 6.5L1 12.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>




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
        $(document).ready(function() {
            $('.paket').on('click', function() {
                var packageId = $(this).attr('id');
                var $modal = $('#modal_' + packageId); // modal ID
                var $form = $modal.find('#order-form-' + packageId); // form ID inside modal

                $form.html(''); // Clear form before populating

                $.ajax({
                    url: '<?php echo base_url('menu_master/get-detail-package/') ?>' + packageId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(JSON.stringify(data));
                        if (data.status === 'success') {
                            let htmlForm = '';

                            // Pisahkan group main course dan selainnya
                            const mainCourseGroup = data.data.find(group => group.menu_group_name === 'Main Course');
                            const otherGroups = data.data.filter(group => group.menu_group_name !== 'Main Course');

                            // Tampilkan dulu Main Course jika ada
                            if (mainCourseGroup) {
                                htmlForm += `<div class="form-group">`;
                                htmlForm += `<label><strong>${mainCourseGroup.menu_group_name}</strong></label>`;
                                htmlForm += `<input type="hidden" name="package_id" value="${mainCourseGroup.package_id}">`;

                                const item = mainCourseGroup.items[0];
                                htmlForm += `
                                    <input type="hidden" name="main_course_id" value="${item.menu_id}">
                                    <div class="form-control d-flex justify-content-between align-items-center" style="background-color:#f1f1f1;">
                                        <span>${item.menu_name}</span>
                                    </div>
                                `;
                                htmlForm += `</div>`;
                            }

                            // Tampilkan grup lainnya
                            otherGroups.forEach(group => {
                                htmlForm += `<div class="form-group">`;
                                htmlForm += `<label><strong>${group.menu_group_name}</strong></label>`;
                                htmlForm += `<input type="hidden" name="package_id" value="${group.package_id}">`;

                                let count = group.items.length;
                                for (let i = 1; i <= count; i++) {
                                    htmlForm += `<select class="form-control mb-2" name="${group.menu_group_name.toLowerCase().replace(/\s+/g, '_')}_${i}">`;
                                    htmlForm += `<option value="">Pilih ${group.menu_group_name} ${count > 1 ? i : ''}</option>`;
                                    group.items.forEach(item => {
                                        htmlForm += `<option value="${item.menu_id}">${item.menu_name}</option>`;
                                    });
                                    htmlForm += `</select>`;
                                }

                                htmlForm += `</div>`;
                            });

                            // Tambahkan quantity dan tombol submit
                            htmlForm += `
                                <div class="form-group text-center">
                                    <div class="d-flex justify-content-between align-items-center border rounded p-2" style="background-color: #f1f1f1;">
                                        <button type="button" class="btn btn-sm btn-outline-primary rounded-circle" id="decreaseQty"><i class="fa fa-minus"></i></button>
                                        <span id="orderQty" class="mx-3">1</span>
                                        <button type="button" class="btn btn-sm btn-outline-primary rounded-circle" id="increaseQty"><i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary btn-block rounded submit-btn">Simpan</button>
                                </div>
                         `;

                            $form.html(htmlForm); // Put content into the right form
                        }
                    }
                });
            });


            $(document).on('click', '.submit-btn', function(e) {
                e.preventDefault(); // Mencegah default action form

                // Ambil modal dan form tempat tombol diklik
                var $modal = $(this).closest('.modal');
                var $form = $modal.find('form');

                // Ambil data dari form
                var formData = $form.serializeArray();

                // Ambil package_id dari form data
                var packageIdItem = formData.find(item => item.name === 'package_id');
                var packageId = packageIdItem ? packageIdItem.value : null;

                // Ambil qty dari span dalam modal
                var orderQty = $modal.find('#orderQty').text().trim();

                if (!packageId) {
                    console.error("Package ID tidak ditemukan di form.");
                    return;
                }

                $.ajax({
                    url: '<?php echo base_url('cart/add_to_cart') ?>',
                    type: 'POST',
                    data: {
                        package_id: packageId,
                        qty: orderQty,
                        // Kamu bisa tambahkan data tambahan dari formData jika perlu
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if (data.status === 'success') {
                            // Update tampilan keranjang
                            $('#cart-count').text(data.count + ' Paket Pesanan');
                            $('#total').text('Rp. ' + data.total);
                            $modal.modal('hide'); // Tutup modal aktif
                        } else {
                            alert('Gagal menambahkan ke keranjang: ' + data.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error saat submit:", error);
                    }
                });
            });



        });
    </script>
</body>

</html>