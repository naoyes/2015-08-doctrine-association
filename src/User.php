<?php

/**
 * @Entity
 * @Table(name="users")
 **/
class User
{
    /**
     * @var integer
     *
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Address
     *
     * @ManyToOne(targetEntity="Address")
     * @JoinColumn(name="address_id", referencedColumnName="id")
     **/
    private $address;
}
