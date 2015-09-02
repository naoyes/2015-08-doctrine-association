<?php

namespace OneToOne\Bidirectional\Customer2Cart;

/**
 * Class Cart
 *
 * @Entity
 * @Table(name="onetoone_bi_customer2cart_cart")
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
     * @OneToOne(targetEntity="Customer", inversedBy="cart")
     * @JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;
}
