<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompanyRepository")
 */
class Company
{

    /**
     * @var \Ramsey\Uuid\UuidInterface
     *
     * @ORM\Id
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptions", type="text", nullable=true)
     */
    private $descriptions;

    /**
     * @var string
     *
     * @ORM\Column(name="aboutUs", type="text", nullable=true)
     */
    private $aboutUs;

    /**
     * @var string
     *
     * @ORM\Column(name="mission", type="text", nullable=true)
     */
    private $mission;

    /**
     * @var string
     *
     * @ORM\Column(name="slogam", type="string", length=255, nullable=true)
     */
    private $slogam;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Contact", mappedBy="company")
     */
    private $contacts;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Section", mappedBy="company")
     */
    private $sections;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Media", mappedBy="company")
     */
    private $logo;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Company
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set descriptions
     *
     * @param string $descriptions
     *
     * @return Company
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    /**
     * Get descriptions
     *
     * @return string
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Set aboutUs
     *
     * @param string $aboutUs
     *
     * @return Company
     */
    public function setAboutUs($aboutUs)
    {
        $this->aboutUs = $aboutUs;

        return $this;
    }

    /**
     * Get aboutUs
     *
     * @return string
     */
    public function getAboutUs()
    {
        return $this->aboutUs;
    }

    /**
     * Set mission
     *
     * @param string $mission
     *
     * @return Company
     */
    public function setMission($mission)
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * Get mission
     *
     * @return string
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * Set slogam
     *
     * @param string $slogam
     *
     * @return Company
     */
    public function setSlogam($slogam)
    {
        $this->slogam = $slogam;

        return $this;
    }

    /**
     * Get slogam
     *
     * @return string
     */
    public function getSlogam()
    {
        return $this->slogam;
    }

    /**
     * @return mixed
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @param mixed $contacts
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * @return mixed
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * @param mixed $sections
     */
    public function setSections($sections)
    {
        $this->sections = $sections;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }


}

