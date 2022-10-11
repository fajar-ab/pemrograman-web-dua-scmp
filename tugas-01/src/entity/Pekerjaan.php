<?php

namespace PemrogramanWeb\Entity;

class Pekerjaan
{
  public function __construct(
    private string $id,
    private string $nama,
  ) {
  }

  /**
   * Get the value of id
   */
  public function getKode()
  {
    return $this->id;
  }

  /**
   * Get the value of nama
   */
  public function getNama()
  {
    return $this->nama;
  }
}
