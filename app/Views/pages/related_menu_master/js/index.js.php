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
                "url": "<?= base_url('master/related_menu_master/read') ?>", // API endpoint untuk mendapatkan data related menu master
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
                    "data": "related_menu_name" // Related Menu Name from the joined table
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editRelatedMenuMaster('${row.related_menu_id}')">Edit</button> 
                            <button class="btn btn-sm btn-danger" onclick="deleteRelatedMenuMaster('${row.related_menu_id}')">Delete</button>`;
                    }
                }
            ]
        });

        // Function to open modal for adding new related menu
        $('#openModalButton').click(function() {
            $('#modal-default').modal('show');
        });

        // Submit form for create/update related menu master
        $('#relatedMenuMasterForm').submit(function(e) {
            e.preventDefault(); // Prevent default form submission

            let url = $('#id').val() ? "<?= base_url('master/related_menu_master/update/') ?>" + $('#id').val() : "<?= base_url('master/related_menu_master/store') ?>";

            // Disable submit button to prevent multiple clicks
            $('#relatedMenuMasterForm button[type="submit"]').attr('disabled', true);

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
                        $('#relatedMenuMasterForm')[0].reset(); // Reset form
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
                    $('#relatedMenuMasterForm button[type="submit"]').attr('disabled', false);
                }
            });
        });
    });

    // Function to edit related menu master
    function editRelatedMenuMaster(id) {
        $.ajax({
            url: "<?= base_url('master/related_menu_master/read/') ?>" + id, // Get related menu master details
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-default').modal('show'); // Show modal
                    $('#modal-title').html('Edit Related Menu Master'); // Set modal title
                    $('#relatedMenuMasterForm').attr('action', "<?= base_url('master/related_menu_master/update/') ?>" + id);
                    $('#id').val(response.data.related_menu_id);
                    $('#menu_id').val(response.data.menu_id);
                    $('#related_menu_id').val(response.data.related_menu_id);
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

    // Function to delete related menu master
    function deleteRelatedMenuMaster(id) {
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
                    url: "<?= base_url('master/related_menu_master/delete/') ?>" + id, // Delete related menu master
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