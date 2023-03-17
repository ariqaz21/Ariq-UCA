<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Bangke extends BaseController
{
    public function index()
    {
        return view('halaman1');
    }

    public function data()
    {
        $namakita = $this->request->getVar('nama');
        $alamat = $this->request->getVar('alamat');
        echo $namakita;
        echo "<br>";
        echo $alamat;
    }
}
