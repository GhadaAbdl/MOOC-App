<?php

namespace Mooc\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentscourse
 *
 * @ORM\Table(name="commentscourse")
 * @ORM\Entity
 */
class Commentscourse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComment;

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
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commentdate", type="date", nullable=false)
     */
    private $commentdate;



    /**
     * Get idComment
     *
     * @return integer 
     */
    public function getIdComment()
    {
        return $this->idComment;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Commentscourse
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
     * Set idCourse
     *
     * @param integer $idCourse
     * @return Commentscourse
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
     * Set content
     *
     * @param string $content
     * @return Commentscourse
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
     * Set commentdate
     *
     * @param \DateTime $commentdate
     * @return Commentscourse
     */
    public function setCommentdate($commentdate)
    {
        $this->commentdate = $commentdate;

        return $this;
    }

    /**
     * Get commentdate
     *
     * @return \DateTime 
     */
    public function getCommentdate()
    {
        return $this->commentdate;
    }
}
