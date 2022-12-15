<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Faker\Factory;

class Control extends BaseController
{
    public function index()
    {
        $data = [
            "menu_id" => 1
        ];

        return view("pages/index", $data);
    }

    public function biodata($nama = "", $umur = 0)
    {

        $data = [
            "menu_id" => 2,
            "nama" => $nama,
            "umur" => $umur
        ];

        return view("pages/biodata", $data);
    }

    public function contact()
    {
        $faker = Factory::create("id_ID");

        $contactDummy = [];
        for ($i = 0; $i < 10; $i++) {
            $contactDummy[] = [
                "nama" => $faker->name(),
                "alamat" => $faker->address(),
                "kota" => $faker->city(),
                "no_hp" => $faker->phoneNumber(),
            ];
        }

        $data = [
            "menu_id" => 3,
            "contacts" => $contactDummy
        ];

        return view("pages/contact", $data);
    }
}
