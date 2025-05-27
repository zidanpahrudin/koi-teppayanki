<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Items</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Item</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- Modal Add/Edit Item -->
                        <div class="modal fade" id="modal-item">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modal-title-item">Add Item</h4>
                                        <button type="button" class="close" data-dismiss="modal" onclick="addItem()">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="itemForm" method="post">
                                            <input type="hidden" name="id" id="item_id">

                                            <div class="form-group">
                                                <label for="item_name">Item Name</label>
                                                <input type="text" class="form-control" name="item_name" id="item_name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="unit_id">Unit</label>
                                                <select class="form-control" name="unit_id" id="unit_id" required>
                                                    <option value="">Select Unit</option>
                                                    <?php foreach ($units as $unit) :?>
                                                        <option value="<?= $unit['id'] ?>"><?= $unit['unit_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Modal -->

                        <div class="card-header">
                            <h3 class="card-title">Item List</h3>
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-item">Add Item</button>
                        </div>
                        <div class="card-body">
                            <table id="itemTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Name</th>
                                        <th>Item Code</th>
                                        <th>Unit Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= include('js/index.js.php') ?>