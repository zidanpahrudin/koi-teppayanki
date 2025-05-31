<script>
    // Fungsi untuk mengedit menu package
    function editMenuPackage(id) {
        $.ajax({
            url: "<?= base_url('master/menu_packages/read/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    const data = response.data;
                    const pkg = data.package;
                    const items = data.items;

                    // Tampilkan modal dan set judul
                    $('#modal-default').modal('show');
                    $('#modal-title').html('Edit Menu Package');
                    $('#menuPackageForm').attr('action', "<?= base_url('master/menu_packages/update/') ?>" + id);

                    // Isi data package ke form
                    $('#id').val(pkg.package_id);
                    $('#menu_id').val(pkg.menu_id);
                    $('#package_name').val(pkg.package_name);
                    $('#min_qty').val(pkg.min_qty);
                    $('#max_qty').val(pkg.max_qty);
                    $('#price').val(pkg.price);
                    $('#notes').val(pkg.notes);

                    // Centang checkbox jika nilainya 1
                    $('#flag_separate_print_package').prop('checked', pkg.flag_separate_print_package === "1");
                    $('#flag_separate_tax_calculation').prop('checked', pkg.flag_separate_tax_calculation === "1");

                    // Isi item_ids multiselect
                    const selectedItemIds = items.map(item => item.item_id);
                    $('#item_ids').val(selectedItemIds).trigger('change'); // untuk plugin select2 jika dipakai

                    // Opsional: preview gambar jika ingin tampilkan
                    // $('#menu_image_preview').attr('src', pkg.menu_image); // Tambahkan <img id="menu_image_preview"> di HTML jika perlu

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
                    "data": "price"
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