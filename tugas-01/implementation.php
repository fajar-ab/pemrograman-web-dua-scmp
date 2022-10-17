<?php

use PemrogramanWeb\Builder\MahasiswaBuilder;
use PemrogramanWeb\Connection\Database;
use PemrogramanWeb\Repository\JenjangRepository;
use PemrogramanWeb\Repository\JurusanRepository;
use PemrogramanWeb\Repository\MahasiswaRepository;
use PemrogramanWeb\Repository\PekerjaanRepository;

require_once "vendor/autoload.php";

$mahasiswa = (new MahasiswaBuilder)
  ->setNim("2019010012")
  ->setNama("fajar fadilah")
  ->setJenisKelamin("l")
  ->setEmail("fajarfadilah@gmail.com")
  ->setNomorTelpon("081375755814")
  ->setKodeJenjang("S1")
  ->setKodeJurusan("SI")
  ->setIdPekerjaan(1)
  ->build();

$mahasiswaDao = new MahasiswaRepository(Database::getConnection());


// *menampilkan data mahasiswa, @return array
echo json_encode($mahasiswaDao->selectAll());

// *menampilkan data berdasarkan nim @return array
// echo json_encode($mahasiswaDao->findByNim("2019010012"));

// *menapilkan data mahasiswa dengan jurusan dan pekerjaan, @return array
// echo json_encode($mahasiswaDao->joinJurusanAndPekerjaan());

// *menapilkan data mahasiswa dengan jenjang, jurusan dan pekerjaan, @return array
// echo json_encode($mahasiswaDao->joinJenjangJurusanPekerjaan());

// *tambah data mahasiswa, @return 1 jika berhasil
// echo $mahasiswaDao->insert($mahasiswa);

// *ubah data mahasiswa, @return 1 jika berhasil
// echo $mahasiswaDao->update($mahasiswa);

// *hapus data mahasiswa, @return 1 jika berhasil
// echo $mahasiswaDao->delete($mahasiswa->getNim()); // string nim-nya

$pekerjaanDao = new PekerjaanRepository(Database::getConnection());

// *menampilkan data pekerjaan, @return array
// echo json_encode($pekerjaanDao->selectAll());

// *menampilkan data pekerjaan untuk fungsi select | bedasarkan nim, @return array
// echo json_encode($pekerjaanDao->selectAllWithMahasiswa($mahasiswa->getNim()));


$jurusanDao = new JurusanRepository((Database::getConnection()));

// *menampilkan data jurusan, @return array
// echo json_encode($jurusanDao->selectAll());

// *menampilkan data jurusan untuk fungsi select | bedasarkan nim, @return array
// echo json_encode($jurusanDao->selectAllWithMahasiswa($mahasiswa->getNim()));


$jenjangDao = new JenjangRepository(Database::getConnection());

// *menampilkan data jenjang, @return array
// echo json_encode($jenjangDao->selectAll());

// *menampilkan data jenjang untuk fungsi select | bedasarkan nim, @return array
// echo json_encode($jenjangDao->selectAllWithMahasiswa($mahasiswa->getNim()));
