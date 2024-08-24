<?php

namespace App\Controllers;
use App\Models\ProdukModel;
use App\Models\BeritaModel;

class Home extends BaseController
{
    // public function index()
    // {
    //     return view('welcome_message');
    // }

    protected $ProdukModel;
    protected $BeritaModel;
    public function __construct()
    {
        $this->ProdukModel = new ProdukModel();
        $this->BeritaModel = new BeritaModel();
    }

    public function index()
    {

        $data = ['blogs' => $this->BeritaModel->findAll()];
        return view('layout/template', $data);
    }

    public function jualProduk()
    {
        return view('pages/jualProduk');    
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
        $allowedPassword = 'wisema2024$$';

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
            'deskripsi'   => $this->request->getPost('deskripsi'),
            'harga'   => $this->request->getPost('harga'),
            'diskon' => $this->request->getPost('diskon'),
        ];

        $model->save($data);

        return redirect()->to('pages/produk');
    }

    public function berita()
    {

        return view('pages/berita');
    }

    public function saveBerita()
    {

        $model = new BeritaModel();

        $inputPassword = $this->request->getPost('password');

        // Password yang diizinkan
        $allowedPassword = 'wisema2024$$';

        if ($inputPassword !== $allowedPassword) {
            // Jika password salah, kembali ke form dengan pesan error
            return redirect()->back()->with('error', 'Password salah! Anda tidak memiliki izin untuk menambahkan berita.');
        }

        $file = $this->request->getFile('foto');
        $newName = $file->getRandomName();
        $file->move(WRITEPATH . '../public/uploads', $newName);


        $data = [
            'img'   => $newName,
            'judul'   => $this->request->getPost('judul'),
            'deskripsi'   => $this->request->getPost('deskripsi'),
            'date' => $this->request->getPost('date'),
        ];

        $model->save($data);

        return redirect()->to('home');
    }

}
