<?php

namespace OneToOne\Unidirectional\Customer2Cart;

/**
 * Class Customer
 *
 * @Entity
 * @Table(name="onetoone_uni_customer2cart_customer")
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
     * @OneToOne(targetEntity="Cart")
     * @JoinColumn(name="cart_id", referencedColumnName="id")
     */
    private $cart;
}
