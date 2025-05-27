<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Add Menu Item to Group</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="menuItemInGroupForm" method="post">
                    <input type="hidden" name="id" id="id"> <!-- Hidden input for Edit -->

                    <div class="form-group">
                        <label for="menu_group_id">Menu Group</label>
                        <select class="form-control" id="menu_group_id" name="menu_group_id">
                            <option value="">Select Menu Group</option>
                            <?php foreach ($menuGroups as $group): ?>
                                <option value="<?= $group['menu_group_id']; ?>"><?= $group['menu_group_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="menu_id">Menu Item</label>
                        <select class="form-control" id="menu_id" name="menu_id">
                            <option value="">Select Menu Item</option>
                            <?php foreach ($menuItems as $item): ?>
                                <option value="<?= $item['menu_id']; ?>"><?= $item['menu_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="additional_price">Additional Price</label>
                        <input type="number" class="form-control" id="additional_price" name="additional_price" placeholder="Enter additional price">
                    </div>

                    <div class="form-group">
                        <label for="default_item">Default Item</label>
                        <input type="checkbox" id="default_item" name="default_item" value="1">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
