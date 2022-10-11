CREATE TABLE jenjang (
  kode varchar(5) NOT NULL,
  nama varchar(30) NOT NULL,
  PRIMARY KEY (kode)
) ENGINE = InnoDB;


-- @block query
DESC jenjang;


-- @block query
INSERT INTO `jenjang` (`kode`, `nama`)
VALUES ('D1', 'diploma 1'),
  ('D2', 'diploma 2'),
  ('D3', 'diploma 3'),
  ('S1', 'sarjana');


-- @block query
SELECT NVL2(mhs.kode_jenjang, "selected", NULL) AS `option`,
  jenjang.*
FROM (
    SELECT *
    FROM mahasiswa
    WHERE nim = "2019010012"
  ) AS mhs
  RIGHT JOIN jenjang ON (mhs.kode_jenjang = jenjang.kode);