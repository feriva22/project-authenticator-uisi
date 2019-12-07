<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="datetime")
     */
    private $masa_mulai;

    /**
     * @ORM\Column(type="datetime")
     */
    private $masa_akhir;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UnitOrganisasi")
     * @ORM\JoinColumn(nullable=true)
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\AnggotaOrganisasi", mappedBy="unitOrganisasi")
     */
    private $anggota;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ketua;

    public function __construct()
    {
        $this->anggota = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
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

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return Collection|AnggotaOrganisasi[]
     */
    public function getAnggota(): Collection
    {
        return $this->anggota;
    }

    public function addAnggotum(AnggotaOrganisasi $anggotum): self
    {
        if (!$this->anggota->contains($anggotum)) {
            $this->anggota[] = $anggotum;
            $anggotum->setUnitOrganisasi($this);
        }

        return $this;
    }

    public function removeAnggotum(AnggotaOrganisasi $anggotum): self
    {
        if ($this->anggota->contains($anggotum)) {
            $this->anggota->removeElement($anggotum);
            // set the owning side to null (unless already changed)
            if ($anggotum->getUnitOrganisasi() === $this) {
                $anggotum->setUnitOrganisasi(null);
            }
        }

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

}
