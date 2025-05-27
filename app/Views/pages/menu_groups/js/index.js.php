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
                "url": "<?= base_url('master/menu_groups/read') ?>",
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
                    "data": "min_qty"
                },
                {
                    "data": "max_qty"
                },
                {
                    "data": "notes"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editMenuGroup('${row.menu_group_id}')">Edit</button> 
                            <button class="btn btn-sm btn-danger" onclick="deleteMenuGroup('${row.menu_group_id}')">Delete</button>`;
                    }
                }
            ]
        });

        // Function to open modal for adding new menu group
        $('#openModalButton').click(function() {
            $('#modal-default').modal('show');
        });

        // Submit form for create/update menu group
        $('#menuGroupForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            let url = $('#id').val() ? "<?= base_url('master/menu_groups/update/') ?>" + $('#id').val() : "<?= base_url('master/menu_groups/store') ?>";

            // Disable submit button to prevent multiple clicks
            $('#menuGroupForm button[type="submit"]').attr('disabled', true);

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
                        $('#menuGroupForm')[0].reset(); // Reset form
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
                    $('#menuGroupForm button[type="submit"]').attr('disabled', false);
                }
            });
        });
    });

    // Function to edit menu group
    function editMenuGroup(id) {
        $.ajax({
            url: "<?= base_url('master/menu_groups/read/') ?>" + id, // Get menu group details
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-default').modal('show'); // Show modal
                    $('#modal-title').html('Edit Menu Group'); // Set modal title
                    $('#menuGroupForm').attr('action', "<?= base_url('master/menu_groups/update/') ?>" + id);
                    $('#id').val(response.data.menu_group_id);
                    $('#menu_group_name').val(response.data.menu_group_name);
                    $('#min_qty').val(response.data.min_qty);
                    $('#max_qty').val(response.data.max_qty);
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

    // Function to delete menu group
    function deleteMenuGroup(id) {
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
                    url: "<?= base_url('master/menu_groups/delete/') ?>" + id, // Delete menu group
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