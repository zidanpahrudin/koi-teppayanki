<script>
    $(document).ready(function() {
        // Initialize DataTable
        if ($.fn.dataTable.isDataTable('#dataTable')) {
            $('#dataTable').DataTable().clear().destroy();
        }

        $('#dataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('master/menu_items_in_group/read') ?>", // Endpoint untuk membaca data menu items in group
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
                    "data": "menu_group_name"
                },
                {
                    "data": "menu_name"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editMenuItemInGroup('${row.item_id}')">Edit</button> 
                            <button class="btn btn-sm btn-danger" onclick="deleteMenuItemInGroup('${row.item_id}')">Delete</button>`;
                    }
                }
            ]
        });

        // Function to open modal for adding new menu item to group
        $('#openModalButton').click(function() {
            $('#modal-default').modal('show');
        });

        // Submit form for create/update menu item in group
        $('#menuItemInGroupForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            let url = $('#id').val() ? "<?= base_url('master/menu_items_in_group/update/') ?>" + $('#id').val() : "<?= base_url('master/menu_items_in_group/store') ?>";

            // Disable submit button to prevent multiple clicks
            $('#menuItemInGroupForm button[type="submit"]').attr('disabled', true);

            $.ajax({
                url: url,
                type: "POST",
                data: $(this).serialize(), // Serialize form data
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
                        $('#menuItemInGroupForm')[0].reset(); // Reset form
                        $('#modal-default').modal('hide'); // Close modal
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
                    // Enable the submit button after the request completes
                    $('#menuItemInGroupForm button[type="submit"]').attr('disabled', false);
                }
            });
        });
    });

    // Function to edit menu item in group
    function editMenuItemInGroup(id) {
        $.ajax({
            url: "<?= base_url('master/menu_items_in_group/read/') ?>" + id, // Get menu item details
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-default').modal('show'); // Show modal
                    $('#modal-title').html('Edit Menu Item In Group'); // Set modal title
                    $('#menuItemInGroupForm').attr('action', "<?= base_url('master/menu_items_in_group/update/') ?>" + id);
                    $('#id').val(response.data.item_id);
                    $('#menu_group_id').val(response.data.menu_group_id);
                    $('#menu_id').val(response.data.menu_id);
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

    // Function to delete menu item in group
    function deleteMenuItemInGroup(id) {
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
                    url: "<?= base_url('master/menu_items_in_group/delete/') ?>" + id, // Delete menu item in group
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
</script>