<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Belajar Matematika'

        ];
        return view('dashboard', $data);
    }

    //--------------------------------------------------------------------

}
