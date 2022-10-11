<?php

namespace PemrogramanWeb\Entity;

class Jenjang
{
  public function __construct(
    private string $kode,
    private string $nama,
  ) {
  }

  /**
   * Get the value of kode
   */
  public function getKode()
  {
    return $this->kode;
  }

  /**
   * Get the value of nama
   */
  public function getNama()
  {
    return $this->nama;
  }
}
