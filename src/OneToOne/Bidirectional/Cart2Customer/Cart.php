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

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set customer
     *
     * @param \OneToOne\Bidirectional\Cart2Customer\Customer $customer
     * @return Cart
     */
    public function setCustomer(\OneToOne\Bidirectional\Cart2Customer\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \OneToOne\Bidirectional\Cart2Customer\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
