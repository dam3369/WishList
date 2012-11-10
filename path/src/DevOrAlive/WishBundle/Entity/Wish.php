<?php

namespace DevOrAlive\WishBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DevOrAlive\WishBundle\Entity\Gift;

/**
 * DevOrAlive\WishBundle\Entity\Wish
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Wish
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
     * @var Gift $gifts
     *
     * @ORM\ManyToMany(targetEntity="Gift", inversedBy="wishs")
     * @ORM\JoinTable(name="wish_gift",
     *      joinColumns={@ORM\JoinColumn(name="gift_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="wish_id", referencedColumnName="id")}
     * )
     */
    private $gifts;


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
     * Set string name
     *
     * @param string $name
     * @return Wish
     */
    public function setStringName($stringName)
    {
        $this->name = $stringName;
    
        return $this;
    }

    /**
     * Get string name
     *
     * @return string 
     */
    public function getStringName()
    {
        return $this->name;
    }

    /**
     * Set Gift
     *
     * @param Gift $gift
     * @return Wish
     */
    public function setGift($gift)
    {
        $this->Gift = $gift;
    
        return $this;
    }

    /**
     * Get Gift
     *
     * @return Gift 
     */
    public function getGift()
    {
        return $this->Gift;
    }
}
