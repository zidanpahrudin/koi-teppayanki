<script>
    // Fungsi untuk mengedit menu package
    function editMenuPackage(id) {
        $.ajax({
            url: "<?= base_url('master/menu_packages/read/') ?>" + id, // Menambahkan master/ sebelum path API
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-default').modal('show'); // Tampilkan modal
                    $('#modal-title').html('Edit Menu Package'); // Set judul modal
                    $('#menuPackageForm').attr('action', "<?= base_url('master/menu_packages/update/') ?>" + id); // Mengatur aksi form untuk update
                    $('#id').val(response.data.package_id);
                    $('#package_name').val(response.data.package_name);
                    $('#price').val(response.data.price);
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: response.message,
                    });
                }
            }
        });
    }

    // Fungsi untuk menghapus menu package
    function deleteMenuPackage(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('master/menu_packages/delete/') ?>" + id, // Menambahkan master/ sebelum path API
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 2000
                            });
                            $('#dataTable').DataTable().ajax.reload(); // Reload DataTable
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops!',
                                text: response.message,
                            });
                        }
                    }
                });
            }
        });
    }

    $(document).ready(function() {

        $(document).ready(function() {
            // Apply Select2 to the multi-select element
            $('#item_ids').select2({
                placeholder: "Select items", // Optional placeholder
                allowClear: true, // Allow clearing of selection
                width: '100%' // Make the select2 element take full width
            });
        });

        // Cek apakah DataTable sudah diinisialisasi, jika ya, destroy dulu dan reinitialize
        if ($.fn.dataTable.isDataTable('#dataTable')) {
            $('#dataTable').DataTable().clear().destroy();
        }

        // Inisialisasi DataTable untuk menu packages
        $('#dataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('master/menu_packages/read') ?>", // Menambahkan master/ sebelum path API
                "type": "GET",
                "dataSrc": function(json) {
                    if (!json.data) {
                        json.data = [];
                    }
                    return json.data;
                }
            },
            "columns": [{
                    "data": null,
                    "render": function(data, type, row, meta) {
                        return meta.row + 1; // Auto-incrementing No
                    }
                },
                {
                    "data": "package_name"
                },
                {
                    "data": "min_qty"
                },
                {
                    "data": "max_qty"
                },
                {
                    "data": "notes"
                },
                {
                    "data": "flag_separate_print_package",
                    "render": function(data) {
                        return data ? 'Yes' : 'No';
                    }
                },
                {
                    "data": "flag_separate_tax_calculation",
                    "render": function(data) {
                        return data ? 'Yes' : 'No';
                    }
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editMenuPackage('${row.package_id}')">Edit</button> 
                                <button class="btn btn-sm btn-danger" onclick="deleteMenuPackage('${row.package_id}')">Delete</button>`;
                    }
                }
            ]
        });

        // Event handler untuk menampilkan modal form (create)
        $('#openModalButton').click(function() {
            $('#modal-default').modal('show');
        });

        // Submit form untuk create/update menu package
        $('#menuPackageForm').submit(function(e) {
            e.preventDefault(); // Cegah form submit secara default

            let url = $('#id').val() ? "<?= base_url('master/menu_packages/update/') ?>" + $('#id').val() : "<?= base_url('master/menu_packages/store') ?>";

            // Menambahkan spinner atau menonaktifkan tombol submit untuk mencegah submit dua kali
            $('#menuPackageForm button[type="submit"]').attr('disabled', true);
            let formData = new FormData(this); // Create FormData object
            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000
                        });
                        $('#menuPackageForm')[0].reset(); // Reset form
                        $('#modal-default').modal('hide'); // Tutup modal
                        $('#dataTable').DataTable().ajax.reload(); // Reload DataTable
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            text: Object.values(response.errors).join("\n"),
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Terjadi kesalahan!',
                    });
                },
                complete: function() {
                    // Aktifkan kembali tombol submit setelah request selesai
                    $('#menuPackageForm button[type="submit"]').attr('disabled', false);
                }
            });
        });
    });
</script>