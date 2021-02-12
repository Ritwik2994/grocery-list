<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php if($groceries): ?>
      <?php foreach($groceries as $grocery) : ?>
    <tr>
      <th scope="row">1</th>
      <td><?= $grocery['item_name'] ?></td>
      <td><?= $grocery['item_quantity'] ?></td>
      <td><?= $grocery['item_status'] ? 'Brought' : 'Pending' ?></td>
      <td><?= $grocery['item_date'] ?></td>
      <td><a href="<?= site_url('dashboard/update/' . $grocery['id'])  ?>" class="card-link">Update</a>
                          <a href="<?= site_url('dashboard/delete/' . $grocery['id'])  ?>" class="card-link">Delete</a></td>
    </tr>
    <?php endforeach; ?>

<?php endif; ?>
    
  </tbody>
</table>