<?php

namespace Mooc\QuizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuizzContent
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mooc\QuizzBundle\Entity\QuizzContentRepository")
 */
class QuizzContent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_content", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idContent;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_quizz", type="integer")
     */
    private $idQuizz;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=255)
     */
    private $answer;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="suggestion", type="string", length=255)
     */
    private $suggestion;

    /**
     * @var string
     *
     * @ORM\Column(name="suggestion2", type="string", length=255)
     */
    private $suggestion2;

    /**
     * @var string
     *
     * @ORM\Column(name="suggestion3", type="string", length=255)
     */
    private $suggestion3;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getIdContent()
    {
        return $this->idContent;
    }

    /**
     * Set idQuizz
     *
     * @param integer $idQuizz
     * @return QuizzContent
     */
    public function setIdQuizz($idQuizz)
    {
        $this->idQuizz = $idQuizz;

        return $this;
    }

    /**
     * Get idQuizz
     *
     * @return integer 
     */
    public function getIdQuizz()
    {
        return $this->idQuizz;
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
     * Set suggestion2
     *
     * @param string $suggestion2
     * @return QuizzContent
     */
    public function setSuggestion2($suggestion2)
    {
        $this->suggestion2 = $suggestion2;

        return $this;
    }

    /**
     * Get suggestion2
     *
     * @return string 
     */
    public function getSuggestion2()
    {
        return $this->suggestion2;
    }

    /**
     * Set suggestion3
     *
     * @param string $suggestion3
     * @return QuizzContent
     */
    public function setSuggestion3($suggestion3)
    {
        $this->suggestion3 = $suggestion3;

        return $this;
    }

    /**
     * Get suggestion3
     *
     * @return string 
     */
    public function getSuggestion3()
    {
        return $this->suggestion3;
    }
}
