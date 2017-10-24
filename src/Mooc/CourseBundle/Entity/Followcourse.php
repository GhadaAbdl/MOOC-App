<?php

namespace Mooc\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Followcourse
 *
 * @ORM\Table(name="followcourse")
 * @ORM\Entity
 */
class Followcourse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_followCourse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFollowcourse;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;
    /**
     * @var integer
     *
     * @ORM\Column(name="id_course", type="integer", nullable=false)
     */
    private $idCourse;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inscriptiondate", type="date", nullable=false)
     */
    private $inscriptiondate;



    /**
     * Get idFollowcourse
     *
     * @return integer 
     */
    public function getIdFollowcourse()
    {
        return $this->idFollowcourse;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Followcourse
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Followcourse
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }
    
     /**
     * Set idCourse
     *
     * @param integer $idCourse
     * @return Followcourse
     */
    public function setidCourse($idCourse)
    {
        $this->idCourse = $idCourse;

        return $this;
    }

    /**
     * Get idCourse
     *
     * @return integer 
     */
    public function getidCourse()
    {
        return $this->idCourse;
    }

    /**
     * Set inscriptiondate
     *
     * @param \DateTime $inscriptiondate
     * @return Followcourse
     */
    public function setInscriptiondate($inscriptiondate)
    {
        $this->inscriptiondate = $inscriptiondate;

        return $this;
    }

    /**
     * Get inscriptiondate
     *
     * @return \DateTime 
     */
    public function getInscriptiondate()
    {
        return $this->inscriptiondate;
    }
}
