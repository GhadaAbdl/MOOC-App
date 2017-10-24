<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disciplines
 *
 * @ORM\Table(name="disciplines")
 * @ORM\Entity
 */
class Disciplines
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_disp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDisp;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;



    /**
     * Get idDisp
     *
     * @return integer 
     */
    public function getIdDisp()
    {
        return $this->idDisp;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Disciplines
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
