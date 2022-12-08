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

        return view("pages/contact", $data);
    }
}
