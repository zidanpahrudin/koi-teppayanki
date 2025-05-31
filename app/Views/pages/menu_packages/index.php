<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menu Packages</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Menu Packages</li>
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
                            <h3 class="card-title">Menu Packages List</h3>
                            <button data-toggle="modal" data-target="#modal-default" class="btn btn-primary float-right">Add Menu Package</button>
                        </div>
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Package Name</th>
                                        <th>Price</th>
                                        <th>Min Qty</th>
                                        <th>Max Qty</th>
                                        <th>Notes</th>
                                        <th>Separate Print Package</th>
                                        <th>Separate Tax Calculation</th>
                                        <th>Action</th>
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

<?php include('create.php'); ?>
<!-- Include JavaScript -->
<?= include('js/index.js.php') ?>