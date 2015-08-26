<?php

/**
 * @Entity
 * @Table(name="shippings")
 **/
class Shipping
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
