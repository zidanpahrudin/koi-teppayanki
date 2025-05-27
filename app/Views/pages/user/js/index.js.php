<!-- create datatable call in api -->
<script>
    $('#modal-default').on('hidden.bs.modal', function() {
        $('#userForm')[0].reset();
        $('#id').val('');
        $('#role_id').val('');
        $('#modal-title').html('Add User');
    });
    function editUser(id) {
        $.ajax({
            url: "<?= base_url('/master/user/read/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-default').modal('show'); // Tampilkan modal
                    $('#modal-title').html('Edit User'); // Set judul modal
                    $('#userForm').attr('action', "<?= base_url('/master/user/update/') ?>");
                    $('#id').val(response.data.id);
                    $('#name').val(response.data.name);
                    $('#email').val(response.data.email);
                    // jadikan selected
                    $('#role_id option[value="' + response.data.role_id + '"]').attr('selected','selected');
                    $('#role_id').val(response.data.role_id);
                    
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

    function deleteUser(id) {
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
                    url: "<?= base_url('/master/user/delete/') ?>" + id,
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon:'success',
                                title: 'Berhasil!',
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
        })
    }

    $(document).ready(function() {

        $('#userForm').submit(function(e) {
            e.preventDefault(); // Mencegah reload halaman
            // kalau ada id di edit, maka update, jika tidak, maka create
            if ($('#id').val()) {
                url = "<?= base_url('/master/user/update/') ?>" + $('#id').val();
            } else {
                url = "<?= base_url('/master/user/create') ?>";
            }

            $.ajax({
                url: url,
                type: "POST",
                data: $(this).serialize(),
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

                        $('#userForm')[0].reset(); // Reset form
                        $('#modal-default').modal('hide'); // Tutup modal
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


        $('#dataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('/master/user/read') ?>",
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
                    "data": "name"
                },
                {
                    "data": "email"
                },
                {
                    "data": "role_name"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editUser('${row.id}')">Edit</button> 
                            <button class="btn btn-sm btn-danger" onclick="deleteUser('${row.id}')">Delete</button>`;
                    }
                }
            ]
        });
    });
</script>