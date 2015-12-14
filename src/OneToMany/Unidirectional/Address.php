<?php

namespace OneToMany\Unidirectional;

/**
 * Class Address
 *
 * @Entity
 * @Table(name="onetomany_uni_address")
 */
class Address
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
