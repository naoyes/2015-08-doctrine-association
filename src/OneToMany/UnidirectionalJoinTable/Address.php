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
}
