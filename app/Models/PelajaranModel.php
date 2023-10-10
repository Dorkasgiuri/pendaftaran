<?php

namespace App\Models;

use CodeIgniter\Model;

class PelajaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mata_pelajaran';
    protected $primaryKey       = 'kode_mk';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['pelajaran'];
}
