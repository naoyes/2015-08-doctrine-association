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
     * Set mentor
     *
     * @param \OneToOne\SelfReferencing\Student $mentor
     * @return Student
     */
    public function setMentor(\OneToOne\SelfReferencing\Student $mentor = null)
    {
        $this->mentor = $mentor;

        return $this;
    }

    /**
     * Get mentor
     *
     * @return \OneToOne\SelfReferencing\Student
     */
    public function getMentor()
    {
        return $this->mentor;
    }
}
