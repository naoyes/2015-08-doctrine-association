<?php

/**
 * @Entity
 * @Table(name="products")
 **/
class Product
{
    /**
     * @var integer
     *
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     **/
    private $id;

    /**
     * @var Shipping
     *
     * @OneToOne(targetEntity="Shipping")
     * @JoinColumn(name="shipping_id", referencedColumnName="id")
     **/
    private $shipping;

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
     * Set shipping
     *
     * @param \Shipping $shipping
     * @return Product
     */
    public function setShipping(\Shipping $shipping = null)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping
     *
     * @return \Shipping 
     */
    public function getShipping()
    {
        return $this->shipping;
    }
}
