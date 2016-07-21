<?php

namespace Client\SatisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Client\SatisBundle\Repository\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="type", type="string", length=20)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="display_type", type="string", length=50)
     */
    private $displayType;

    /**
     * @var string
     *
     * @ORM\Column(name="input_class", type="string", length=50)
     */
    private $inputClass;

    /**
     * @var integer
     *
     * @ORM\Column(name="mandatory", type="integer")
     */
    private $mandatory;

    /**
     * @var string
     *
     * @ORM\Column(name="placeholder", type="string", length=50)
     */
    private $placeholder;

    /**
   * @ORM\ManyToMany(targetEntity="Client\SatisBundle\Entity\Question", cascade={"persist"})
   * @ORM\JoinTable(name="Bind_Question_Etape")
   */
    private $etape;


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
     * Set type
     *
     * @param string $type
     * @return Question
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set displayType
     *
     * @param string $displayType
     * @return Question
     */
    public function setDisplayType($displayType)
    {
        $this->displayType = $displayType;

        return $this;
    }

    /**
     * Get displayType
     *
     * @return string 
     */
    public function getDisplayType()
    {
        return $this->displayType;
    }

    /**
     * Set inputClass
     *
     * @param string $inputClass
     * @return Question
     */
    public function setInputClass($inputClass)
    {
        $this->inputClass = $inputClass;

        return $this;
    }

    /**
     * Get inputClass
     *
     * @return string 
     */
    public function getInputClass()
    {
        return $this->inputClass;
    }

    /**
     * Set mandatory
     *
     * @param integer $mandatory
     * @return Question
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    /**
     * Get mandatory
     *
     * @return integer 
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Set placeholder
     *
     * @param string $placeholder
     * @return Question
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    /**
     * Get placeholder
     *
     * @return string 
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etape = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add etape
     *
     * @param \Client\SatisBundle\Entity\Question $etape
     * @return Question
     */
    public function addEtape(\Client\SatisBundle\Entity\Question $etape)
    {
        $this->etape[] = $etape;

        return $this;
    }

    /**
     * Remove etape
     *
     * @param \Client\SatisBundle\Entity\Question $etape
     */
    public function removeEtape(\Client\SatisBundle\Entity\Question $etape)
    {
        $this->etape->removeElement($etape);
    }

    /**
     * Get etape
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtape()
    {
        return $this->etape;
    }
}
