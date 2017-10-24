<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * VideoConference
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mooc\MoocBundle\Entity\VideoConferenceRepository")
 */
class VideoConference
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="course", type="string", length=255)
     */
    private $course;

    /**
     * @var string
     *
     * @ORM\Column(name="chapter", type="string", length=255)
     */
    private $chapter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;



    /**
     * @var \string
     *
     * @ORM\Column(name="time", type="string")
     */
    private $time;

    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="participate", type="integer")
     */
    private $participate;
    
    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=500)
     */
    private $link;

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
     * Set course
     *
     * @param string $course
     * @return VideoConference
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return string 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set chapter
     *
     * @param string $chapter
     * @return VideoConference
     */
    public function setChapter($chapter)
    {
        $this->chapter = $chapter;

        return $this;
    }

    /**
     * Get chapter
     *
     * @return string 
     */
    public function getChapter()
    {
        return $this->chapter;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return VideoConference
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    

    /**
     * Set string
     *
     * @param \string $time
     * @return VideoConference
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get string
     *
     * @return \string 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return VideoConference
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
     * Set note
     *
     * @param string $note
     * @return VideoConference
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set participate
     *
     * @param integer $participate
     * @return VideoConference
     */
    public function setParticipate($participate)
    {
        $this->participate = $participate;

        return $this;
    }

    /**
     * Get participate
     *
     * @return integer 
     */
    public function getParticipate()
    {
        return $this->participate;
    }
    
     /**
     * Set link
     *
     * @param string $link
     * @return VideoConference
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }
}
