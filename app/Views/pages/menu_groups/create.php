<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Add Menu Group</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="menuGroupForm" method="post">
                    <input type="hidden" name="id" id="id"> <!-- Hidden input for Edit -->

                    <div class="form-group">
                        <label for="menu_group_name">Group Name</label>
                        <input type="text" class="form-control" id="menu_group_name" name="menu_group_name" placeholder="Enter group name">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
                    </div>

                    <div class="form-group">
                        <label for="order_id">Order ID</label>
                        <input type="number" class="form-control" id="order_id" name="order_id" placeholder="Enter order ID" value="0">  <!-- Input for order_id -->
                    </div>

                    <div class="form-group">
                        <label for="min_qty">Min Quantity</label>
                        <input type="number" class="form-control" id="min_qty" name="min_qty" placeholder="Enter minimum quantity">
                    </div>

                    <div class="form-group">
                        <label for="max_qty">Max Quantity</label>
                        <input type="number" class="form-control" id="max_qty" name="max_qty" placeholder="Enter maximum quantity">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
