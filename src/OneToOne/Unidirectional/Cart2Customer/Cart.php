<?php

namespace OneToOne\Unidirectional\Cart2Customer;

/**
 * Class Cart
 *
 * @Entity
 * @Table(name="onetoone_uni_cart2customer_cart")
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
     * @OneToOne(targetEntity="Customer")
     * @JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;
}
