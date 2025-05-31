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
                // inject wilayah Name
                {
                    "data": "unit_name",
                    "render": function(data, type, row) {
                        return 'Jakarta'; // tampilkan nama unit atau 'N/A' jika tidak ada
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
                // inject total stock random number
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return Math.floor(Math.random() * 100) + 1; // tampilkan total stock atau 0 jika tidak ada
                    }
                },
            ],
            "dom": 'Bfrtip',
            "buttons": [
                {
                    extend: 'csvHtml5',
                    title: 'Stock_Report',
                    text: 'Export CSV',
                    className: 'btn btn-success mb-2'
                }
            ],
            "footerCallback": function(row, data, start, end, display) {
                let api = this.api();

                // Total dari semua row yang terlihat
                let totalQty = 0;
                data.forEach(function(rowData) {
                    let qty = Math.floor(Math.random() * 100) + 1; // HARUSNYA rowData.total
                    totalQty += qty;
                });

                // Update footer
                $(api.column(5).footer()).html(totalQty);
            }
        });

        // Trigger filter
        $('#filterUnit').on('change', function() {
            table.ajax.reload();
        });
    });
</script>