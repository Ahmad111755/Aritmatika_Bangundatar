<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class BangunDatar extends BaseController
{
    public function segitiga()
    {
        $data = [
            'judul' => 'Segitiga',
            // 'validation' =>  \Config\Services::validation()
        ];
        return view('bangundatar/segitiga/menusegitiga', $data);
    }


    public function persegi()
    {
        $data = [
            'judul' => 'Persegi',
            // 'validation' =>  \Config\Services::validation()
        ];
        return view('bangundatar/persegi/menupersegi', $data);
    }

    public function persegipanjang()
    {
        $data = [
            'judul' => 'Persegi Panjang',
            // 'validation' =>  \Config\Services::validation()
        ];
        return view('bangundatar/persegipanjang/menupersegipanjang', $data);
    }

    public function lingkaran()
    {
        $data = [
            'judul' => 'Lingkaran',
            // 'validation' =>  \Config\Services::validation()
        ];
        return view('bangundatar/lingkaran/menulingkaran', $data);
    }

    public function trapesium()
    {
        $data = [
            'judul' => 'Trapesium',
            // 'validation' =>  \Config\Services::validation()
        ];
        return view('bangundatar/trapesium/menutrapesium', $data);
    }
}
