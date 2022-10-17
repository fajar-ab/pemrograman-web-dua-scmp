<?php

use PemrogramanWeb\Connection\Database;
use PemrogramanWeb\Repository\MahasiswaRepository;

require_once __DIR__ . "/../../vendor/autoload.php";
$mahasiswaDao = new MahasiswaRepository(Database::getConnection());

?>

<div class="container mt-5">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Data Mahasiswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?halaman=tambah">Form Mahasiswa</a>
    </li>
  </ul>

  <div class="card mt-3">
    <div class="card-header fw-bold">Data Mahasiswa</div>
    <div class="card-body">
      <div class="table-responsive">


        <table class="table">
          <thead>
            <tr>
              <th class="text-nowrap" scope="col">NIM</th>
              <th class="text-nowrap" scope="col">Nama</th>
              <th class="text-nowrap" scope="col">Jenis kelamin</th>
              <th class="text-nowrap" scope="col">Email</th>
              <th class="text-nowrap" scope="col">No.Telp</th>
              <th class="text-nowrap" scope="col">Jenjang</th>
              <th class="text-nowrap" scope="col">Jurusan</th>
              <th class="text-nowrap" scope="col">Pekerjaan</th>
              <th class="text-nowrap text-center" scope="col">Aksi</th>

            </tr>
          </thead>
          <tbody>
            <?php foreach ($mahasiswaDao->joinJenjangJurusanPekerjaan() as $mahasiswa) : ?>
              <tr>
                <td class="text-nowrap"><?= $mahasiswa["nim"] ?></td>
                <td class="text-nowrap"><?= ucwords($mahasiswa["nama"]) ?></td>
                <td class="text-nowrap"><?= $mahasiswa["jenis_kelamin"] === "l" ? "Laki-Laki" : "Perempuan" ?></td>
                <td class="text-nowrap"><?= $mahasiswa["email"] ?></td>
                <td class="text-nowrap"><?= $mahasiswa["no_telp"] ?></td>
                <td class="text-nowrap"><?= ucwords($mahasiswa["jenjang"]) ?></td>
                <td class="text-nowrap"><?= ucwords($mahasiswa["jurusan"]) ?></td>
                <td class="text-nowrap"><?= ucwords($mahasiswa["pekerjaan"]) ?></td>
                <td class="text-nowrap">
                  <a class="btn btn-link btn-rounded btn-sm fw-bold" href="?halaman=ubah&nim=<?= $mahasiswa["nim"] ?>">Ubah</a>
                  <a class="btn btn-link btn-rounded btn-sm fw-bold" href="?halaman=hapus&nim=<?= $mahasiswa["nim"] ?>">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>


          </tbody>
        </table>
      </div>
    </div>
  </div>


</div>