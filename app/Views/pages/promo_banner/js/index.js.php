<script>
    function editPromoBanner(id) {
        $.ajax({
            url: "<?= base_url('/master/promo_banner/read/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-banner').modal('show');
                    $('#modal-title').html('Edit Promo Banner');
                    $('#promoBannerForm').attr('action', "<?= base_url('/master/promo_banner/update/') ?>" + response.data.id);

                    $('#id').val(response.data.id);
                    $('#title').val(response.data.title);
                    $('#image_url_preview').attr('src', response.data.image_url); // Preview image
                    $('#orientation').val(response.data.orientation);
                    $('#redirect_url').val(response.data.redirect_url);
                    $('#display_position').val(response.data.display_position);
                    $('#sort_order').val(response.data.sort_order);
                    $('#is_active').prop('checked', response.data.is_active == 1);
                    $('#notes').val(response.data.notes);
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

    function deletePromoBanner(id) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data tidak bisa dikembalikan setelah dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('/master/promo_banner/delete/') ?>" + id,
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil!',
                                text: response.message,
                                showConfirmButton: false,
                                timer: 2000
                            });
                            $('#dataTable').DataTable().ajax.reload();
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
        $('#dataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('/master/promo_banner/read') ?>",
                "type": "GET",
                "dataSrc": function(json) {
                    // Ensure the data is correctly formatted
                    if (!json.data) {
                        json.data = [];
                    }
                    return json.data;
                }
            },
            "columns": [{
                    "data": null,
                    "render": function(data, type, row, meta) {
                        return meta.row + 1; // Row index for "No" column
                    }
                },
                {
                    "data": "title" // Column 2: Title
                },
                {
                    "data": "display_position" // Column 3: Position
                },
                {
                    "data": "orientation" // Column 4: Orientation
                },
                {
                    "data": "image_url",
                    "render": function(data) {
                        return `<img src="${data}" width="100" />`; // Render image for Column 5: Image
                    }
                },
                {
                    "data": "redirect_url", // Column 6: Redirect URL
                    "render": function(data) {
                        return `<a href="${data}" target="_blank">${data}</a>`; // Add clickable link for redirect URL
                    }
                },
                {
                    "data": "is_active",
                    "render": function(data) {
                        return data == 1 ? 'Active' : 'Inactive'; // Column 7: Status (Active/Inactive)
                    }
                },
                {
                    "data": "sort_order" // Column 8: Order
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `
                    <button class="btn btn-sm btn-primary" onclick="editPromoBanner('${row.id}')">Edit</button>
                    <button class="btn btn-sm btn-danger" onclick="deletePromoBanner('${row.id}')">Delete</button>
                `; // Column 9: Action (Edit/Delete)
                    }
                }
            ]
        });


        $('#promoBannerForm').submit(function(e) {
            e.preventDefault();
            let form = $(this)[0];
            let formData = new FormData(form);

            let id = $('#id').val();
            let url = id ? "<?= base_url('/master/promo_banner/update/') ?>" + id : "<?= base_url('/master/promo_banner/create') ?>";

            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000
                        });
                        $('#promoBannerForm')[0].reset();
                        $('#modal-banner').modal('hide');
                        $('#dataTable').DataTable().ajax.reload();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            text: Object.values(response.message).join("\n"),
                        });
                    }
                }
            });
        });
    });
</script>