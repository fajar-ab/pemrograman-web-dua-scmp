CREATE TABLE pekerjaan (
  id int(11) NOT NULL,
  nama varchar(100) NOT NULL
) ENGINE = InnoDB;


-- @block query
DESC pekerjaan;


-- @block query
SELECT NVL2(mhs.id_pekerjaan, "selected", NULL) AS OPTION,
  pekerjaan.*
FROM (
    SELECT *
    FROM mahasiswa
    WHERE nim = '2019010012'
  ) AS mhs
  RIGHT JOIN pekerjaan ON (mhs.id_pekerjaan = pekerjaan.id);


-- @block query
INSERT INTO pekerjaan (id, nama)
VALUES (1, 'belum/tidak bekerja'),
  (2, 'mengurus rumah tangga'),
  (3, 'pelajar/mahasiswa'),
  (4, 'pensiunan'),
  (5, 'pegawai negeri sipil'),
  (6, 'tentara nasional indonesia'),
  (7, 'kepolisian ri'),
  (8, 'perdagangan'),
  (9, 'petani/pekebun'),
  (10, 'peternak'),
  (11, 'nelayan/perikanan'),
  (12, 'industri'),
  (13, 'konstruksi'),
  (14, 'transportasi'),
  (15, 'karyawan swasta'),
  (16, 'karyawan bumn'),
  (17, 'karyawan bumd'),
  (18, 'karyawan honorer'),
  (19, 'buruh harian lepas'),
  (20, 'buruh tani/perkebunan'),
  (21, 'buruh nelayan/perikanan'),
  (22, 'buruh peternakan'),
  (23, 'pembantu rumah tangga'),
  (24, 'tukang cukur'),
  (25, 'tukang listrik'),
  (26, 'tukang batu'),
  (27, 'tukang kayu'),
  (28, 'tukang sol sepatu'),
  (29, 'tukang las/pandai besi'),
  (30, 'tukang jahit'),
  (31, 'tukang gigi'),
  (32, 'penata rias'),
  (33, 'penata busana'),
  (34, 'penata rambut'),
  (35, 'mekanik'),
  (36, 'seniman'),
  (37, 'tabib'),
  (38, 'paraji'),
  (39, 'perancang busana'),
  (40, 'penterjemah'),
  (41, 'imam mesjid'),
  (42, 'pendeta'),
  (43, 'pastor'),
  (44, 'wartawan'),
  (45, 'ustadz/mubaligh'),
  (46, 'juru masak'),
  (47, 'promotor acara'),
  (48, 'anggota dpr-ri'),
  (49, 'anggota dpd'),
  (50, 'anggota bpk'),
  (51, 'presiden'),
  (52, 'wakil presiden'),
  (53, 'anggota mahkamah konstitusi'),
  (54, 'anggota kabinet/kementerian'),
  (55, 'duta besar'),
  (56, 'gubernur'),
  (57, 'wakil gubernur'),
  (58, 'bupati'),
  (59, 'wakil bupati'),
  (60, 'walikota'),
  (61, 'wakil walikota'),
  (62, 'anggota dprd provinsi'),
  (63, 'anggota dprd kabupaten/kota'),
  (64, 'dosen'),
  (65, 'guru'),
  (66, 'pilot'),
  (67, 'pengacara'),
  (68, 'notaris'),
  (69, 'arsitek'),
  (70, 'akuntan'),
  (71, 'konsultan'),
  (72, 'dokter'),
  (73, 'bidan'),
  (74, 'perawat'),
  (75, 'apoteker'),
  (76, 'psikiater/psikolog'),
  (77, 'penyiar televisi'),
  (78, 'penyiar radio'),
  (79, 'pelaut'),
  (80, 'peneliti'),
  (81, 'sopir'),
  (82, 'pialang'),
  (83, 'paranormal'),
  (84, 'pedagang'),
  (85, 'perangkat desa'),
  (86, 'kepala desa'),
  (87, 'biarawati'),
  (88, 'wiraswasta'),
  (89, 'lainnya');