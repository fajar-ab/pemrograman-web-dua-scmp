<?php

namespace PemrogramanWeb\Repository;

use PemrogramanWeb\Entity\Mahasiswa;

class MahasiswaRepository
{

  public function __construct(
    private \mysqli $connection,
  ) {
  }

  public function selectAll()
  {
    $result = $this->connection->query("SELECT * FROM mahasiswa");
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function findByNim(string $nim)
  {
    $stmt = $this->connection->prepare("SELECT * FROM mahasiswa WHERE nim = ?");
    $stmt->execute([$nim]);
    $result = $stmt->get_result();

    return $result->fetch_all(MYSQLI_ASSOC)[0];
  }

  public function insert(Mahasiswa $mahasiswa)
  {
    $query = <<<___SQL
    INSERT INTO mahasiswa (nim, nama, jenis_kelamin, email, no_telp, kode_jenjang, kode_jurusan, id_pekerjaan)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?)
    ___SQL;

    $stmt = $this->connection->prepare($query);
    $stmt->bind_param("sssssssi", $nim, $nama, $jenisKelamin, $email, $nomorTelpon, $kodeJenjang, $kodeJurusan, $idPekerjaan);

    $nim          = $mahasiswa->getNim();
    $nama         = $mahasiswa->getNama();
    $jenisKelamin = $mahasiswa->getJenisKelamin();
    $email        = $mahasiswa->getEmail();
    $nomorTelpon  = $mahasiswa->getNomorTelpon();
    $kodeJenjang  = $mahasiswa->getKodeJenjang();
    $kodeJurusan  = $mahasiswa->getKodeJurusan();
    $idPekerjaan  = $mahasiswa->getIdPekerjaan();
    $stmt->execute();

    return $stmt->affected_rows;
  }

  public function update(Mahasiswa $mahasiswa)
  {
    $query = <<<___SQL
    UPDATE mahasiswa
    SET nama = ?, jenis_kelamin = ?, email = ?, no_telp = ?, kode_jenjang = ?, kode_jurusan = ?, id_pekerjaan = ?
    WHERE nim = ?
    ___SQL;

    $stmt = $this->connection->prepare($query);
    $stmt->bind_param("ssssssis", $nama, $jenisKelamin, $email, $nomorTelpon, $kodeJenjang, $kodeJurusan, $idPekerjaan, $nim);

    $nim          = $mahasiswa->getNim();
    $nama         = $mahasiswa->getNama();
    $jenisKelamin = $mahasiswa->getJenisKelamin();
    $email        = $mahasiswa->getEmail();
    $nomorTelpon  = $mahasiswa->getNomorTelpon();
    $kodeJenjang  = $mahasiswa->getKodeJenjang();
    $kodeJurusan  = $mahasiswa->getKodeJurusan();
    $idPekerjaan  = $mahasiswa->getIdPekerjaan();

    $stmt->execute();

    return $stmt->affected_rows;
  }

  public function delete(string $nim)
  {
    $query = <<<___SQL
    DELETE FROM `mahasiswa` WHERE nim = ?
    ___SQL;

    $stmt = $this->connection->prepare($query);
    $stmt->execute([$nim]);

    return $stmt->affected_rows;
  }

  public function joinJenjangJurusanPekerjaan()
  {
    $query = <<<___SQL
    SELECT m.*, jg.nama AS jenjang, jr.nama AS jurusan, p.nama AS pekerjaan
    FROM mahasiswa m
      JOIN jenjang jg ON (m.kode_jenjang = jg.kode)
      JOIN jurusan jr ON (m.kode_jurusan = jr.kode)
      JOIN pekerjaan p ON (m.id_pekerjaan = p.id);
    ___SQL;

    $result = $this->connection->query($query);
    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
