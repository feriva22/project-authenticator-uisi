<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\UnitOrganisasiRepository")
 */
class UnitOrganisasi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @ORM\JoinColumn(nullable=true)
     */
    private $parent;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama_en;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $kode;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $ketua;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $jabatan;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $kode_jabatan;

    /**
     * @ORM\Column(type="datetime")
     */
    private $masa_mulai;

    /**
     * @ORM\Column(type="datetime")
     */
    private $masa_akhir;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(int $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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

    public function getNamaEn(): ?string
    {
        return $this->nama_en;
    }

    public function setNamaEn(string $nama_en): self
    {
        $this->nama_en = $nama_en;

        return $this;
    }

    public function getKode(): ?string
    {
        return $this->kode;
    }

    public function setKode(string $kode): self
    {
        $this->kode = $kode;

        return $this;
    }

    public function getKetua(): ?User
    {
        return $this->ketua;
    }

    public function setKetua(?User $ketua): self
    {
        $this->ketua = $ketua;

        return $this;
    }

    public function getJabatan(): ?string
    {
        return $this->jabatan;
    }

    public function setJabatan(string $jabatan): self
    {
        $this->jabatan = $jabatan;

        return $this;
    }

    public function getKodeJabatan(): ?string
    {
        return $this->kode_jabatan;
    }

    public function setKodeJabatan(string $kode_jabatan): self
    {
        $this->kode_jabatan = $kode_jabatan;

        return $this;
    }

    public function getMasaMulai(): ?\DateTimeInterface
    {
        return $this->masa_mulai;
    }

    public function setMasaMulai(\DateTimeInterface $masa_mulai): self
    {
        $this->masa_mulai = $masa_mulai;

        return $this;
    }

    public function getMasaAkhir(): ?\DateTimeInterface
    {
        return $this->masa_akhir;
    }

    public function setMasaAkhir(\DateTimeInterface $masa_akhir): self
    {
        $this->masa_akhir = $masa_akhir;

        return $this;
    }
}
