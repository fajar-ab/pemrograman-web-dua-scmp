CREATE TABLE jurusan (
  kode varchar(5) NOT NULL,
  nama varchar(30) NOT NULL,
  PRIMARY KEY (kode)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;


-- @block query
INSERT INTO `jurusan` (`kode`, `nama`)
VALUES ('SI', 'sistem informasi'),
  ('TI', 'teknik informatika');


-- @block query
SELECT NVL2(mhs.kode_jurusan, "selected", NULL) AS `option`,
  jurusan.*
FROM (
    SELECT *
    FROM mahasiswa
    WHERE nim = "2019010012"
  ) AS mhs
  RIGHT JOIN jurusan ON (mhs.kode_jurusan = jurusan.kode);