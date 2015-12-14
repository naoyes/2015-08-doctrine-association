<?php

namespace OneToMany\UnidirectionalJoinTable;

/**
 * Class User
 *
 * @Entity
 * @Table(name="onetomany_uni_jointable_user")
 */
class User
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
