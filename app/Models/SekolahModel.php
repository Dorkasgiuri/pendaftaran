<?php

namespace App\Models;

use CodeIgniter\Model;

class SekolahModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pilihan_sekolah';
    protected $primaryKey       = 'kode_sma';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['sekolah'];
}