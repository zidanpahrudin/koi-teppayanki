<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Add Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="menuForm" method="post">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="menu_code">Menu Code</label>
                        <input type="text" class="form-control" id="menu_code" name="menu_code" placeholder="Enter menu code">
                    </div>

                    <div class="form-group">
                        <label for="menu_name">Menu Name</label>
                        <input type="text" class="form-control" id="menu_name" name="menu_name" placeholder="Enter menu name">
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter price">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="item_ids">Select Items</label>
                        <select class="form-control select2" id="item_ids" name="item_ids[]" multiple>
                            <?php foreach ($items as $item) : ?>
                                <option value="<?= $item['id'] ?>"><?= $item['item_name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div id="item-qty-container"></div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>