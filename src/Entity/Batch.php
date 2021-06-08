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
     * @ORM\Column(type="datetime", length=255)
     */
    private $birthYear;

    /**
     * @Assert\NotBlank(message="Issue Year cannot be blank",
     * groups={"batch"})
     * @ORM\Column(type="datetime", length=255)
     */
    private $issueYear;

    /**
     * @Assert\NotBlank(message="Expiration Year cannot be blank",
     * groups={"batch"})
     * @ORM\Column(type="datetime", length=255)
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

    const BYR = 'Birth Year';
    const IYR = 'Issue Year';
    const EYR = 'Expiration Year';
    const HGT = 'Height';
    const HCL = 'Hair Color';
    const ECL = 'Eye Color';
    const PID = 'Passport ID';
    const CID = 'Country ID';

    public static $getSalutation = [
        'byr' => self::BYR,
        'iyr' => self::IYR,
        'eyr' => self::EYR,
        'hgt' => self::HGT,
        'hcl' => self::HCL,
        'ecl' => self::ECL,
        'pid' => self::PID,
        'cid' => self::CID
    ];

    public static $getBatchFile = [
        [
            "ecl" => "gry",
            "pid" => 860033327,
            "eyr" => 2020,
            "hcl" => "#fffffd",
            "byr" => 1937,
            "iyr" => 2017,
            "cid" => 147,
            "hgt" => "183cm"
        ],
        [
            "iyr" => 2013,
            "ecl" => "amb",
            "cid" => 350,
            "eyr" => 2023,
            "pid" => "028048884",
            "hcl" => "#cfa07d",
            "byr" => 1929,
        ],
        [
            "hcl" => "#ae17e1",
            "iyr" => 2013,
            "eyr" => 2024,
            "pid" => "760753108",
            "byr" => 1931,
            "hgt" => "179cm",
        ],
        [
            "hcl" => "#cfa07d",
            "eyr" => 2025,
            "pid" => "166559648",
            "iyr" => 2011,
            "ecl" => "brn",
            "hgt" => "59in",
        ]
    ];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIssueYear(): ?\DateTimeInterface
    {
        return $this->issueYear;
    }

    public function setIssueYear(? \DateTimeInterface $issueYear): self
    {
        $this->issueYear = $issueYear;

        return $this;
    }


    public function getBirthYear(): ?\DateTimeInterface
    {
        return $this->birthYear;
    }

    public function setBirthYear(? \DateTimeInterface $birthYear): self
    {
        $this->birthYear = $birthYear;
        return $this;
    }


    public function getExpirationYear(): ?\DateTimeInterface
    {
        return $this->expirationYear;
    }

    public function setExpirationYear(? \DateTimeInterface $expirationYear): self
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
