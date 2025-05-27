<!-- create datatable call in api -->
<script>
    $('#modal-default').on('hidden.bs.modal', function() {
        $('#wilayahForm')[0].reset();
        $('#id').val('');
        $('#name').val('');
        $('#group').val('');
        $('#parent_id').val('');
        $('#modal-title').html('Add Wilayah');
    });

    function editWilayah(id) {
        $('#modal-title').html('Edit Wilayah');
        $.ajax({
            url: "<?= base_url('/master/wilayah/read/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                    $('#id').val(response.id);
                    $('#name').val(response.name);
                    $('#group').val(response.group);
                    $('#parent_id').val(response.parent_id);
                    $('#modal-default').modal('show');
            }
        });
    }

    function deleteWilayah(id) {
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
                    url: "<?= base_url('/master/wilayah/delete/') ?>" + id,
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

        $('#wilayahForm').submit(function(e) {
            e.preventDefault(); // Mencegah reload halaman
            // kalau ada id di edit, maka update, jika tidak, maka create
            if ($('#id').val()) {
                url = "<?= base_url('/master/wilayah/update/') ?>" + $('#id').val();
            } else {
                url = "<?= base_url('/master/wilayah/create') ?>";
            }

            // kalau tidak ada parent id set ke null

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

                        $('#wilayahForm')[0].reset(); // Reset form
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

        // Initialize DataTable
        $('#dataTable').DataTable({
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('/master/wilayah/read') ?>",
                "type": "GET",
                "dataSrc": function(json) {
                    console.log(json);
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
                    "data": "group"
                },
                {
                    "data": "parent_id",
                    "render": function(data, type, row) {
                        return data ? row.parent_name : 'N/A'; // Assuming parent is an object with name property
                    }
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editWilayah('${row.id}')">Edit</button> 
                            <button class="btn btn-sm btn-danger" onclick="deleteWilayah('${row.id}')">Delete</button>`;
                    }
                }
            ]
        });
    });
</script>