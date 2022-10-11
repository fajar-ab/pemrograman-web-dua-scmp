CREATE TABLE mahasiswa (
  nim varchar(10) NOT NULL,
  nama varchar(100) NOT NULL,
  jenis_kelamin enum('l', 'p') NOT NULL,
  email varchar(100),
  no_telp varchar(15),
  kode_jenjang varchar(5) NOT NULL,
  kode_jurusan varchar(5) NOT NULL,
  id_pekerjaan int(11) NOT NULL,
  PRIMARY KEY (nim)
) ENGINE = InnoDB;


-- @block query
ALTER TABLE mahasiswa
ADD CONSTRAINT fk_mahasiawa_jenjang FOREIGN KEY (kode_jenjang) REFERENCES jenjang (kode),
  ADD CONSTRAINT fk_mahasiawa_jurusan FOREIGN KEY (kode_jurusan) REFERENCES jurusan (kode),
  ADD CONSTRAINT fk_mahasiawa_pekerjaan FOREIGN KEY (id_pekerjaan) REFERENCES pekerjaan (id);


-- @block query
DESC mahasiswa;