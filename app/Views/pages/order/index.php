<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Orders</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Orders</li>
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
                            <!-- Modal for Add Order -->
                            <div class="modal fade" id="modal-default">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        
                                        <div class="modal-body">
                                            <!-- Form to Add Order -->
                                            <form id="orderForm" method="post">
                                                <input type="hidden" name="id" id="orderId">
                                                <div class="form-group">
                                                    <label for="order_no">Order Number</label>
                                                    <input type="text" class="form-control" id="order_no" name="order_no" placeholder="Enter Order Number">
                                                </div>
                                                <div class="form-group">
                                                    <label for="customer_name">Customer Name</label>
                                                    <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Customer Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="order_total">Order Total</label>
                                                    <input type="number" class="form-control" id="order_total" name="order_total" placeholder="Enter Order Total">
                                                </div>
                                                <div class="form-group">
                                                    <label for="order_status">Order Status</label>
                                                    <select class="form-control" id="order_status" name="order_status">
                                                        <option value="pending">Pending</option>
                                                        <option value="completed">Completed</option>
                                                        <option value="cancelled">Cancelled</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <h3 class="card-title">Order List</h3>
                        </div><!-- /.card-header -->
                        
                        <div class="card-body">
                            <!-- DataTable for Orders -->
                            <table id="orderTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Order Number</th>
                                        <th>Customer Name</th>
                                        <th>Order Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data will be populated by DataTable -->
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?= include('js/index.js.php') ?>
