<form method="post" action="<?= site_url('dashboard/save') ?>">

<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Add Grocery List</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <div class="mb-3 row">
      <label for="item_name" class="col-sm-3 col-form-label">Item Name</label>
      <div class="col-sm-7">
        <input type="text" id="item_name" class="form-control" name="item_name" placeholder="Item name">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="item_quantity" class="col-sm-3 col-form-label">Item Quantity</label>
      <div class="col-sm-7">
        <input type="text" id="item_quantity" class="form-control" name="item_quantity" placeholder="Item Quantity">
      </div>
    </div>
    <div class="mb-3 row">
      <label for="item_status" class="col-sm-3 col-form-label">Item Status</label>
      <div class="col-sm-7">
        <select class="form-select" aria-label="Default select example" name="item_select">
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
        <input type="date" id="item_date" class="form-control" name="item_date" placeholder="Item Date">
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Save </button>
  </div>
</form>