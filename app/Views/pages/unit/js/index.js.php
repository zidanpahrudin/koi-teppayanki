<script>
    function addUnit() {
        $('#modal-unit').modal('show');
        $('#modal-title-unit').html('Add Unit');
        $('#unitForm').attr('action', "<?= base_url('/master/unit/create') ?>");

        // Clear previous values
        $('#unitForm')[0].reset(); // or manually reset if needed
        $('#unit-id').val('');
    }

    function editUnit(id) {
        $.ajax({
            url: "<?= base_url('/master/unit/read/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-unit').modal('show');
                    $('#modal-title-unit').html('Edit Unit');
                    $('#unitForm').attr('action', "<?= base_url('/master/unit/update/') ?>");
                    $('#unit-id').val(response.data.id);
                    $('#unit-name').val(response.data.unit_name);
                    $('#unit-code').val(response.data.unit_code);
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

     function deleteUnit(id) {
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
                    url: "<?= base_url('/master/unit/delete/') ?>" + id,
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
                            $('#unitTable').DataTable().ajax.reload();
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

        $('#unitTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('/master/unit/read') ?>",
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
                    "data": "unit_name"
                },
                {
                    "data": "unit_code"
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `<button class="btn btn-sm btn-primary" onclick="editUnit('${row.id}')">Edit</button> 
                                 <button class="btn btn-sm btn-danger" onclick="deleteUnit('${row.id}')">Delete</button>
                                 `;
                    }
                }
            ]
        });

        $('#unitForm').submit(function(e) {
            e.preventDefault();
            let url = $('#unit-id').val() ?
                "<?= base_url('/master/unit/update/') ?>" + $('#unit-id').val() :
                "<?= base_url('/master/unit/create') ?>";

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

                        $('#unitForm')[0].reset();
                        $('#modal-unit').modal('hide');
                        $('#unitTable').DataTable().ajax.reload();
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