<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $allowedFields = [
        "nim", "nama", "jenis_kelamin", "email", "no_telp", "kode_jenjang", "kode_jurusan", "id_pekerjaan",
    ];

    public function getTabledata()
    {
        $query = <<<___SQL
        SELECT m.*, jg.nama AS jenjang, jr.nama AS jurusan, p.nama AS pekerjaan
            FROM mahasiswa m
            JOIN jenjang jg ON (m.kode_jenjang = jg.kode)
            JOIN jurusan jr ON (m.kode_jurusan = jr.kode)
            JOIN pekerjaan p ON (m.id_pekerjaan = p.id);
        ___SQL;

        $result = $this->db->query($query);

        return $result->getResultObject();
    }

    public function formSelect(string $label)
    {
        $result = $this->db->query("SELECT * FROM {$label}");
        return $result->getResultObject();
    }

    public function formSelectJenjang($nim)
    {
        $sql = <<<___SQL
        SELECT NVL2(mhs.kode_jenjang, "selected", NULL) AS `option`,
            jenjang.*
            FROM (
                SELECT *
                FROM mahasiswa
                WHERE nim = ?
            ) AS mhs
            RIGHT JOIN jenjang ON (mhs.kode_jenjang = jenjang.kode);
        ___SQL;

        $result = $this->db->query($sql, [$nim]);
        return $result->getResultObject();
    }

    public function formSelectJurusan($nim)
    {
        $sql = <<<___SQL
        SELECT NVL2(mhs.kode_jurusan, "selected", NULL) AS `option`,
            jurusan.*
            FROM (
                SELECT *
                FROM mahasiswa
                WHERE nim = ?
            ) AS mhs
            RIGHT JOIN jurusan ON (mhs.kode_jurusan = jurusan.kode);
        ___SQL;

        $result = $this->db->query($sql, [$nim]);
        return $result->getResultObject();
    }

    public function formSelectPekerjaan($nim)
    {
        $sql = <<<___SQL
        SELECT NVL2(mhs.id_pekerjaan, "selected", NULL) AS `option`,
            pekerjaan.*
            FROM (
                SELECT *
                FROM mahasiswa
                WHERE nim = ?
            ) AS mhs
            RIGHT JOIN pekerjaan ON (mhs.id_pekerjaan = pekerjaan.id);
        ___SQL;

        $result = $this->db->query($sql, [$nim]);
        return $result->getResultObject();
    }
}
