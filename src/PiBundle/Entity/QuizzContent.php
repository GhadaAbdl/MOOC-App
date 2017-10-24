<?php

namespace PiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuizzContent
 *
 * @ORM\Table(name="quizz_content", uniqueConstraints={@ORM\UniqueConstraint(name="id_quizz", columns={"id_quizz"})})
 * @ORM\Entity
 */
class QuizzContent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_content", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContent;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=100, nullable=false)
     */
    private $answer;

    /**
     * @var string
     *
     * @ORM\Column(name="suggestion", type="string", length=100, nullable=false)
     */
    private $suggestion;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=100, nullable=false)
     */
    private $question;

    /**
     * @var \Quizz
     *
     * @ORM\ManyToOne(targetEntity="Quizz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_quizz", referencedColumnName="id_quizz")
     * })
     */
    private $idQuizz;



    /**
     * Get idContent
     *
     * @return integer 
     */
    public function getIdContent()
    {
        return $this->idContent;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return QuizzContent
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set suggestion
     *
     * @param string $suggestion
     * @return QuizzContent
     */
    public function setSuggestion($suggestion)
    {
        $this->suggestion = $suggestion;

        return $this;
    }

    /**
     * Get suggestion
     *
     * @return string 
     */
    public function getSuggestion()
    {
        return $this->suggestion;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return QuizzContent
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set idQuizz
     *
     * @param \PiBundle\Entity\Quizz $idQuizz
     * @return QuizzContent
     */
    public function setIdQuizz(\PiBundle\Entity\Quizz $idQuizz = null)
    {
        $this->idQuizz = $idQuizz;

        return $this;
    }

    /**
     * Get idQuizz
     *
     * @return \PiBundle\Entity\Quizz 
     */
    public function getIdQuizz()
    {
        return $this->idQuizz;
    }
}
