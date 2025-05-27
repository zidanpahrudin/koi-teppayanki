<script>
    function editMenu(id) {
        $.ajax({
            url: "<?= base_url('/master/menu_master/read/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-default').modal('show');
                    $('#modal-title').html('Edit Menu');
                    $('#menuForm').attr('action', "<?= base_url('/master/menu_master/update/') ?>" + id);

                    // Isi field menu
                    $('#id').val(response.data.menu_id);
                    $('#menu_code').val(response.data.menu_code);
                    $('#menu_name').val(response.data.menu_name);
                    $('#price').val(response.data.price);
                    $('#description').val(response.data.description);

                    // Ambil item_id dari response dan set ke select2
                    var selectedItemIds = response.data.items.map(function(item) {
                        return item.item_id;
                    });

                    $('#item_ids').val(selectedItemIds).trigger('change'); // Update Select2

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


    function deleteMenu(id) {
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
                    url: "<?= base_url('/master/menu_master/delete/') ?>" + id,
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

        // $('#item_ids').select2({
        //     placeholder: "Select items", // Optional placeholder
        //     allowClear: true, // Allow clearing of selection
        //     width: '100%' // Make the select2 element take full width
        // });

        const itemSelect = $('#item_ids');
        const container = $('#item-qty-container');

        itemSelect.select2({
            placeholder: "Select items",
            allowClear: true,
            width: '100%'
        });

        // Tambah qty input saat item dipilih
        itemSelect.on('select2:select', function(e) {
            const itemId = e.params.data.id;
            const itemName = e.params.data.text;

            // Cegah duplikat
            if ($('#qty_' + itemId).length === 0) {
                const inputHtml = `
                <div class="form-group" id="qty_group_${itemId}">
                    <label for="qty_${itemId}">Qty for ${itemName}</label>
                    <input type="number" class="form-control" name="qty[${itemId}]" id="qty_${itemId}" value="1" min="1" placeholder="Enter qty">
                </div>
            `;
                container.append(inputHtml);
            }
        });

        // Hapus qty input saat item dihapus
        itemSelect.on('select2:unselect', function(e) {
            const itemId = e.params.data.id;
            $('#qty_group_' + itemId).remove();
        });


    });


    $('#dataTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?= base_url('/master/menu_master/read') ?>",
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
                "data": "menu_code"
            },
            {
                "data": "menu_name"
            },
            {
                "data": "price"
            },
            {
                "data": null,
                "render": function(data, type, row) {
                    return `<button class="btn btn-sm btn-primary" onclick="editMenu('${row.menu_id}')">Edit</button> 
                            <button class="btn btn-sm btn-danger" onclick="deleteMenu('${row.menu_id}')">Delete</button>
                            `;
                }
            }
        ]
    });



    // Submit form for create/update
    $('#menuForm').submit(function(e) {
        e.preventDefault();
        let url = $('#id').val() ? "<?= base_url('/master/menu_master/update/') ?>" + $('#id').val() : "<?= base_url('/master/menu_master/store') ?>";

        let formData = new FormData(this); // Create FormData object
        // jika ada id hapus id
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
                    $('#menuForm')[0].reset(); // Reset form
                    $('#modal-default').modal('hide'); // Close modal
                    $('#dataTable').DataTable().ajax.reload(); // Reload DataTable
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
</script>