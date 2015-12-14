<?php

namespace OneToMany\Unidirectional;

/**
 * Class User
 *
 * @Entity
 * @Table(name="onetomany_uni_user")
 */
class User
{
    /**
     * @var integer
     *
     * @Id()
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="Address")
     * @JoinColumn(name="address_id", referencedColumnName="id")
     */
    private $address;

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
     * Set address
     *
     * @param \OneToMany\Unidirectional\Address $address
     * @return User
     */
    public function setAddress(\OneToMany\Unidirectional\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \OneToMany\Unidirectional\Address
     */
    public function getAddress()
    {
        return $this->address;
    }
}
