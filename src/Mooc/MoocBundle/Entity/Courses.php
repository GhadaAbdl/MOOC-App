<?php

namespace Mooc\MoocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courses
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mooc\MoocBundle\Entity\CoursesRepository")
 */
class Courses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_course", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_course;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     * @var boolean
     *
     * @ORM\Column(name="validation", type="boolean")
     */
    private $validation;

    /**
     * @var string
     *
     * @ORM\Column(name="discipline", type="string", length=255)
     */
    private $discipline;

    /**
     * @var string
     *
     * @ORM\Column(name="course_title", type="string", length=255)
     */
    private $courseTitle;


    /**
     * Get id_course
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id_course;
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
     * Set trainingDuration
     *
     * @param \DateTime $trainingDuration
     * @return Courses
     */
    public function setTrainingDuration($trainingDuration)
    {
        $this->trainingDuration = $trainingDuration;

        return $this;
    }

    /**
     * Get trainingDuration
     *
     * @return \DateTime 
     */
    public function getTrainingDuration()
    {
        return $this->trainingDuration;
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
}
