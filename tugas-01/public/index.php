<?php

use PemrogramanWeb\Connection\Database;
use PemrogramanWeb\Repository\PekerjaanRepository;

require "../vendor/autoload.php";

$pekerjaanDao = new PekerjaanRepository(Database::getConnection());
$referenceByNim = $pekerjaanDao->selectAllWithMahasiswa(...);


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

  <div class="container mt-5">
    <select class="form-select" aria-label="Default select example">
      <?php foreach ($referenceByNim("2019010012") as $pekerjaan) : ?>
        <option value="<?= $pekerjaan["id"] ?>" <?= $pekerjaan["option"] ?? "" ?>><?= $pekerjaan["nama"] ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>