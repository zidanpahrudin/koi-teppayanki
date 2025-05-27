<script>
    $(document).ready(function() {
        $('#provinsi').change(function() {
            $.ajax({
                type: "GET",
                url: "<?= base_url('data/wilayah/get_kota/') ?>" + $(this).val(),
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    // mau buat selection options berdasarkan data yang diambil dari server
                    $('#kota-group').removeClass('d-none');
                    $('#kota').empty();
                    $('#kota').append('<option value="">Pilih Kota/Kab</option>');
                    $.each(response, function(index, value) {
                        $('#kota').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: xhr.responseJSON.message,
                    });
                }
            });
        });


    });

    
</script>