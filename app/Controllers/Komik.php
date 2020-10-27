<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function  index()
    {

        $data = [
            "title" => "Daftar komik",
            "komik" => $this->komikModel->getKomik()
        ];

        return view('komik/index', $data);
    }

    public function  detail($slug)
    {
        $data = [
            'title' => 'DetailKomik',
            'komik' => $this->komikModel->getKomik($slug)
        ];
        // return view('komik/detail', $data);
        var_dump($data); exit();
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Komik'
        ];
        // return view('komik/create', $data);
    }
}
