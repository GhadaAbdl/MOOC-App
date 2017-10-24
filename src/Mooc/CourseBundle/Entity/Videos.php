<?php

namespace Mooc\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Videos
 *
 * @ORM\Table(name="videos")
 * @ORM\Entity
 */
class Videos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_video", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duration", type="time", nullable=false)
     */
    private $duration;



    /**
     * Get idVideo
     *
     * @return integer 
     */
    public function getIdVideo()
    {
        return $this->idVideo;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Videos
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

    /**
     * Set duration
     *
     * @param \DateTime $duration
     * @return Videos
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
}
