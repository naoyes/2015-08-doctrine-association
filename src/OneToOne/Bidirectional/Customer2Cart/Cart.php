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
     * @param \OneToOne\Bidirectional\Customer2Cart\Customer $customer
     * @return Cart
     */
    public function setCustomer(\OneToOne\Bidirectional\Customer2Cart\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \OneToOne\Bidirectional\Customer2Cart\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
