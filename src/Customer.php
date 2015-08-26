<?php

/**
 * @Entity
 * @Table(name="customers")
 **/
class Customer
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
     * @var Cart
     *
     * @OneToOne(targetEntity="Cart", mappedBy="customer")
     */
    private $cart;
}
