<?php

namespace OneToOne\SelfReferencing;


/**
 * Class Student
 *
 * @Entity
 * @Table(name="onetoone_self_student")
 */
class Student
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
     * @OneToOne(targetEntity="Student")
     * @JoinColumn(name="mentor_id", referencedColumnName="id")
     */
    private $mentor;
}
