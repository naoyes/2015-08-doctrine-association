<?php

namespace OneToOne\Bidirectional\Cart2Customer;

/**
 * Class Customer
 *
 * @Entity
 * @Table(name="onetoone_bi_cart2customer_customer")
 */
class Customer
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
     * @var Cart
     *
     * @OneToOne(targetEntity="Cart", inversedBy="customer")
     * @JoinColumn(name="cart_id", referencedColumnName="id")
     **/
    private $cart;
}
