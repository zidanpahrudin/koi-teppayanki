<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Promo Banners</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Promo Banners</li>
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

                        <!-- Modal Add/Edit Banner -->
                        <div class="modal fade" id="modal-banner">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modal-title">Add Promo Banner</h4>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="promoBannerForm" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" id="id">

                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" name="title" id="title" placeholder="Banner Title" required>
                                            </div>

                                            <!-- Image upload field -->
                                            <div class="form-group">
                                                <label for="image_url">Image</label>
                                                <input type="file" class="form-control-file" name="image_url" id="image_url" accept="image/png, image/jpeg, image/jpg" required>
                                                <small class="form-text text-muted">Only PNG, JPG, or JPEG files are allowed (Max 2MB).</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="orientation">Orientation</label>
                                                <select class="form-control" name="orientation" id="orientation" required>
                                                    <option value="portrait">Portrait</option>
                                                    <option value="landscape">Landscape</option>
                                                    <option value="square">Square</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="redirect_url">Redirect URL</label>
                                                <input type="text" class="form-control" name="redirect_url" id="redirect_url" placeholder="https://...">
                                            </div>

                                            <div class="form-group">
                                                <label for="display_position">Display Position</label>
                                                <select class="form-control" name="display_position" id="display_position">
                                                    <option value="" selected disabled>Select Display Position</option>
                                                    <option value="home-top-left">Homepage Top Left</option>
                                                    <option value="home-top-right">Homepage Top Right</option>
                                                    <option value="home-bottom">Homepage Bottom</option>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="sort_order">Sort Order</label>
                                                <input type="number" class="form-control" name="sort_order" id="sort_order" value="0">
                                            </div>

                                            <div class="form-group">
                                                <label for="is_active">Status</label>
                                                <select class="form-control" name="is_active" id="is_active">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="notes">Notes</label>
                                                <textarea class="form-control" name="notes" id="notes" rows="2"></textarea>
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
                            <h3 class="card-title">Banner List</h3>
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-banner">Add Banner</button>
                        </div>
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Position</th>
                                        <th>Orientation</th>
                                        <th>Image</th>
                                        <th>Redirect URL</th>
                                        <th>Status</th>
                                        <th>Order</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="bannerList">
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