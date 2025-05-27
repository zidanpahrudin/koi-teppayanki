<script>
    function editMenuExtra(id) {
        $.ajax({
            url: "<?= base_url('master/menu_extras/read/') ?>" + id, // Menambahkan master/ sebelum path API
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-default').modal('show'); // Tampilkan modal
                    $('#modal-title').html('Edit Menu Extra'); // Set judul modal
                    $('#menuExtraForm').attr('action', "<?= base_url('master/menu_extras/update/') ?>" + id);
                    $('#id').val(response.data.menu_extra_id);
                    $('#menu_id').val(response.data.menu_id);
                    $('#extra_name').val(response.data.extra_name);
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

    function deleteMenuExtra(id) {
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
                    url: "<?= base_url('master/menu_extras/delete/') ?>" + id, // Menambahkan master/ sebelum path API
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
        if ($.fn.dataTable.isDataTable('#dataTable')) {
            $('#dataTable').DataTable().clear().destroy();
        }

        $('#dataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('master/menu_extras/read') ?>",
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
                        return meta.row + 1;
                    }
                },
                {
                    "data": "extra_name"
                },
                {
                    "data": "price"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editMenuExtra('${row.menu_extra_id}')">Edit</button> 
                    <button class="btn btn-sm btn-danger" onclick="deleteMenuExtra('${row.menu_extra_id}')">Delete</button>`;
                    }
                }
            ]
        });


        $('#openModalButton').click(function() {
            $('#modal-default').modal('show');
        });

        // Submit form for create/update
        $('#menuExtraForm').submit(function(e) {
            e.preventDefault(); // Mencegah form untuk submit secara default

            let url = $('#id').val() ? "<?= base_url('master/menu_extras/update/') ?>" + $('#id').val() : "<?= base_url('master/menu_extras/store') ?>";

            // Menambahkan spinner atau mematikan tombol submit untuk mencegah submit lagi
            $('#menuExtraForm button[type="submit"]').attr('disabled', true);

            $.ajax({
                url: url,
                type: "POST",
                data: $(this).serialize(), // Serialize form untuk kirim data
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000
                        });
                        $('#menuExtraForm')[0].reset(); // Reset form
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
                    $('#menuExtraForm button[type="submit"]').attr('disabled', false);
                }
            });
        });
    });
</script>