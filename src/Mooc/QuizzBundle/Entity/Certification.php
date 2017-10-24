<?php

namespace Mooc\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certification
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mooc\QuizzBundle\Entity\CertificationRepository")
 */
class Certification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_certification", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCertification;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_quizz", type="integer")
     */
    private $idQuizz;

    /**
     * @var integer
     *
     * @ORM\Column(name="grade", type="integer")
     */
    private $grade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_passed", type="date")
     */
    private $datePassed;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getIdCertification()
    {
        return $this->idCertification;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Certification
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
     * Set idQuizz
     *
     * @param integer $idQuizz
     * @return Certification
     */
    public function setQuizzName($idQuizz)
    {
        $this->idQuizz = $idQuizz;

        return $this;
    }

    /**
     * Get idQuizz
     *
     * @return integer 
     */
    public function getidQuizz()
    {
        return $this->idQuizz;
    }

    /**
     * Set grade
     *
     * @param integer $grade
     * @return Certification
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return integer 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set datePassed
     *
     * @param \DateTime $datePassed
     * @return Certification
     */
    public function setDatePassed($datePassed)
    {
        $this->datePassed = $datePassed;

        return $this;
    }

    /**
     * Get datePassed
     *
     * @return \DateTime 
     */
    public function getDatePassed()
    {
        return $this->datePassed;
    }
}
