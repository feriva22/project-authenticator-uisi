<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\MahasiswaRepository")
 */
class Mahasiswa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $nim;

    /**
     * @ORM\Column(type="string", length=255)
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

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $namawali;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $nohpwali;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $alamatwali;

    /**
     * @ORM\Column(type="integer")
     */
    private $tahunmasuk;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNim(): ?string
    {
        return $this->nim;
    }

    public function setNim(string $nim): self
    {
        $this->nim = $nim;

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

    public function getNamawali(): ?string
    {
        return $this->namawali;
    }

    public function setNamawali(string $namawali): self
    {
        $this->namawali = $namawali;

        return $this;
    }

    public function getNohpwali(): ?string
    {
        return $this->nohpwali;
    }

    public function setNohpwali(string $nohpwali): self
    {
        $this->nohpwali = $nohpwali;

        return $this;
    }

    public function getAlamatwali(): ?string
    {
        return $this->alamatwali;
    }

    public function setAlamatwali(string $alamatwali): self
    {
        $this->alamatwali = $alamatwali;

        return $this;
    }

    public function getTahunmasuk(): ?int
    {
        return $this->tahunmasuk;
    }

    public function setTahunmasuk(int $tahunmasuk): self
    {
        $this->tahunmasuk = $tahunmasuk;

        return $this;
    }
}
