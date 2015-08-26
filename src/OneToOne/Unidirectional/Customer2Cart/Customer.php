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
     * @param \OneToOne\Unidirectional\Customer2Cart\Cart $cart
     * @return Customer
     */
    public function setCart(\OneToOne\Unidirectional\Customer2Cart\Cart $cart = null)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return \OneToOne\Unidirectional\Customer2Cart\Cart 
     */
    public function getCart()
    {
        return $this->cart;
    }
}
