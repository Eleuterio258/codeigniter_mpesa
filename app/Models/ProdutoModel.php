
<?php
namespace App\Models;
use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name','description','price','discount','stock','detail','status','created_at','updated_at'];
}