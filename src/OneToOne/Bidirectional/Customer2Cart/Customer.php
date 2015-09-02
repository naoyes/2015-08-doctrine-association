<?php

namespace OneToOne\Bidirectional\Customer2Cart;

/**
 * Class Customer
 *
 * @Entity
 * @Table(name="onetoone_bi_customer2cart_customer")
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
     * @OneToOne(targetEntity="Cart", mappedBy="customer")
     **/
    private $cart;
}
