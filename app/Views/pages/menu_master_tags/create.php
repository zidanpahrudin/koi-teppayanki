<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Add Menu Master Tag</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="menuMasterTagForm" method="post">
                    <input type="hidden" name="id" id="id"> <!-- Hidden input for Edit -->

                    <div class="form-group">
                        <label for="menu_id">Menu Item</label>
                        <select class="form-control" id="menu_id" name="menu_id">
                            <option value="">Select Menu Item</option>
                            <?php foreach ($menus as $menu): ?>
                                <option value="<?= $menu['menu_id']; ?>"><?= $menu['menu_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tag_name">Tag Name</label>
                        <input type="text" class="form-control" id="tag_name" name="tag_name" placeholder="Enter tag name">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>