<?php

namespace PemrogramanWeb\Repository;

class PekerjaanRepository
{

  public function __construct(
    private \mysqli $connection,
  ) {
  }

  public function selectAll()
  {
    $result = $this->connection->query("SELECT * FROM `pekerjaan`");
    return $result->fetch_all(MYSQLI_ASSOC);
  }

  public function selectAllWithMahasiswa(string $nim)
  {
    $query = <<<___SQL
    SELECT NVL2(mhs.id_pekerjaan, "selected", NULL) AS option,
      pekerjaan.*
    FROM (
        SELECT *
        FROM mahasiswa
        WHERE nim = ?
      ) AS mhs
      RIGHT JOIN pekerjaan ON (mhs.id_pekerjaan = pekerjaan.id)
    ___SQL;

    $stmt = $this->connection->prepare($query);
    $stmt->execute([$nim]);
    $result = $stmt->get_result();

    return $result->fetch_all(MYSQLI_ASSOC);
  }
}
