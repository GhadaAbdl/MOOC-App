<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quizz
 *
 * @ORM\Table(name="quizz")
 * @ORM\Entity
 */
class Quizz
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="chronometer", type="boolean", nullable=false)
     */
    private $chronometer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duration", type="time", nullable=false)
     */
    private $duration;

    /**
     * @var \QuizzContent
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="QuizzContent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_quizz", referencedColumnName="id_quizz")
     * })
     */
    private $idQuizz;



    /**
     * Set chronometer
     *
     * @param boolean $chronometer
     * @return Quizz
     */
    public function setChronometer($chronometer)
    {
        $this->chronometer = $chronometer;

        return $this;
    }

    /**
     * Get chronometer
     *
     * @return boolean 
     */
    public function getChronometer()
    {
        return $this->chronometer;
    }

    /**
     * Set duration
     *
     * @param \DateTime $duration
     * @return Quizz
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return \DateTime 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set idQuizz
     *
     * @param \PiBundle\Entity\QuizzContent $idQuizz
     * @return Quizz
     */
    public function setIdQuizz(\PiBundle\Entity\QuizzContent $idQuizz)
    {
        $this->idQuizz = $idQuizz;

        return $this;
    }

    /**
     * Get idQuizz
     *
     * @return \PiBundle\Entity\QuizzContent 
     */
    public function getIdQuizz()
    {
        return $this->idQuizz;
    }
}
