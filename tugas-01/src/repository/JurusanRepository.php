<?php

namespace PemrogramanWeb\Repository;

class JurusanRepository
{

  public function __construct(
    private \mysqli $connection
  ) {
  }

  public function selectAll()
  {
    $result = $this->connection->query("SELECT * FROM `jurusan`");
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function selectAllWithMahasiswa(string $nim)
  {
    $query = <<<___SQL
    SELECT mhs.nim, jurusan.*
    FROM (
        SELECT *
        FROM mahasiswa
        WHERE nim = ?
      ) AS mhs
      RIGHT JOIN jurusan ON (mhs.kode_jurusan = jurusan.kode);
    ___SQL;

    $stmt = $this->connection->prepare($query);
    $stmt->execute([$nim]);
    $resutl = $stmt->get_result();

    return $resutl->fetch_all(MYSQLI_ASSOC);
  }
}
