<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sliders</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Slider</li>
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

                        <!-- Modal Add/Edit Slider -->
                        <div class="modal fade" id="modal-slider">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modal-title">Add Slider</h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="sliderForm" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" id="id">

                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" name="title" id="title" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="image_url">Image</label>
                                                <input type="file" class="form-control-file" name="image_url" id="image_url" required>
                                                <small class="form-text text-muted">Only PNG, JPG, or JPEG (Max 2MB)</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="is_active">Status</label>
                                                <select class="form-control" name="is_active" id="is_active">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
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
                            <h3 class="card-title">Slider List</h3>
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-slider">Add Slider</button>
                        </div>
                        <div class="card-body">
                            <table id="sliderTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="sliderList">
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
