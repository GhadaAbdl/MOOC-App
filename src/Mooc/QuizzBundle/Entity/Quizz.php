<?php

namespace Mooc\QuizzBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Quizz
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mooc\QuizzBundle\Entity\QuizzRepository")
 */
class Quizz
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_quizz", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idQuizz;

     /**
     * @var integer
     * @Assert\Range(
     *      min = 1,
     *      max = 30,
     *      minMessage = "Minimum duration is 1 minute",
     *      maxMessage = "Maximum duration is 30 minutes"
     * )
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;

    /**
     * @var date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="mandatory", type="integer")
     */
    private $mandatory;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_chapter", type="integer")
     */
    private $idChapter;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string",length=25 )
     */
    private $name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->idQuizz;
    }

    /**
     * Set chronometer
     *
     * @param integer $chronometer
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
     * @return integer 
     */
    public function getChronometer()
    {
        return $this->chronometer;
    }

    /**
     * Set duration
     *
     * @param integer $duration
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
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set date
     *
     * @param date $date
     * @return Quizz
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set mandatory
     *
     * @param integer $mandatory
     * @return Quizz
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    /**
     * Get mandatory
     *
     * @return integer 
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Quizz
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
     * Set idChapter
     *
     * @param integer $idChapter
     * @return Quizz
     */
    public function setIdChapter($idChapter)
    {
        $this->idChapter = $idChapter;

        return $this;
    }

    /**
     * Get idChapter
     *
     * @return integer 
     */
    public function getIdChapter()
    {
        return $this->idChapter;
    }
    /**
     * Set name
     *
     * @param string $name
     * @return Quizz
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
