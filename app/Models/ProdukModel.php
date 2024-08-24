<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'data_produk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['img', 'nama', 'deskripsi', 'harga', 'diskon', 'created_at', 'updated_at'];
}

?>