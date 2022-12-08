<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Control extends BaseController
{
    public function index()
    {
        $data = [
            "nemu_id" => 1
        ];

        return view("control/index", $data);
    }

    public function biodata($nama = "", $umur = 0)
    {

        $data = [
            "nemu_id" => 2,
            "nama" => $nama,
            "umur" => $umur
        ];

        return view("control/biodata", $data);
    }

    public function contact()
    {
        $data = [
            "nemu_id" => 3,
        ];

        return view("control/contact", $data);
    }
}
