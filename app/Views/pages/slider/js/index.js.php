<script>
    function editSlider(id) {
        $.ajax({
            url: "<?= base_url('/master/slider/read/') ?>" + id,
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    $('#modal-slider').modal('show');
                    $('#modal-title').html('Edit Slider');
                    $('#sliderForm').attr('action', "<?= base_url('/master/slider/update/') ?>" + response.data.id);

                    $('#id').val(response.data.id);
                    $('#title').val(response.data.title);
                    $('#is_active').val(response.data.is_active);
                } else {
                    Swal.fire('Error', response.message, 'error');
                }
            }
        });
    }

    function deleteSlider(id) {
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('/master/slider/delete/') ?>" + id,
                    type: "GET",
                    dataType: "json",
                    success: function(response) {
                        if (response.success) {
                            Swal.fire('Berhasil!', response.message, 'success');
                            $('#sliderTable').DataTable().ajax.reload();
                        } else {
                            Swal.fire('Gagal', response.message, 'error');
                        }
                    }
                });
            }
        });
    }

    $(document).ready(function() {
        $('#sliderTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "<?= base_url('/master/slider/read') ?>",
                type: "GET",
                dataSrc: function(json) {
                    return json.data || [];
                }
            },
            columns: [
                {
                    data: null,
                    render: function(data, type, row, meta) {
                        return meta.row + 1;
                    }
                },
                { data: "title" },
                {
                    data: "image_url",
                    render: function(data) {
                        return `<img src="${data}" width="100"/>`;
                    }
                },
                {
                    data: "is_active",
                    render: function(data) {
                        return data == 1 ? 'Active' : 'Inactive';
                    }
                },
                {
                    data: null,
                    render: function(row) {
                        return `
                            <button class="btn btn-sm btn-primary" onclick="editSlider('${row.id}')">Edit</button>
                            <button class="btn btn-sm btn-danger" onclick="deleteSlider('${row.id}')">Delete</button>
                        `;
                    }
                }
            ]
        });

        $('#sliderForm').submit(function(e) {
            e.preventDefault();
            let form = $(this)[0];
            let formData = new FormData(form);
            let id = $('#id').val();
            let url = id ? "<?= base_url('/master/slider/update/') ?>" + id : "<?= base_url('/master/slider/create') ?>";

            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        Swal.fire('Sukses', response.message, 'success');
                        $('#sliderForm')[0].reset();
                        $('#modal-slider').modal('hide');
                        $('#sliderTable').DataTable().ajax.reload();
                    } else {
                        Swal.fire('Gagal', Object.values(response.message).join("\n"), 'error');
                    }
                }
            });
        });
    });
</script>
