<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Coba extends BaseController
{

    public function index()
    {
        echo "Ini adalah method index dari controler coba";
    }

    public function about($nama = "", $umur = 0)
    {
        echo "Hello nama saya $nama, umur saya $umur";
    }
}
