<!-- content -->

<div class="container">
  <h1>Contact</h1>

  <table class="table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>No Hp</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($contacts as $contact) : ?>
        <tr>
          <td><?= $contact["nama"] ?></td>
          <td><?= $contact["alamat"] ?></td>
          <td><?= $contact["kota"] ?></td>
          <td><?= $contact["no_hp"] ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<!-- content -->