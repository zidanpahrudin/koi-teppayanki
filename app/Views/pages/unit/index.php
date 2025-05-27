<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Units</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Unit</li>
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

                        <!-- Modal Add/Edit Unit -->
                        <div class="modal fade" id="modal-unit">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modal-title-unit">Add Unit</h4>
                                        <button type="button" class="close" data-dismiss="modal" onclick="addUnit()">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="unitForm" method="post">
                                            <input type="hidden" name="id" id="unit-id">

                                            <div class="form-group">
                                                <label for="unit-name">Unit Name</label>
                                                <input type="text" class="form-control" name="unit_name" id="unit-name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="unit-code">Unit Code</label>
                                                <input type="text" class="form-control" name="unit_code" id="unit-code" required>
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
                            <h3 class="card-title">Unit List</h3>
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-unit">Add Unit</button>
                        </div>
                        <div class="card-body">
                            <table id="unitTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Unit Name</th>
                                        <th>Unit Code</th>
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