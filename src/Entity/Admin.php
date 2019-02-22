<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminRepository")
 */
class Admin
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
    private $meno;

    /**
     * @ORM\Column(type="integer")
     */
    private $heslo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMeno(): ?string
    {
        return $this->meno;
    }

    public function setMeno(string $meno): self
    {
        $this->meno = $meno;

        return $this;
    }

    public function getHeslo(): ?int
    {
        return $this->heslo;
    }

    public function setHeslo(int $heslo): self
    {
        $this->heslo = $heslo;

        return $this;
    }
}
