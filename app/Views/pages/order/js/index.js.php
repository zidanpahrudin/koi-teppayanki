<script>
    $(document).ready(function() {

        var url = window.location.href;

        // Extract the 'status' parameter from the query string
        var urlParams = new URLSearchParams(window.location.search);
        var status = urlParams.get('status'); // Get the 'status' from the query string

        // Default URL for fetching all orders
        var urlDataTable = "<?php echo base_url('order/read'); ?>";

        // If a 'status' is present in the URL, append it to the DataTable URL
        if (status) {
            urlDataTable = "<?php echo base_url('order/read'); ?>?status=" + status;
        }
        // Initialize DataTable
        var table = $('#orderTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": urlDataTable,
                "type": "GET"
            },
            "columns": [{
                    "data": null,
                    "render": function(data, type, row, meta) {
                        return meta.row + 1; // Auto-incrementing No
                    }
                },
                {
                    "data": "order_no"
                },
                {
                    "data": "full_name"
                },
                {
                    "data": "order_total"
                },
                {
                    "data": "order_status",
                    "render": function(data, type, row) {
                        // Check if the order status is "completed"
                        var completedDisabled = data === 'completed' ? 'disabled' : ''; // Disable "Completed" option if the status is already "completed"

                        return `
                        <select class="form-control status-select" data-id="${row.id}" ${completedDisabled}>
                            <option value="pending" ${data == 'pending' ? 'selected' : ''}>Pending</option>
                            <option value="completed" ${data == 'completed' ? 'selected' : ''}>Completed</option>
                            <option value="cancelled" ${data == 'cancelled' ? 'selected' : ''}>Cancelled</option>
                        </select>
                        `;
                    }
                },
                {
                    "data": null,
                    "render": function(data, type, row) {
                        return `
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('order/print/'); ?> ${row.id} ">Print Invoice</a>
                    `;
                    }
                }
            ]
        });

        // Handle Add/Edit Order Form submission
        $('#orderForm').submit(function(e) {
            e.preventDefault();

            var id = $('#orderId').val();
            var url = id ? "<?php echo base_url('order/update/'); ?>" + id : "<?php echo base_url('order/create'); ?>";

            $.ajax({
                type: 'POST',
                url: url,
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        $('#modal-default').modal('hide');
                        table.ajax.reload(); // Reload table data
                        alert(response.message);
                    } else {
                        alert('Error: ' + JSON.stringify(response.errors));
                    }
                }
            });
        });

        // Edit Order functionality
        window.editOrder = function(id) {
            $.get("<?php echo base_url('order/read/'); ?>" + id, function(data) {
                if (data.success) {
                    $('#orderId').val(data.data.id);
                    $('#order_no').val(data.data.order_no);
                    $('#customer_name').val(data.data.customer_name);
                    $('#order_total').val(data.data.order_total);
                    $('#order_status').val(data.data.order_status);
                    $('#modal-default').modal('show');
                } else {
                    alert(data.message);
                }
            });
        };

        $(document).on('change', '.status-select', function() {
            var orderId = $(this).data('id');
            var newStatus = $(this).val();

            $.ajax({
                url: "<?php echo base_url('order/updateStatus/'); ?>" + orderId,
                type: "POST",
                data: {
                    status: newStatus
                },
                success: function(response) {
                    if (response.success) {
                        // using sweat alert library for sweet alert notifications
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000
                        });
                        table.ajax.reload(); // Reload table data
                    } else {
                        alert(response.message);
                    }
                }
            });
        });

        // Delete Order functionality
        window.deleteOrder = function(id) {
            if (confirm("Are you sure you want to delete this order?")) {
                $.ajax({
                    url: "<?php echo base_url('order/delete/'); ?>" + id,
                    type: "GET",
                    success: function(response) {
                        if (response.success) {
                            alert(response.message);
                            table.ajax.reload(); // Reload table data
                        } else {
                            alert(response.message);
                        }
                    }
                });
            }
        };
    });
</script>