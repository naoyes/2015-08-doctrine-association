<?php

namespace OneToMany\UnidirectionalJoinTable;

/**
 * Class Address
 *
 * @Entity
 * @Table(name="onetomany_uni_jointable_address")
 */
class Address
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
     * @ManyToMany(targetEntity="User")
     * @JoinTable(name="onetomany_uni_jointable_addresses_users",
     *      joinColumns={@JoinColumn(name="address_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="user_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add users
     *
     * @param \OneToMany\UnidirectionalJoinTable\User $users
     * @return Address
     */
    public function addUser(\OneToMany\UnidirectionalJoinTable\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \OneToMany\UnidirectionalJoinTable\User $users
     */
    public function removeUser(\OneToMany\UnidirectionalJoinTable\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
