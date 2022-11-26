<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        return view("pages/index", ["title" => "Home",]);
    }

    public function about($nama = "", $umur = 0)
    {

        $data = [
            "title" => "About",
            "nama" => $nama,
            "umur" => $umur
        ];

        return view("pages/about", $data);
    }

    public function contact()
    {

        $data = [
            "title" => "Contact",
            "contacts" => [
                [
                    "nama" => "Sundari Sukoco",
                    "alamat" => "Jl. Abdul Haris Nasution, Desa Ujung Gurap, Kecamatan Padangsidimpuan Batunadua",
                    "kota" => "Padangsidimpuan",
                    "no_hp" => "+6282899393928"
                ]
            ]
        ];

        return view("pages/contact", $data);
    }
}
