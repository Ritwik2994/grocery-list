<div class="container">
  <br><br>
  <div class="row">
    <div class="col-lg-6">
      <h1>View Grocery List</h1>
    </div>
    <div class="col-lg-6 float-right">
      <div class="row">
        <div class="col-lg-8"></div>
        <div class="col-lg-4">
          <a href="<?= site_url('dashboard/list')?>" class="btn btn-success" >Saved List</a>
          <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add</a>
        </div>
      </div>
    </div>
  </div>
            
            <!-- // top -->
            <!-- Grocery Cards -->
  <div class="row mt-4">

    <?php if($groceries): ?>
      <?php foreach($groceries as $grocery) : ?>
        <div class="col-lg-3">
          <div class="card shadow-sm p-3 mb-5 bg-body rounded">
            <div class="card-body">
              <h5 class="card-title"><?= $grocery['item_name'] ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= $grocery['item_quantity'] ?> Pcs.</h6>
              <p class="text-success"><?= $grocery['item_status'] ? 'Brought' : 'Pending' ?></p>
              <a href="<?= site_url('dashboard/update/' . $grocery['id'])  ?>" class="card-link">Update</a>
              <a href="<?= site_url('dashboard/delete/' . $grocery['id'])  ?>" class="card-link">Delete</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
                
  </div>
</div>

<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <?php include 'add.php';?>
      
    </div>
  </div>
</div>
