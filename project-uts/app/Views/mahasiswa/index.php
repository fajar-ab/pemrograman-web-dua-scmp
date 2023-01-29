<?= $this->extend("layouts/template") ?>
<?= $this->section("content") ?>

<!-- content -->
<div class="container">
  <!-- card table -->
  <div class="card mt-5">
    <div class="card-header">
      <div class="row d-flex align-items-center">
        <div class="col-lg-8 user-select-none text-muted">
          <i class="fa-solid fa-table me-2"></i>
          List Matakuliah
        </div>
        <div class="col-lg-4 mt-lg-0 mt-2">
          <!-- form cari -->
          <form action="" method="post" autocomplete="off">
            <div class="input-group rounded">
              <input type="search" class="form-control form-control-sm rounded" placeholder="Cari" aria-label="Search" aria-describedby="search-addon" name="keyword" />
              <button class="input-group-text border-0" id="search-addon" type="submit" name="cari">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="card-body">

      <!-- table matakuliah -->
      <div class="table-responsive">
        <table class="table text-nowrap">
          <thead>
            <tr>
              <th class="text-nowrap" scope="col">NIM</th>
              <th class="text-nowrap" scope="col">Nama</th>
              <th class="text-nowrap" scope="col">Jenis kelamin</th>
              <th class="text-nowrap" scope="col">Email</th>
              <th class="text-nowrap" scope="col">No.Telp</th>
              <th class="text-nowrap" scope="col">Jenjang</th>
              <th class="text-nowrap" scope="col">Jurusan</th>
              <th class="text-nowrap" scope="col">Pekerjaan</th>
              <th class="text-nowrap text-center" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $mahasiswa) : ?>
              <tr>
                <td><?= $mahasiswa->nim ?></td>
                <td><?= $mahasiswa->nama ?></td>
                <td>
                  <?= $mahasiswa->jenis_kelamin === 'l' ? "Laki-laki" : "Perempuan" ?>
                </td>
                <td>
                  <a href="mailto:<?= $mahasiswa->email ?>">
                    <?= $mahasiswa->email ?>
                  </a>
                </td>
                <td><?= $mahasiswa->no_telp ?></td>
                <td><?= $mahasiswa->jenjang ?></td>
                <td><?= $mahasiswa->jurusan ?></td>
                <td><?= $mahasiswa->pekerjaan ?></td>
                <td>
                  <div>
                    <a class="btn btn-link btn-rounded btn-sm fw-bold" href="<?= base_url("mahasiswa/ubah/{$mahasiswa->nim}") ?>">ubah</a>
                    <a class="btn btn-link btn-rounded btn-sm fw-bold" onclick="confirm(`apakah ingin menghapus data`)" href="<?= base_url("mahasiswa/hapus/{$mahasiswa->nim}") ?>">hapus</a>
                  </div>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- card table -->
</div>
<!-- content -->
<?= $this->endSection() ?>