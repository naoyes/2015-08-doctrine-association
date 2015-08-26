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
}
