<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluations
 *
 * @ORM\Table(name="evaluations")
 * @ORM\Entity
 */
class Evaluations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evaluation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvaluation;

    /**
     * @var string
     *
     * @ORM\Column(name="appreciation", type="string", length=1000, nullable=false)
     */
    private $appreciation;

    /**
     * @var float
     *
     * @ORM\Column(name="mark", type="float", precision=10, scale=0, nullable=false)
     */
    private $mark;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date", nullable=false)
     */
    private $dateEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_quizz", type="date", nullable=false)
     */
    private $dateQuizz;



    /**
     * Get idEvaluation
     *
     * @return integer 
     */
    public function getIdEvaluation()
    {
        return $this->idEvaluation;
    }

    /**
     * Set appreciation
     *
     * @param string $appreciation
     * @return Evaluations
     */
    public function setAppreciation($appreciation)
    {
        $this->appreciation = $appreciation;

        return $this;
    }

    /**
     * Get appreciation
     *
     * @return string 
     */
    public function getAppreciation()
    {
        return $this->appreciation;
    }

    /**
     * Set mark
     *
     * @param float $mark
     * @return Evaluations
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return float 
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Evaluations
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set dateQuizz
     *
     * @param \DateTime $dateQuizz
     * @return Evaluations
     */
    public function setDateQuizz($dateQuizz)
    {
        $this->dateQuizz = $dateQuizz;

        return $this;
    }

    /**
     * Get dateQuizz
     *
     * @return \DateTime 
     */
    public function getDateQuizz()
    {
        return $this->dateQuizz;
    }
}
