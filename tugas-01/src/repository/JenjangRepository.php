<?php

namespace PemrogramanWeb\Repository;

class JenjangRepository
{
  public function __construct(
    private \mysqli $connection
  ) {
  }

  public function selectAll()
  {
    $result = $this->connection->query("SELECT * FROM `jenjang`");
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function selectAllWithMahasiswa(string $nim)
  {
    $query = <<<___SQL
    SELECT mhs.nim, jenjang.*
    FROM (
        SELECT *
        FROM mahasiswa
        WHERE nim = ?
      ) AS mhs
      RIGHT JOIN jenjang ON (mhs.kode_jenjang = jenjang.kode);
    ___SQL;

    $stmt = $this->connection->prepare($query);
    $stmt->execute([$nim]);
    $resutl = $stmt->get_result();

    return $resutl->fetch_all(MYSQLI_ASSOC);
  }
}
