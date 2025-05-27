<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Wilayah</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">wilayah</li>
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
                            <div class="modal fade" id="modal-default">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="modal-title">Add Wilayah</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <form id="wilayahForm" method="post">
                                                    <input type="hidden" name="id" id="id">
                                                    <div class="form-group">
                                                        <label for="name">Wilayah</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Wilayah" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="group">Group</label>
                                                        <select class="form-control" id="group" name="group" required>
                                                            <option value="">Select Group</option>
                                                            <option value="provinsi">Provinsi</option>
                                                            <option value="kota">Kota</option>
                                                            <option value="kecamatan">Kecamatan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="parent_id">Parent ID</label>
                                                        <select class="form-control" name="parent_id" id="parent_id">
                                                            <option value="">Select Parent</option>
                                                            <?php foreach ($wilayah as $w) : ?>
                                                                <option value="<?= $w['id'] ?>"><?= $w['name'] ?></option>
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
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <h3 class="card-title">Wilayah List</h3>
                            <button data-toggle="modal" data-target="#modal-default" class="btn btn-primary float-right">Add Wilayah</button>
                        </div>
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Wilayah</th>
                                        <th>Group</th>
                                        <th>Parent ID</th>
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

<?= include('js/index.js.php') ?>