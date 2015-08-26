<?php

/**
 * @Entity
 * @Table(name="customers")
 **/
class Customer
{
    /**
     * @var integer
     *
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Cart
     *
     * @OneToOne(targetEntity="Cart", mappedBy="customer")
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
     * @param \Cart $cart
     * @return Customer
     */
    public function setCart(\Cart $cart = null)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get cart
     *
     * @return \Cart 
     */
    public function getCart()
    {
        return $this->cart;
    }
}
