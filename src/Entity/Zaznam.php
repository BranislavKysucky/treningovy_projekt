<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ZaznamRepository")
 */
class Zaznam
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $osobne_cislo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meno;

    /**
     * @ORM\Column(type="integer")
     */
    private $heslo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datum_cas_prichodu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datum_cas_odchodu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOsobneCislo(): ?int
    {
        return $this->osobne_cislo;
    }

    public function setOsobneCislo(int $osobne_cislo): self
    {
        $this->osobne_cislo = $osobne_cislo;

        return $this;
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

    public function getDatumCasPrichodu(): ?\DateTime
    {
        return $this->datum_cas_prichodu;
    }

    public function setDatumCasPrichodu(\DateTime $datum_cas_prichodu): self
    {
        $this->datum_cas_prichodu = $datum_cas_prichodu;

        return $this;
    }

    public function getDatumCasOdchodu(): ?\DateTime
    {
        return $this->datum_cas_odchodu;
    }

    public function setDatumCasOdchodu(\DateTime $datum_cas_odchodu): self
    {
        $this->datum_cas_odchodu = $datum_cas_odchodu;

        return $this;
    }



}
