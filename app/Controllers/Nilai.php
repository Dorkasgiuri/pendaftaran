<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NilaiModel; 

class Nilai extends BaseController
{
    protected $nilai;

    public function __construct() {
        $this->nilai = new NilaiModel();
    }
    public function index()
    {
        $data['nilai'] = $this->nilai->findAll();
        return view('nilai', $data);        
    }

    function tambah() {
        
    }
}
