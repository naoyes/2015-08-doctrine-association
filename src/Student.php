<?php

/**
 * @Entity
 * @Table(name="students")
 **/
class Student
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
     * @OneToOne(targetEntity="Student")
     * @JoinColumn(name="mentor_id", referencedColumnName="id")
     **/
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
     * @param \Student $mentor
     * @return Student
     */
    public function setMentor(\Student $mentor = null)
    {
        $this->mentor = $mentor;

        return $this;
    }

    /**
     * Get mentor
     *
     * @return \Student 
     */
    public function getMentor()
    {
        return $this->mentor;
    }
}
