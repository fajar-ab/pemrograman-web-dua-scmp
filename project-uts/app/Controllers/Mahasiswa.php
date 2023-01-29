<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        return view("mahasiswa/index", [
            "title" => "Data Mahasiswa",
            "data" => $this->mahasiswaModel->getTabledata()
        ]);
    }

    public function tambah()
    {
        return view("mahasiswa/tambah", [
            "title" => "Tambah Mahasiswa",
            "select" => [
                "jenjang" => $this->mahasiswaModel->formSelect("jenjang"),
                "jurusan" => $this->mahasiswaModel->formSelect("jurusan"),
                "pekerjaan" => $this->mahasiswaModel->formSelect("pekerjaan"),
            ]
        ]);
    }

    public function ubah($nim)
    {
        $hasil = $this->mahasiswaModel->find($nim);

        return view("mahasiswa/ubah", [
            "title" => "Ubah Mahasiswa",
            "data" => $hasil,
            "select" => [
                "jenjang" => $this->mahasiswaModel->formSelectJenjang("jenjang"),
                "jurusan" => $this->mahasiswaModel->formSelectJurusan("jurusan"),
                "pekerjaan" => $this->mahasiswaModel->formSelectPekerjaan("pekerjaan"),
            ]
        ]);
    }

    public function simpan()
    {
        $this->mahasiswaModel->insert([
            "nim" => $this->request->getVar("nim"),
            "nama" => $this->request->getVar("nama"),
            "jenis_kelamin" => $this->request->getVar("jenis_kelamin"),
            "email" => $this->request->getVar("email"),
            "no_telp" => $this->request->getVar("no_telp"),
            "kode_jenjang" => $this->request->getVar("kode_jenjang"),
            "kode_jurusan" => $this->request->getVar("kode_jurusan"),
            "id_pekerjaan" => $this->request->getVar("id_pekerjaan"),
        ]);

        return redirect()->to("mahasiswa/index");
    }

    public function update()
    {

        $this->mahasiswaModel->replace([
            "nim" => $this->request->getVar("nim"),
            "nama" => $this->request->getVar("nama"),
            "jenis_kelamin" => $this->request->getVar("jenis_kelamin"),
            "email" => $this->request->getVar("email"),
            "no_telp" => $this->request->getVar("no_telp"),
            "kode_jenjang" => $this->request->getVar("kode_jenjang"),
            "kode_jurusan" => $this->request->getVar("kode_jurusan"),
            "id_pekerjaan" => $this->request->getVar("id_pekerjaan"),
        ]);

        return redirect()->to("mahasiswa/index");
    }

    public function hapus($nim)
    {
        $this->mahasiswaModel->delete($nim);
        return redirect()->to("mahasiswa/index");
    }
}
