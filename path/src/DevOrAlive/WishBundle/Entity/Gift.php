<?php

namespace DevOrAlive\WishBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DevOrAlive\WishBundle\Entity\Wish;

/**
 * DevOrAlive\WishBundle\Entity\Gift
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Gift
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $reference
     *
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var Picture $pictures
     *
     * @ORM\OneToMany(targetEntity="Picture", mappedBy="gift")
     */
    private $pictures;

    /**
     * @var float $price
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;
    
    /**
     * @var Wish $wishs
     *
     * @ORM\ManyToMany(targetEntity="Wish", mappedBy="gift")
     */
    private $wishs;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Gift
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
     * Set reference
     *
     * @param string $reference
     * @return Gift
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set pictures
     *
     * @param \Picture $pictures
     * @return Gift
     */
    public function setPictures($pictures)
    {
        $this->pictures = $pictures;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }
}
