<?= $this->extend("components/template") ?>

<?= $this->section("content") ?>

<div class="container">
  <div class="card mt-4">
    <div class="card-header">Contact</div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kota</th>
            <th scope="col">No.HP</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1 ?>
          <?php foreach ($contacts as $contact) : ?>
            <tr>
              <th scope="row"><?= $no++ ?></th>
              <td><?= $contact["nama"] ?></td>
              <td><?= $contact["alamat"] ?></td>
              <td><?= $contact["kota"] ?></td>
              <td><?= $contact["no_hp"] ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?= $this->endSection() ?>