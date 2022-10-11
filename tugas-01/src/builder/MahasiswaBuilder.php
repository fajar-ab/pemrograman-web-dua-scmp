<?php

namespace PemrogramanWeb\Builder;

use PemrogramanWeb\Entity\Mahasiswa;

class MahasiswaBuilder
{
  private string $nim;
  private string $nama;
  private string $jenisKelamin;
  private ?string $email = null;
  private ?string $nomorTelpon = null;
  private string $kodeJenjang = "";
  private string $kodeJurusan = "";
  private int $idPekerjaan = 89; // lainnya

  /**
   * Set the value of nim
   *
   * @return  self
   */
  public function setNim($nim)
  {
    $this->nim = $nim;

    return $this;
  }

  /**
   * Set the value of nama
   *
   * @return  self
   */
  public function setNama($nama)
  {
    $this->nama = $nama;

    return $this;
  }

  /**
   * Set the value of jenisKelamin
   *
   * @return  self
   */
  public function setJenisKelamin($jenisKelamin)
  {
    $this->jenisKelamin = $jenisKelamin;

    return $this;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Set the value of nomorTelpon
   *
   * @return  self
   */
  public function setNomorTelpon($nomorTelpon)
  {
    $this->nomorTelpon = $nomorTelpon;

    return $this;
  }

  /**
   * Set the value of kodeJenjang
   *
   * @return  self
   */
  public function setKodeJenjang($kodeJenjang)
  {
    $this->kodeJenjang = $kodeJenjang;

    return $this;
  }

  /**
   * Set the value of kodeJurusan
   *
   * @return  self
   */
  public function setKodeJurusan($kodeJurusan)
  {
    $this->kodeJurusan = $kodeJurusan;

    return $this;
  }

  /**
   * Set the value of idPekerjaan
   *
   * @return  self
   */
  public function setIdPekerjaan($idPekerjaan)
  {
    $this->idPekerjaan = $idPekerjaan;

    return $this;
  }

  public function buid(): Mahasiswa
  {
    return new Mahasiswa(
      $this->nim,
      $this->nama,
      $this->jenisKelamin,
      $this->email,
      $this->nomorTelpon,
      $this->kodeJenjang,
      $this->kodeJurusan,
      $this->idPekerjaan,
    );
  }
}
