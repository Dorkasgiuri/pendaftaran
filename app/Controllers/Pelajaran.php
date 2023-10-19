<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelajaranModel;
use phpparsher\Node\stmt\Return_;

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
    public function tambah()
    {
    $item = $this->request->getpost();
    if(count($item)> 0 ){
        try {
            $this->pelajaran->insert($item);
            return redirect()->to(base_url('pelajaran'));
        } catch (\Throwable $th) {
            //throw $th;
        }

       }else return view("tambah_pelajaran");
    }
    public function ubah($id)
    {
        $data['item'] = $this->pelajaran->where("id", $id)->first();
        return view("ubah_pelajaran", $data);
    }
    public function hapus($id)
    {
        $this->pelajaran->delete($id);
        return redirect()->to(base_url("pelajaran"));
    }
}