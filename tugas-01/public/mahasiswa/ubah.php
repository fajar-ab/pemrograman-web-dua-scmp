<?php

use PemrogramanWeb\Builder\MahasiswaBuilder;
use PemrogramanWeb\Connection\Database;
use PemrogramanWeb\Repository\JenjangRepository;
use PemrogramanWeb\Repository\JurusanRepository;
use PemrogramanWeb\Repository\MahasiswaRepository;
use PemrogramanWeb\Repository\PekerjaanRepository;

require_once __DIR__ . "/../../vendor/autoload.php";

$nim = $_GET["nim"];
$mahasiswaDao = new MahasiswaRepository(Database::getConnection());
$dataMahaiswa = $mahasiswaDao->findByNim($nim);

$jenjangDao = new JenjangRepository(Database::getConnection());
$referenceJenjang = $jenjangDao->selectAllWithMahasiswa(...);

$jurusanDao = new JurusanRepository(Database::getConnection());
$referenceJurusan = $jurusanDao->selectAllWithMahasiswa(...);

$pekerjaanDao = new PekerjaanRepository(Database::getConnection());
$referencePekerjaan = $pekerjaanDao->selectAllWithMahasiswa(...);

function clearInput($value)
{
  return trim(htmlspecialchars($value));
}

if (isset($_POST["submit"])) {

  $mahasiswa = (new MahasiswaBuilder)
    ->setNim(clearInput($_POST["nim"]))
    ->setNama(clearInput($_POST["nama"]))
    ->setJenisKelamin(clearInput($_POST["jenis_kelamin"]))
    ->setEmail(clearInput($_POST["email"]))
    ->setNomorTelpon(clearInput($_POST["no_telp"]))
    ->setKodeJenjang(clearInput($_POST["kode_jenjang"]))
    ->setKodeJurusan(clearInput($_POST["kode_jurusan"]))
    ->setIdPekerjaan((int) clearInput($_POST["id_pekerjaan"]))
    ->build();

  $result = $mahasiswaDao->update($mahasiswa);

  if ($result) {
    header("Location: index.php");
  }
}


?>



<div class="container mt-5">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Data Mahasiswa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="?halaman=form">Form Mahasiswa</a>
    </li>
  </ul>

  <div class="card mt-3">
    <div class="card-header fw-bold">Form Ubah Mahasiswa
    </div>
    <div class="card-body">
      <form action="" method="post">

        <div class="mb-3">
          <label for="inputNim" class="form-label">NIM</lbel>
            <input type="text" class="form-control" id="inputNim" name="nim" value="<?= $dataMahaiswa["nim"] ?>" readonly>
        </div>

        <div class="mb-3">
          <label for="inputNama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="inputNama" name="nama" value="<?= $dataMahaiswa["nama"] ?>" require>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Jenis Kelamin</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="l" <?= $dataMahaiswa["jenis_kelamin"] === "l" ? "checked" : "" ?>>
            <label class="form-check-label" for="flexRadioDefault1">
              Laki-Laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" value="p" <?= $dataMahaiswa["jenis_kelamin"] === "p" ? "checked" : "" ?>>
            <label class="form-check-label" for="flexRadioDefault2">
              Perempuan
            </label>
          </div>
        </div>

        <div class="mb-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="text" class="form-control" id="inpuEmail" name="email" require value="<?= $dataMahaiswa["email"] ?>">
        </div>

        <div class="mb-3">
          <label for="inpuTelp" class="form-label">No.telp</label>
          <input type="text" class="form-control" id="inputTelp" name="no_telp" require value="<?= $dataMahaiswa["no_telp"] ?>">
        </div>

        <div class="mb-3">
          <label for="inputJenjang" class="form-label">Jenjang</label>
          <select class="form-select" name="kode_jenjang">
            <?php foreach ($referenceJenjang($nim) as $jenjang) : ?>
              <option value="<?= $jenjang["kode"] ?>" <?= $jenjang["option"] ?? "" ?>><?= ucwords($jenjang["nama"]) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="inputJurusan" class="form-label">Jurusan</label>
          <select class="form-select" name="kode_jurusan">
            <?php foreach ($referenceJurusan($nim) as $jurusan) : ?>
              <option value="<?= $jurusan["kode"] ?>" <?= $jurusan["option"] ?? "" ?>><?= ucwords($jurusan["nama"]) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="inputPekerjaan" class="form-label">Pekerjaan</label>
          <select class="form-select" name="id_pekerjaan">
            <?php foreach ($referencePekerjaan($nim) as $pekerjaan) : ?>
              <option value="<?= $pekerjaan["id"] ?>" <?= $pekerjaan["option"] ?? "" ?>><?= ucwords($pekerjaan["nama"]) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <button class="btn btn-primary" type="submit" name="submit">Ubah</button>

      </form>
    </div>
  </div>
</div>