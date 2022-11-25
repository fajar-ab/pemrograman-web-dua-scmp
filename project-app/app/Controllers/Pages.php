<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        echo view("components/header", ["title" => "Home"]);
        echo view("pages/index");
        echo view("components/footer");
    }

    public function about($nama = "", $umur = 0)
    {
        $data = [
            "title" => "About",
            "nama" => $nama,
            "umur" => $umur
        ];


        echo view("components/header", $data);
        echo view("pages/about", $data);
        echo view("components/footer");
    }
}
