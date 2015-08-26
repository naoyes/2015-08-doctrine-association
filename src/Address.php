<?php

/**
 * @Entity
 * @Table(name="addresses")
 **/
class Address
{
    /**
     * @var integer
     *
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
}
