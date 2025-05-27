<script>
    let table;

    $(document).ready(function() {
        table = $('#reportStockTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "<?= base_url('/report/stock/read') ?>",
                "type": "GET",
                "data": function(d) {
                    d.unit = $('#filterUnit').val(); // kirim filter unit ke server
                },
                "dataSrc": function(json) {
                    return json.data || [];
                }
            },
            "columns": [
                {
                    "data": null,
                    "render": function(data, type, row, meta) {
                        return meta.row + 1;
                    }
                },
                { "data": "item_code" },
                { "data": "item_name" },
                { 
                    "data": null,
                    "render": function(data, type, row) {
                        return row.unit_name + ' (' + row.unit_code + ')';
                    }
                },
                { "data": "created_at" },
                { "data": "updated_at" }
            ],
            "dom": 'Bfrtip',
            "buttons": [
                {
                    extend: 'csvHtml5',
                    title: 'Stock_Report',
                    text: 'Export CSV',
                    className: 'btn btn-success mb-2'
                }
            ]
        });

        // Trigger filter
        $('#filterUnit').on('change', function() {
            table.ajax.reload();
        });
    });
</script>