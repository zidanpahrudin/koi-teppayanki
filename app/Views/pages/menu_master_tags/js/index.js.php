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
                "url": "<?= base_url('master/menu_master_tags/read') ?>", // API endpoint untuk mendapatkan data menu master tags
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
                    "data": "tag_name"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editMenuMasterTag('${row.menu_tag_id}')">Edit</button> 
                            <button class="btn btn-sm btn-danger" onclick="deleteMenuMasterTag('${row.menu_tag_id}')">Delete</button>`;
                    }
                }
            ]
        });

        // Function to open modal for adding new menu master tag
        $('#openModalButton').click(function() {
            $('#modal-default').modal('show');
        });

        // Submit form for create/update menu master tag
        $('#menuMasterTagForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            let url = $('#id').val() ? "<?= base_url('master/menu_master_tags/update/') ?>" + $('#id').val() : "<?= base_url('master/menu_master_tags/store') ?>";

            // Disable submit button to prevent multiple clicks
            $('#menuMasterTagForm button[type="submit"]').attr('disabled', true);

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
                        $('#menuMasterTagForm')[0].reset(); // Reset form
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
                    $('#menuMasterTagForm button[type="submit"]').attr('disabled', false);
                }
            });
        });
    });

    // Function to edit menu master tag
    function editMenuMasterTag(id) {
        $.ajax({
            url: "<?= base_url('master/menu_master_tags/read/') ?>" + id, // Get menu master tag details
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-default').modal('show'); // Show modal
                    $('#modal-title').html('Edit Menu Master Tag'); // Set modal title
                    $('#menuMasterTagForm').attr('action', "<?= base_url('master/menu_master_tags/update/') ?>" + id);
                    $('#id').val(response.data.menu_tag_id);
                    $('#menu_id').val(response.data.menu_id);
                    $('#tag_name').val(response.data.tag_name);
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

    // Function to delete menu master tag
    function deleteMenuMasterTag(id) {
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
                    url: "<?= base_url('master/menu_master_tags/delete/') ?>" + id, // Delete menu master tag
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