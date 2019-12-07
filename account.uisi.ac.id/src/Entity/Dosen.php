<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\User;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\DosenRepository")
 */
class Dosen extends User
{

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $nidn;

    public function getNidn(): ?string
    {
        return $this->nidn;
    }

    public function setNidn(string $nidn): self
    {
        $this->nidn = $nidn;

        return $this;
    }

    

}
