<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class Aritmatika extends BaseController
{
    public function penjumlahan()
    {
        $data = [
            'judul' => 'Penjumlahan',
            'validation' =>  \Config\Services::validation()
        ];
        return view('aritmatika/penjumlahan', $data);
    }

    public function hitungpenjumlahan()
    {
        if(!$this->validate([
            'bilangan1' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 1 harus diisi',
                    'numeric' => 'Bilangan 1 harus angka'
                ]
            ],
            
            'bilangan2' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 2 harus diisi',
                    'numeric' => 'Bilangan 2 harus angka'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to(base_url('aritmatika/penjumlahan'))->withInput()->with('validation', $validation);
        }
        $bil1 = $this->request->getVar('bilangan1');
        $bil2 = $this->request->getVar('bilangan2');
        $hasil = $bil1 + $bil2;
        session()->setFlashdata('pesan','Hasil penjumlahan dari ' . $bil1 . ' + ' . $bil2 . ' = ' . $hasil);
        return redirect()->to(base_url('aritmatika/penjumlahan'));
    }

    public function pengurangan()
    {
        $data = [
            'judul' => 'Pengurangan',
            'validation' =>  \Config\Services::validation()
        ];
        return view('aritmatika/pengurangan', $data);
    }

    public function hitungpengurangan()
    {
        if(!$this->validate([
            'bilangan1' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 1 harus diisi',
                    'numeric' => 'Bilangan 1 harus angka'
                ]
            ],
            
            'bilangan2' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 2 harus diisi',
                    'numeric' => 'Bilangan 2 harus angka'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to(base_url('aritmatika/pengurangan'))->withInput()->with('validation', $validation);
        }
        $bil1 = $this->request->getVar('bilangan1');
        $bil2 = $this->request->getVar('bilangan2');
        $hasil = $bil1 - $bil2;
        session()->setFlashdata('pesan','Hasil pengurangan dari ' . $bil1 . ' - ' . $bil2 . ' = ' . $hasil);
        return redirect()->to(base_url('aritmatika/pengurangan'));
    }
    

    public function perkalian()
    {
        $data = [
            'judul' => 'Perkalian',
            'validation' =>  \Config\Services::validation()
        ];
        return view('aritmatika/perkalian', $data);
    }

    public function hitungperkalian()
    {
        if(!$this->validate([
            'bilangan1' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 1 harus diisi',
                    'numeric' => 'Bilangan 1 harus angka'
                ]
            ],
            
            'bilangan2' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 2 harus diisi',
                    'numeric' => 'Bilangan 2 harus angka'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to(base_url('aritmatika/perkalian'))->withInput()->with('validation', $validation);
        }
        $bil1 = $this->request->getVar('bilangan1');
        $bil2 = $this->request->getVar('bilangan2');
        $hasil = $bil1 * $bil2;
        session()->setFlashdata('pesan','Hasil perkalian dari ' . $bil1 . ' x ' . $bil2 . ' = ' . $hasil);
        return redirect()->to(base_url('aritmatika/perkalian'));
    }

    public function pembagian()
    {
        $data = [
            'judul' => 'Pembagian',
            'validation' =>  \Config\Services::validation()
        ];
        return view('aritmatika/pembagian', $data);
    }

    public function hitungpembagian()
    {
        if(!$this->validate([
            'bilangan1' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 1 harus diisi',
                    'numeric' => 'Bilangan 1 harus angka'
                ]
            ],
            
            'bilangan2' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 2 harus diisi',
                    'numeric' => 'Bilangan 2 harus angka'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to(base_url('aritmatika/pembagian'))->withInput()->with('validation', $validation);
        }
        $bil1 = $this->request->getVar('bilangan1');
        $bil2 = $this->request->getVar('bilangan2');
        $hasil = $bil1 / $bil2;
        session()->setFlashdata('pesan','Hasil pembagian dari ' . $bil1 . ' : ' . $bil2 . ' = ' . $hasil);
        return redirect()->to(base_url('aritmatika/pembagian'));
    }


    public function modulus()
    {
        $data = [
            'judul' => 'Modulus',
            'validation' =>  \Config\Services::validation()
        ];
        return view('aritmatika/modulus', $data);
    }

    public function hitungmodulus()
    {
        if(!$this->validate([
            'bilangan1' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 1 harus diisi',
                    'numeric' => 'Bilangan 1 harus angka'
                ]
            ],
            
            'bilangan2' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 2 harus diisi',
                    'numeric' => 'Bilangan 2 harus angka'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to(base_url('aritmatika/modulus'))->withInput()->with('validation', $validation);
        }
        $bil1 = $this->request->getVar('bilangan1');
        $bil2 = $this->request->getVar('bilangan2');
        $hasil = $bil1 % $bil2;
        session()->setFlashdata('pesan','Hasil dari ' . $bil1 . ' MOD ' . $bil2 . ' adalah ' . $hasil);
        return redirect()->to(base_url('aritmatika/modulus'));
    }

    public function perpangkatan()
    {
        $data = [
            'judul' => 'Perpangkatan',
            'validation' =>  \Config\Services::validation()
        ];
        return view('aritmatika/perpangkatan', $data);
    }

    public function hitungperpangkatan()
    {
        if(!$this->validate([
            'bilangan1' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 1 harus diisi',
                    'numeric' => 'Bilangan 1 harus angka',
                ]
            ],
            
            'bilangan2' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Bilangan 2 harus diisi',
                    'numeric' => 'Bilangan 2 harus angka'
                ]
            ],
        ]))
        {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to(base_url('aritmatika/perpangkatan'))->withInput()->with('validation', $validation);
        }
        $bil1 = $this->request->getVar('bilangan1');
        $bil2 = $this->request->getVar('bilangan2');
        $hasil = $bil1 ** $bil2;
        session()->setFlashdata('pesan','Hasil dari ' . $bil1 . ' Pangkat ' . $bil2 . ' adalah ' . $hasil);
        return redirect()->to(base_url('aritmatika/perpangkatan'));
    }

}
