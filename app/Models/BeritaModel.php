<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table = 'data_berita';
    protected $primaryKey = 'id';
    protected $allowedFields = ['img', 'judul', 'deskripsi', 'date'];
}

?>