<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelajaranModel;

class Pelajaran extends BaseController
{
    protected $pelajaran;

    public function __construct() {
        $this->pelajaran = new PelajaranModel();
    }
    public function index()
    {
        $data['pelajaran'] = $this->pelajaran->findAll();
        return view('pelajaran', $data);        
    }

    function tambah() {
        
    }
}
