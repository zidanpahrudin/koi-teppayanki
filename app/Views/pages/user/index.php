<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">user</li>
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
                                            <h4 class="modal-title" id="modal-title">Add User</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- form add user -->
                                            <div class="card-body">
                                                <form id="userForm" method="post">
                                                    <!-- id hidden if click edit -->
                                                    <input type="hidden" name="id" id="id">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="role">Role</label>
                                                        <select class="form-control" id="role_id" name="role_id">
                                                            <option value="">Select Role</option>
                                                            <?php foreach ($roles as $role) : ?>
                                                                <option value="<?= $role['id'] ?>"><?= $role['name'] ?></option>
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
                            <h3 class="card-title">User List</h3>
                            <button data-toggle="modal" data-target="#modal-default" class="btn btn-primary float-right">Add User</button>
                        </div>
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
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