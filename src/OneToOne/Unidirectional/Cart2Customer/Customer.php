<?php

namespace OneToOne\Unidirectional\Cart2Customer;

/**
 * Class Customer
 *
 * @Entity
 * @Table(name="onetoone_uni_cart2customer_customer")
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
