<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courses
 *
 * @ORM\Table(name="courses")
 * @ORM\Entity(repositoryClass="PiBundle\Entity\CoursesRepository")
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
     * @ORM\Column(name="training_duration", type="integer", nullable=false)
     */
    private $trainingDuration;

    /**
     * @var integer
     *
     * @ORM\Column(name="validation", type="integer", nullable=true)
     */
    private $validation;



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
     * Set trainingDuration
     *
     * @param integer $trainingDuration
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
     * @return integer 
     */
    public function getTrainingDuration()
    {
        return $this->trainingDuration;
    }

    /**
     * Set validation
     *
     * @param integer $validation
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
     * @return integer 
     */
    public function getValidation()
    {
        return $this->validation;
    }
}
