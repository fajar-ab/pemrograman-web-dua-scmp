<?php

namespace PemrogramanWeb\Entity;

class Mahasiswa
{
  public function __construct(
    private string $nim,
    private string $nama,
    private string $jenisKelamin,
    private string $email,
    private string $nomorTelpon,
    private string $kodeJenjang,
    private string $kodeJurusan,
    private int $idPekerjaan,
  ) {
  }

  /**
   * Get the value of nim
   */
  public function getNim()
  {
    return $this->nim;
  }

  /**
   * Get the value of nama
   */
  public function getNama()
  {
    return $this->nama;
  }

  /**
   * Get the value of jenisKelamin
   */
  public function getJenisKelamin()
  {
    return $this->jenisKelamin;
  }

  /**
   * Get the value of email
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Get the value of nomorTelpon
   */
  public function getNomorTelpon()
  {
    return $this->nomorTelpon;
  }

  /**
   * Get the value of kodeJenjang
   */
  public function getKodeJenjang()
  {
    return $this->kodeJenjang;
  }

  /**
   * Get the value of kodeJurusan
   */
  public function getKodeJurusan()
  {
    return $this->kodeJurusan;
  }

  /**
   * Get the value of idPekerjaan
   */
  public function getIdPekerjaan()
  {
    return $this->idPekerjaan;
  }
}
