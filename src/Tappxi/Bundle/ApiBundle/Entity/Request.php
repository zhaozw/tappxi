<?php

namespace Tappxi\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tappxi\Bundle\ApiBundle\Entity\Request
 *
 * @ORM\Table(name="request")
 * @ORM\Entity
 */
class Request
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $status
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_start_id", referencedColumnName="id")
     * })
     */
    private $addressStart;

    /**
     * @var Address
     *
     * @ORM\ManyToOne(targetEntity="Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_end_id", referencedColumnName="id")
     * })
     */
    private $addressEnd;



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
     * Set status
     *
     * @param integer $status
     * @return Request
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user
     *
     * @param Tappxi\Bundle\ApiBundle\Entity\User $user
     * @return Request
     */
    public function setUser(\Tappxi\Bundle\ApiBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Tappxi\Bundle\ApiBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set addressStart
     *
     * @param Tappxi\Bundle\ApiBundle\Entity\Address $addressStart
     * @return Request
     */
    public function setAddressStart(\Tappxi\Bundle\ApiBundle\Entity\Address $addressStart = null)
    {
        $this->addressStart = $addressStart;
    
        return $this;
    }

    /**
     * Get addressStart
     *
     * @return Tappxi\Bundle\ApiBundle\Entity\Address 
     */
    public function getAddressStart()
    {
        return $this->addressStart;
    }

    /**
     * Set addressEnd
     *
     * @param Tappxi\Bundle\ApiBundle\Entity\Address $addressEnd
     * @return Request
     */
    public function setAddressEnd(\Tappxi\Bundle\ApiBundle\Entity\Address $addressEnd = null)
    {
        $this->addressEnd = $addressEnd;
    
        return $this;
    }

    /**
     * Get addressEnd
     *
     * @return Tappxi\Bundle\ApiBundle\Entity\Address 
     */
    public function getAddressEnd()
    {
        return $this->addressEnd;
    }
}