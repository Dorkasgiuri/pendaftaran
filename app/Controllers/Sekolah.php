<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SekolahModel;

class Sekolah extends BaseController
{
    protected $sekolah;

    public function __construct() {
        $this->sekolah = new SekolahModel();
    }
    public function index()
    {
        $data['sekolah'] = $this->sekolah->findAll();
        return view('sekolah', $data);        
    }

    public function Tambah()
    {
        $item = $this->request->getpost();
        if(count($item)> 0 ){
            try {
                $this->sekolah->insert($item);
                return redirect()->to(base_url('sekolah'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view("tambah_sekolah");
    }
    public function ubah($id)
    {
        $data['item'] = $this->sekolah->where("id", $id)->first();
        return view("ubah_sekolah", $data);
    }
    public function hapus($id)
    {
        $this->sekolah->delete($id);
        return redirect()->to(base_url("sekolah"));
    }    
}