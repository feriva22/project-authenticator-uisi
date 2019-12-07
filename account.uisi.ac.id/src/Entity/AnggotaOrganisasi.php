<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AnggotaOrganisasiRepository")
 */
class AnggotaOrganisasi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $jabatan;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $kode_jabatan;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UnitOrganisasi", inversedBy="anggota")
     * @ORM\JoinColumn(nullable=false)
     */
    private $unitOrganisasi;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUnitOrganisasi(): ?UnitOrganisasi
    {
        return $this->unitOrganisasi;
    }

    public function setUnitOrganisasi(?UnitOrganisasi $unitOrganisasi): self
    {
        $this->unitOrganisasi = $unitOrganisasi;

        return $this;
    }

    
}
