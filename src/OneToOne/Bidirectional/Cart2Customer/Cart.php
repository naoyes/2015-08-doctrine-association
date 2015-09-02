<?php

namespace OneToOne\Bidirectional\Cart2Customer;

/**
 * Class Cart
 *
 * @Entity
 * @Table(name="onetoone_bi_cart2customer_cart")
 */
class Cart
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
     * @var Customer
     *
     * @OneToOne(targetEntity="Customer", mappedBy="cart")
     */
    private $customer;
}
