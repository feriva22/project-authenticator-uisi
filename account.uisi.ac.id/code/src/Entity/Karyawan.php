<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\KaryawanRepository")
 */
class Karyawan
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $nik;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $nama;

    /**
     * @ORM\Column(type="integer")
     */
    private $jeniskelamin;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $nohp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $alamat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNik(): ?string
    {
        return $this->nik;
    }

    public function setNik(string $nik): self
    {
        $this->nik = $nik;

        return $this;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getJeniskelamin(): ?int
    {
        return $this->jeniskelamin;
    }

    public function setJeniskelamin(int $jeniskelamin): self
    {
        $this->jeniskelamin = $jeniskelamin;

        return $this;
    }

    public function getNohp(): ?string
    {
        return $this->nohp;
    }

    public function setNohp(string $nohp): self
    {
        $this->nohp = $nohp;

        return $this;
    }

    public function getAlamat(): ?string
    {
        return $this->alamat;
    }

    public function setAlamat(string $alamat): self
    {
        $this->alamat = $alamat;

        return $this;
    }
}
