<?php

@$halaman = $_GET['halaman'];
@$aksi = $_GET['aksi'];

switch ($halaman) {
  case "tambah":
    include_once __DIR__ . "/mahasiswa/tambah.php";
    break;
  case "ubah":
    include_once __DIR__ . "/mahasiswa/ubah.php";
    break;
  case "hapus":
    include_once __DIR__ . "/mahasiswa/hapus.php";
    break;
  default:
    include_once __DIR__ . "/mahasiswa/tampil.php";
}
