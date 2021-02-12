<div class="container mt-5">
    <h1>Update Grocery List</h1>
    <form method="post" action="<?= site_url('dashboard/update') ?>">
        <div class="form-group">
            <div class="mb-3 row">
                <label for="item_name" class="col-sm-3 col-form-label">Item Name</label>
                <div class="col-sm-7">
                    <input type="text" id="item_name" class="form-control" name="item_name" placeholder="Item name" value="<?= $grocery['item_name'] ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="item_quantity" class="col-sm-3 col-form-label">Item Quantity</label>
                <div class="col-sm-7">
                    <input type="text" id="item_quantity" class="form-control" name="item_quantity" placeholder="Item Quantity" value="<?= $grocery['item_quantity'] ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="item_status" class="col-sm-3 col-form-label">Item Status</label>
                <div class="col-sm-7">
                    <select class="form-select" aria-label="Default select example" name="item_select" value="<?= $grocery['item_status'] ?>">
                        <option selected>Select...</option>
                        <option value="0">Pending</option>
                        <option value="1">Brought</option>
                        <option value="0">Not Available</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="item_date" class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-7">
                    <input type="date" id="item_date" class="form-control" name="item_date" placeholder="Item Date" value="<?= $grocery['item_date'] ?>">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-danger">
            </div>

            <input type="hidden" name="id" value="<?= $grocery['id'] ?>"
        </div>
    </form>
</div>


