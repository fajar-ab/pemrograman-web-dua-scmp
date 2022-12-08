<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Control extends BaseController
{
    public function index()
    {
        $data = [
            "menu_id" => 1
        ];


        echo view("layouts/header", $data);
        echo view("pages/index");
        echo view("layouts/footer");
    }

    public function biodata($nama = "", $umur = 0)
    {

        $data = [
            "menu_id" => 2,
            "nama" => $nama,
            "umur" => $umur
        ];

        echo view("layouts/header", $data);
        echo view("pages/biodata", $data);
        echo view("layouts/footer");
    }

    public function contact()
    {

        $data = [
            "menu_id" => 3,
            "contacts" => [
                [
                    "nama" => "Fajar Fadilah",
                    "alamat" => "Jalan Simagambat Sipagimbar, Sidapdap, Kecamatan Saipar Dolok Hole",
                    "kota" => "Sipirok",
                    "no_hp" => "+6281263254455"
                ],
                [
                    "nama" => "Agus Setiawan",
                    "alamat" => "Jalan Simagambat Sipagimbar, Sipagimbar, Kecamatan Saipar Dolok Hole",
                    "kota" => "Sipirok",
                    "no_hp" => "+6281263234343"
                ],
                [
                    "nama" => "Dimas Syuhada",
                    "alamat" => "Jalan Simagambat Sipagimbar, Simanosor, Kecamatan Saipar Dolok Hole",
                    "kota" => "Sipirok",
                    "no_hp" => "+6281263253829"
                ],
                [
                    "nama" => "Anisa Aulua",
                    "alamat" => "Jalan Merdeka, Binjai Utara",
                    "kota" => "Binjai",
                    "no_hp" => "+628126388323"
                ],
            ]
        ];

        echo view("layouts/header", $data);
        echo view("pages/contact", $data);
        echo view("layouts/footer");
    }
}
