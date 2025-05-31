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
                <div class="col-md-4">
                    <label for="filterWilayah">Filter by Wilayah</label>
                    <select id="filterWilayah" class="form-control">
                        <option value="">-- All Wilayah --</option>
                        <?php foreach ($wilayah as $w) : ?>
                            <option value="<?= $w['id'] ?>"><?= $w['name'] ?></option>
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
                                        <th>Wilayah</th>
                                        <th>Item Code</th>
                                        <th>Item Name</th>
                                        <th>Unit</th>
                                        <th>total</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" style="text-align:right">Total:</th>
                                        <th id="totalQty">0</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= include('js/index.js.php') ?>