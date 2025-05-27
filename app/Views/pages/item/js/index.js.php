<script>
    function editItem(id) {
        $.ajax({
            url: "<?= base_url('/master/item/read/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-item').modal('show');
                    $('#modal-title').html('Edit Item');
                    $('#itemForm').attr('action', "<?= base_url('/master/item/update/') ?>" + response.data.id);

                    // Set field values
                    $('#item_id').val(response.data.id);
                    $('#item_name').val(response.data.item_name);
                    $('#item_code').val(response.data.item_code);
                    $('#unit_id').val(response.data.unit_id);
                    $('#notes').val(response.data.notes); // opsional, jika ada kolom notes
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

    function deleteItem(id) {
        Swal.fire({
            title: 'Yakin ingin menghapus item ini?',
            text: "Data tidak bisa dikembalikan setelah dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('/master/item/delete/') ?>" + id,
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
                            $('#itemTable').DataTable().ajax.reload();
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

        let itemTable = $('#itemTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "<?= base_url('/master/item/read') ?>",
                type: "GET",
                dataSrc: function(json) {
                    return json.data || [];
                }
            },
            columns: [{
                    data: null,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1; // Accurate numbering
                    }
                },
                {
                    data: "item_name"
                },
                {
                    data: "item_code"
                },
                {
                    data: "unit_name"
                },
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                           <button class="btn btn-sm btn-primary" onclick="editItem('${row.item_id}')">Edit</button>
                           <button class="btn btn-sm btn-danger" onclick="deleteItem('${row.item_id}')">Delete</button>
                        `;
                    }
                }
            ],
            order: [] // Optional: disable default sorting
        });

        // Form submit handler
        $('#itemForm').submit(function(e) {
            e.preventDefault();

            let id = $('#item_id').val();
            let url = id ?
                "<?= base_url('/master/item/update/') ?>" + id :
                "<?= base_url('/master/item/create') ?>";

            $.ajax({
                url: url,
                type: "POST",
                data: $(this).serialize(),
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

                        $('#itemForm')[0].reset();
                        $('#modal-item').modal('hide');
                        itemTable.ajax.reload();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            text: Object.values(response.errors).join("\n"),
                        });
                    }
                }
            });
        });
    });
</script>