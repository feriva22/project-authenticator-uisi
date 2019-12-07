<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "dosen" = "Dosen", "mahasiswa" = "Mahasiswa","karyawan" = "Karyawan"})
 */
class User
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
    private $username;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $email;

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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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
