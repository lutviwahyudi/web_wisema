<?php

namespace App\Controllers;
use App\Models\ProdukModel;

class Home extends BaseController
{
    // public function index()
    // {
    //     return view('welcome_message');
    // }

    protected $ProdukModel;
    public function __construct()
    {
        $this->ProdukModel = new ProdukModel();
    }

    public function index()
    {
        $data = $this->ProdukModel->findAll();

        return view('layout/template', $data);
    }

    public function jualProduk()
    {
        return view('layout/jualProduk');    
    }
    
    public function upload()
    {

    }
}
