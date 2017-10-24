<?php

namespace Mooc\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapter
 *
 * @ORM\Table(name="chapter")
 * @ORM\Entity
 */
class Chapter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_chapter", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChapter;

    /**
     * @var string
     *
     * @ORM\Column(name="chaptertitle", type="string", length=255, nullable=false)
     */
    private $chaptertitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="chapternumber", type="integer", nullable=false)
     */
    private $chapternumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_course", type="integer", nullable=false)
     */
    private $idCourse;

    /**
     * @var string
     *
     * @ORM\Column(name="chapterContent", type="text", nullable=false)
     */
    private $chaptercontent;



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
     * Set chaptertitle
     *
     * @param string $chaptertitle
     * @return Chapter
     */
    public function setChaptertitle($chaptertitle)
    {
        $this->chaptertitle = $chaptertitle;

        return $this;
    }

    /**
     * Get chaptertitle
     *
     * @return string 
     */
    public function getChaptertitle()
    {
        return $this->chaptertitle;
    }

    /**
     * Set chapternumber
     *
     * @param integer $chapternumber
     * @return Chapter
     */
    public function setChapternumber($chapternumber)
    {
        $this->chapternumber = $chapternumber;

        return $this;
    }

    /**
     * Get chapternumber
     *
     * @return integer 
     */
    public function getChapternumber()
    {
        return $this->chapternumber;
    }

    /**
     * Set idCourse
     *
     * @param integer $idCourse
     * @return Chapter
     */
    public function setIdCourse($idCourse)
    {
        $this->idCourse = $idCourse;

        return $this;
    }

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
     * Set chaptercontent
     *
     * @param string $chaptercontent
     * @return Chapter
     */
    public function setChaptercontent($chaptercontent)
    {
        $this->chaptercontent = $chaptercontent;

        return $this;
    }

    /**
     * Get chaptercontent
     *
     * @return string 
     */
    public function getChaptercontent()
    {
        return $this->chaptercontent;
    }
}
