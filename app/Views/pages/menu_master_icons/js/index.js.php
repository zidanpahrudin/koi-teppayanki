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
                "url": "<?= base_url('master/menu_master_icons/read') ?>", // API endpoint untuk mendapatkan data menu master icons
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
                    "data": "menu_name" // Menu Name from the joined table
                },
                {
                    "data": "menu_icon_name"
                },
                {
                    "data": "menu_icon_url"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editMenuMasterIcon('${row.menu_icon_id}')">Edit</button> 
                            <button class="btn btn-sm btn-danger" onclick="deleteMenuMasterIcon('${row.menu_icon_id}')">Delete</button>`;
                    }
                }
            ]
        });

        // Function to open modal for adding new menu master icon
        $('#openModalButton').click(function() {
            $('#modal-default').modal('show');
        });

        // Submit form for create/update menu master icon
        $('#menuMasterIconForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            let url = $('#id').val() ? "<?= base_url('master/menu_master_icons/update/') ?>" + $('#id').val() : "<?= base_url('master/menu_master_icons/store') ?>";

            // Disable submit button to prevent multiple clicks
            $('#menuMasterIconForm button[type="submit"]').attr('disabled', true);

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
                        $('#menuMasterIconForm')[0].reset(); // Reset form
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
                    $('#menuMasterIconForm button[type="submit"]').attr('disabled', false);
                }
            });
        });
    });

    // Function to edit menu master icon
    function editMenuMasterIcon(id) {
        $.ajax({
            url: "<?= base_url('master/menu_master_icons/read/') ?>" + id, // Get menu master icon details
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-default').modal('show'); // Show modal
                    $('#modal-title').html('Edit Menu Master Icon'); // Set modal title
                    $('#menuMasterIconForm').attr('action', "<?= base_url('master/menu_master_icons/update/') ?>" + id);
                    $('#id').val(response.data.menu_icon_id);
                    $('#menu_id').val(response.data.menu_id);
                    $('#menu_icon_name').val(response.data.menu_icon_name);
                    $('#menu_icon_url').val(response.data.menu_icon_url);
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

    // Function to delete menu master icon
    function deleteMenuMasterIcon(id) {
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
                    url: "<?= base_url('master/menu_master_icons/delete/') ?>" + id, // Delete menu master icon
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