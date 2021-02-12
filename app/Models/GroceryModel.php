<?php namespace App\Models;

use CodeIgniter\Model;

class GroceryModel extends Model{
  protected $table = 'grocery';
  protected $primaryKey = 'id';
  protected $allowedFields = ['item_name', 'item_quantity', 'item_status', 'item_date'];

  
}

