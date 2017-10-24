<?php

namespace Mooc\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courses
 *
 * @ORM\Table(name="courses")
 * @ORM\Entity
 */
class Courses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_course", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCourse;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=10000, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="objectives", type="string", length=10000, nullable=false)
     */
    private $objectives;

    /**
     * @var integer
     *
     * @ORM\Column(name="training_duration_days", type="integer", nullable=false)
     */
    private $trainingDurationDays;

    /**
     * @var integer
     *
     * @ORM\Column(name="training_duration_hours", type="integer", nullable=false)
     */
    private $trainingDurationHours;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validation", type="boolean", nullable=false)
     */
    private $validation;

    /**
     * @var string
     *
     * @ORM\Column(name="course_title", type="string", length=255, nullable=false)
     */
    private $courseTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="numberofChapters", type="integer", nullable=false)
     */
    private $numberofchapters;

    /**
     * @var string
     *
     * @ORM\Column(name="videolink", type="string", length=255, nullable=false)
     */
    private $videolink;

    /**
     * @var integer
     *
     * @ORM\Column(name="idwriter", type="integer", nullable=false)
     */
    private $idwriter;

    /**
     * @var string
     *
     * @ORM\Column(name="discipline", type="string", length=255, nullable=false)
     */
    private $discipline;

    /**
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=false)
     */
    private $rating;



    /**
     * Get idCourse
     *
     * @return integer 
     */
    public function getIdCourse()
    {
        return $this->idCourse;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Courses
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Courses
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set objectives
     *
     * @param string $objectives
     * @return Courses
     */
    public function setObjectives($objectives)
    {
        $this->objectives = $objectives;

        return $this;
    }

    /**
     * Get objectives
     *
     * @return string 
     */
    public function getObjectives()
    {
        return $this->objectives;
    }

    /**
     * Set trainingDurationDays
     *
     * @param integer $trainingDurationDays
     * @return Courses
     */
    public function setTrainingDurationDays($trainingDurationDays)
    {
        $this->trainingDurationDays = $trainingDurationDays;

        return $this;
    }

    /**
     * Get trainingDurationDays
     *
     * @return integer 
     */
    public function getTrainingDurationDays()
    {
        return $this->trainingDurationDays;
    }

    /**
     * Set trainingDurationHours
     *
     * @param integer $trainingDurationHours
     * @return Courses
     */
    public function setTrainingDurationHours($trainingDurationHours)
    {
        $this->trainingDurationHours = $trainingDurationHours;

        return $this;
    }

    /**
     * Get trainingDurationHours
     *
     * @return integer 
     */
    public function getTrainingDurationHours()
    {
        return $this->trainingDurationHours;
    }

    /**
     * Set validation
     *
     * @param boolean $validation
     * @return Courses
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return boolean 
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set courseTitle
     *
     * @param string $courseTitle
     * @return Courses
     */
    public function setCourseTitle($courseTitle)
    {
        $this->courseTitle = $courseTitle;

        return $this;
    }

    /**
     * Get courseTitle
     *
     * @return string 
     */
    public function getCourseTitle()
    {
        return $this->courseTitle;
    }

    /**
     * Set numberofchapters
     *
     * @param integer $numberofchapters
     * @return Courses
     */
    public function setNumberofchapters($numberofchapters)
    {
        $this->numberofchapters = $numberofchapters;

        return $this;
    }

    /**
     * Get numberofchapters
     *
     * @return integer 
     */
    public function getNumberofchapters()
    {
        return $this->numberofchapters;
    }

    /**
     * Set videolink
     *
     * @param string $videolink
     * @return Courses
     */
    public function setVideolink($videolink)
    {
        $this->videolink = $videolink;

        return $this;
    }

    /**
     * Get videolink
     *
     * @return string 
     */
    public function getVideolink()
    {
        return $this->videolink;
    }

    /**
     * Set idwriter
     *
     * @param integer $idwriter
     * @return Courses
     */
    public function setIdwriter($idwriter)
    {
        $this->idwriter = $idwriter;

        return $this;
    }

    /**
     * Get idwriter
     *
     * @return integer 
     */
    public function getIdwriter()
    {
        return $this->idwriter;
    }

    /**
     * Set discipline
     *
     * @param string $discipline
     * @return Courses
     */
    public function setDiscipline($discipline)
    {
        $this->discipline = $discipline;

        return $this;
    }

    /**
     * Get discipline
     *
     * @return string 
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return Courses
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }
}
