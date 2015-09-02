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
     * Set cart
     *
     * @param \OneToOne\Bidirectional\Cart2Customer\Cart $cart
     * @return Customer
     */
    public function setCart(\OneToOne\Bidirectional\Cart2Customer\Cart $cart = null)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return \OneToOne\Bidirectional\Cart2Customer\Cart 
     */
    public function getCart()
    {
        return $this->cart;
    }
}
