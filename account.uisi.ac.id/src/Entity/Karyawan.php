<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\User;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\KaryawanRepository")
 */
class Karyawan extends User
{

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $nik;



    public function getNik(): ?string
    {
        return $this->nik;
    }

    public function setNik(string $nik): self
    {
        $this->nik = $nik;

        return $this;
    }
}
