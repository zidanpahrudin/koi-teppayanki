<!-- create datatable call in api -->
<script>
    function editRole(id) {
        $.ajax({
            url: "<?= base_url('/master/role/read/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-default').modal('show'); // Tampilkan modal
                    $('#modal-title').html('Edit Role'); // Set judul modal
                    $('#userForm').attr('action', "<?= base_url('/master/role/update/') ?>");
                    $('#id').val(response.data.id);
                    $('#name').val(response.data.name);
                    $('#description').val(response.data.description);

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

    function deleteRole(id) {
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
                    url: "<?= base_url('/master/role/delete/') ?>" + id,
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

    function updatePermission(role_id, permission_id, isChecked) {
        $.ajax({
            url: "<?= base_url('/master/role/update_permission') ?>",
            type: "POST", // Use POST instead of GET
            data: {
                role_id: role_id,
                permission_id: permission_id,
                status: isChecked ? 1 : 0 // Send 1 for checked, 0 for unchecked
            },
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
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: response.message,
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops!',
                    text: 'Terjadi kesalahan saat mengupdate izin!',
                });
            }
        });
    }

    $(document).on('change', '.permission-checkbox', function() {
        let role_id = $(this).data('role-id');
        let permission_id = $(this).data('permission-id');
        let isChecked = $(this).prop('checked');

        updatePermission(role_id, permission_id, isChecked);
    });

    function rolePermission(id) {
        $('#permissionList').html('');
        $.ajax({
            url: "<?= base_url('/master/role/permission_menu/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-rolePermission').modal('show'); // Tampilkan modal
                    $.each(response.data, function(index, value) {
                        $('#permissionList').append(`
                            <tr>
                                <td>${index+1}</td>
                                <td>${value.name}</td>
                                <td>
                                    <input type="checkbox" ${value.is_granted ? 'checked' : ''} class="permission-checkbox" data-role-id="${id}"  data-permission-id="${value.id}">
                                </td>
                            </tr>
                        `);
                    });
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

    $(document).ready(function() {

        $('#dataTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('/master/role/read') ?>",
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
                    "data": "description"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editRole('${row.id}')">Edit</button> 
                            <button class="btn btn-sm btn-danger" onclick="deleteRole('${row.id}')">Delete</button>
                            <button class="btn btn-sm btn-success" onclick="rolePermission('${row.id}')" >Permission</button>
                            `;
                    }
                }
            ]
        });

        $('#roleForm').submit(function(e) {

            e.preventDefault();
            if ($('#id').val()) {
                url = "<?= base_url('/master/role/update/') ?>" + $('#id').val();
            } else {
                url = "<?= base_url('/master/role/create') ?>";
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

                        $('#roleForm')[0].reset(); // Reset form
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
    });
</script>