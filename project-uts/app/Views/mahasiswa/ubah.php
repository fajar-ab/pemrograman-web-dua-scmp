<?= $this->extend("layouts/template") ?>
<?= $this->section("content") ?>

<!-- content -->
<div class="container">
  <div class="card mt-5">
    <div class="card-header text-muted user-select-none">
      <i class="fa-solid fa-list-check me-2"></i>
      From Ubah Mahasiswa
    </div>

    <div class="card-body px-md-5">
      <div class="row">
        <div class="col-md-9 mx-auto">
          <form action="/mahasiswa/update" method="post">

            <div class="mb-3">
              <label for="inputNim" class="form-label">NIM</label>
              <input type="text" class="form-control " readonly id="inputNim" name="nim" require value="<?= $data['nim'] ?>">
            </div>

            <div class="mb-3">
              <label for="inputNama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="inputNama" name="nama" require value="<?= $data["nama"] ?>">
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk1" value="l" checked>
                <label class="form-check-label" for="jk1">
                  Laki-Laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk2" value="p">
                <label class="form-check-label" for="jk2">
                  Perempuan
                </label>
              </div>
            </div>

            <div class="mb-3">
              <label for="inputEmail" class="form-label">Email</label>
              <input type="text" class="form-control" id="inpuEmail" name="email" require value="<?= $data["email"] ?>">
            </div>

            <div class="mb-3">
              <label for="inpuTelp" class="form-label">No.telp</label>
              <input type="text" class="form-control" id="inputTelp" name="no_telp" require value="<?= $data["no_telp"] ?>">
            </div>

            <div class="mb-3">
              <label for="inputJenjang" class="form-label">Jenjang</label>
              <select class="form-select" name="kode_jenjang">
                <?php foreach ($select["jenjang"] as $jenjang) : ?>
                  <option value="<?= $jenjang->kode ?>" <?= $jenjang->option ?? "" ?>><?= ucwords($jenjang->nama) ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="mb-3">
              <label for="inputJurusan" class="form-label">Jurusan</label>
              <select class="form-select" name="kode_jurusan">
                <?php foreach ($select["jurusan"] as $jurusan) : ?>
                  <option value="<?= $jurusan->kode ?>" <?= $jurusan->option ?? "" ?>><?= ucwords($jurusan->nama) ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="mb-3">
              <label for="inputPekerjaan" class="form-label">Pekerjaan</label>
              <select class="form-select" name="id_pekerjaan">
                <?php foreach ($select["pekerjaan"] as $pekerjaan) : ?>
                  <option value="<?= $pekerjaan->id ?>" <?= $pekerjaan->option ?? "" ?>><?= ucwords($pekerjaan->nama) ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div>
              <button class="btn btn-primary" type="submit">Ubah</button>
              <button class="btn btn-success" type="reset">Batal</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content -->

<?= $this->endSection() ?>