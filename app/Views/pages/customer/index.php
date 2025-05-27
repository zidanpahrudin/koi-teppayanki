<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Customers</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">customers</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Customer List</h3>
                        </div>
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($customers as $customer): ?>
                                        <tr>
                                            <td><?php echo $customer['id']; ?></td>
                                            <td><?php echo $customer['full_name']; ?></td>
                                            <td><?php echo $customer['phone_no']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "searching": true, // Enable search functionality
            "paging": true, // Enable pagination
            "ordering": true, // Enable ordering
            "info": true, // Display info like "Showing 1 to 10 of 50 entries"
        });
    });
</script>