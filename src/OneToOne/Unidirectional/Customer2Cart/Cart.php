<?php

namespace OneToOne\Unidirectional\Customer2Cart;

/**
 * Class Cart
 *
 * @Entity
 * @Table(name="onetoone_uni_customer2cart_cart")
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
}
