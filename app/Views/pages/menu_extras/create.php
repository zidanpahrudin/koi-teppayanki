<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Add Menu Package</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="menuPackageForm" method="post">
                    <input type="hidden" name="id" id="id"> <!-- Hidden input for Edit -->

                    <div class="form-group">
                        <label for="menu_id">Menu</label>
                        <select class="form-control" id="menu_id" name="menu_id">
                            <option value="">Select Menu</option>
                            <!-- Add options dynamically using AJAX -->
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="package_name">Package Name</label>
                        <input type="text" class="form-control" id="package_name" name="package_name" placeholder="Enter package name">
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
                        <label for="notes">Notes</label>
                        <textarea class="form-control" id="notes" name="notes" placeholder="Enter notes"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="flag_separate_print_package">Separate Print Package</label>
                        <input type="checkbox" id="flag_separate_print_package" name="flag_separate_print_package" value="1">
                    </div>

                    <div class="form-group">
                        <label for="flag_separate_tax_calculation">Separate Tax Calculation</label>
                        <input type="checkbox" id="flag_separate_tax_calculation" name="flag_separate_tax_calculation" value="1">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include JavaScript -->
<?= include('js/index.js.php') ?>
