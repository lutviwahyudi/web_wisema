<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Pages extends BaseController
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

    public function about()
    {

        return view('pages/about');
    }
    public function projects()
    {

        return view('pages/project');
    }
    public function service()
    {

        return view('pages/service');
    }
    public function jualProduk()
    {
        
        return view('pages/jualProduk');
    }
    
    public function produk()
    {

        $data = ['produk' => $this->ProdukModel->findAll()];
        return view('pages/produk', $data);
    }

    public function save()
    {

        $model = new ProdukModel();

        $inputPassword = $this->request->getPost('password');

        // Password yang diizinkan
        $allowedPassword = 'wisemasuksesselalu';

        if ($inputPassword !== $allowedPassword) {
            // Jika password salah, kembali ke form dengan pesan error
            return redirect()->back()->with('error', 'Password salah! Anda tidak memiliki izin untuk menambahkan produk.');
        }

        $file = $this->request->getFile('foto');
        $newName = $file->getRandomName();
        $file->move(WRITEPATH . '../public/uploads', $newName);

        $data = [
            'img'   => $newName,
            'nama'   => $this->request->getPost('nama'),
            'harga'   => $this->request->getPost('harga'),
            'diskon' => $this->request->getPost('diskon'),
        ];

        $model->save($data);

        return redirect()->to('pages/produk');
    }
}
