<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Stock Report</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Stock</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- FILTER UNIT -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="filterUnit">Filter by Unit</label>
                    <select id="filterUnit" class="form-control">
                        <option value="">-- All Units --</option>
                        <?php foreach ($units as $unit) : ?>
                            <option value="<?= $unit['id'] ?>"><?= $unit['unit_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <!-- DATA TABLE -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Stock List</h3>
                        </div>
                        <div class="card-body">
                            <table id="reportStockTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Code</th>
                                        <th>Item Name</th>
                                        <th>Unit</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= include('js/index.js.php') ?>
