<?php

use PemrogramanWeb\Connection\Database;
use PemrogramanWeb\Repository\MahasiswaRepository;

require_once __DIR__ . "/../../vendor/autoload.php";

$nim = $_GET["nim"];
$mahasiswaDao = new MahasiswaRepository(Database::getConnection());
$result = $mahasiswaDao->delete($nim);

if ($result) {
  header("Location: index.php");
}
