<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\User;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\MahasiswaRepository")
 */
class Mahasiswa extends User
{

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $nim;

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

    public function getNim(): ?string
    {
        return $this->nim;
    }

    public function setNim(string $nim): self
    {
        $this->nim = $nim;

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
