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
}
