<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\RoleRepository")
 */
class Role
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $tipe;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $tipe_status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $kode_jabatan_ou;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="roles")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $kode_jabatan;

    public function __construct()
    {
        $this->user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipe(): ?string
    {
        return $this->tipe;
    }

    public function setTipe(string $tipe): self
    {
        $this->tipe = $tipe;

        return $this;
    }

    public function getTipeStatus(): ?string
    {
        return $this->tipe_status;
    }

    public function setTipeStatus(string $tipe_status): self
    {
        $this->tipe_status = $tipe_status;

        return $this;
    }

    public function getKodeJabatanOu(): ?string
    {
        return $this->kode_jabatan_ou;
    }

    public function setKodeJabatanOu(string $kode_jabatan_ou): self
    {
        $this->kode_jabatan_ou = $kode_jabatan_ou;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(User $user): self
    {
        if (!$this->user->contains($user)) {
            $this->user[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->user->contains($user)) {
            $this->user->removeElement($user);
        }

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
}
