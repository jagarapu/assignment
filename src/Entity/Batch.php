<?php

namespace App\Entity;

use App\Repository\BatchRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=BatchRepository::class)
 */
class Batch
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Birth Year cannot be blank",
     * groups={"batch"})
     * @ORM\Column(type="integer", length=255)
     */
    private $birthYear;

    /**
     * @Assert\NotBlank(message="Issue Year cannot be blank",
     * groups={"batch"})
     * @ORM\Column(type="integer", length=255)
     */
    private $issueYear;

    /**
     * @Assert\NotBlank(message="Expiration Year cannot be blank",
     * groups={"batch"})
     * @ORM\Column(type="integer", length=255)
     */
    private $expirationYear;

    /**
     * @Assert\NotBlank(message="Height Year cannot be blank",
     * groups={"batch"})
     * @ORM\Column(type="string", length=255)
     */
    private $height;

    /**
     * @Assert\NotBlank(message="Hair Color cannot be blank",
     * groups={"batch"})
     * @ORM\Column(type="string", length=255)
     */
    private $hairColor;

    /**
     * @Assert\NotBlank(message="Eye Color cannot be blank",
     * groups={"batch"})
     * @ORM\Column(type="string", length=255)
     */
    private $eyeColor;

    /**
     * @Assert\NotBlank(message="Passport Id cannot be blank",
     * groups={"batch"})
     * @ORM\Column(type="string", length=255)
     */
    private $passportId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $countryId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBirthYear(): ?int
    {
        return $this->birthYear;
    }

    public function setBirthYear(int $birthYear): self
    {
        $this->birthYear = $birthYear;

        return $this;
    }

    public function getIssueYear(): ?int
    {
        return $this->issueYear;
    }

    public function setIssueYear(int $issueYear): self
    {
        $this->issueYear = $issueYear;

        return $this;
    }

    public function getExpirationYear(): ?int
    {
        return $this->expirationYear;
    }

    public function setExpirationYear(int $expirationYear): self
    {
        $this->expirationYear = $expirationYear;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getHairColor(): ?string
    {
        return $this->hairColor;
    }

    public function setHairColor(string $hairColor): self
    {
        $this->hairColor = $hairColor;

        return $this;
    }

    public function getEyeColor(): ?string
    {
        return $this->eyeColor;
    }

    public function setEyeColor(string $eyeColor): self
    {
        $this->eyeColor = $eyeColor;

        return $this;
    }

    public function getPassportId(): ?string
    {
        return $this->passportId;
    }

    public function setPassportId(string $passportId): self
    {
        $this->passportId = $passportId;

        return $this;
    }

    public function getCountryId(): ?int
    {
        return $this->countryId;
    }

    public function setCountryId(int $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }
}
