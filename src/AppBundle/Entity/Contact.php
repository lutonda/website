<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact
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
     * @var int
     *
     * @ORM\Column(name="type_id", type="integer")
     */
    private $typeId;


    /**
     * @var string
     *
     * @ORM\Column(name="descriptions", type="string", length=255)
     */
    private $descriptions;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

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
     * Set typeId
     *
     * @param integer $typeId
     *
     * @return Contact
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set descriptions
     *
     * @param string $descriptions
     *
     * @return Contact
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
}

