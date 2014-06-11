<?php

namespace Gestion\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Quotient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\CoreBundle\Entity\QuotientRepository")
 */
class Quotient
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
     * @var float
     * @Assert\Type(type="numeric")
     * @Assert\NotBlank()
     * @ORM\Column(name="minimum", type="decimal", scale=4,nullable=true)
     */
    private $minimum;
    /**
     * @var float
     * @Assert\Type(type="numeric")
     * @Assert\NotBlank()
     * @ORM\Column(name="maximum", type="decimal", scale=4,nullable=true)
     */
    private $maximum;

    /**
     * @var float
     * @Assert\Type(type="numeric")
     * @Assert\NotBlank()
     * @ORM\Column(name="plan", type="decimal", scale=4,nullable=true)
     */
    private $plan;

    /**
     * @var float
     * @Assert\Type(type="numeric")
     * @Assert\NotBlank()
     * @ORM\Column(name="prelevement", type="decimal", scale=4,nullable=true)
     */
    private $prelevement;
    /**
     * @var float
     * @Assert\Type(type="numeric")
     * @Assert\NotBlank()
     * @ORM\Column(name="bonification", type="decimal", scale=4,nullable=true)
     */
    private $bonification;


    public function __toString()
    {
        return 'de '.$this->minimum.' à '.$this->maximum;
    }

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
     * Set minimum
     *
     * @param string $minimum
     * @return Quotient
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * Get minimum
     *
     * @return string 
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Set maximum
     *
     * @param string $maximum
     * @return Quotient
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;

        return $this;
    }

    /**
     * Get maximum
     *
     * @return string 
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Set prelevement
     *
     * @param string $prelevement
     * @return Quotient
     */
    public function setPrelevement($prelevement)
    {
        $this->prelevement = $prelevement;

        return $this;
    }

    /**
     * Get prelevement
     *
     * @return string 
     */
    public function getPrelevement()
    {
        return $this->prelevement;
    }

    /**
     * Set bonification
     *
     * @param string $bonification
     * @return Quotient
     */
    public function setBonification($bonification)
    {
        $this->bonification = $bonification;

        return $this;
    }

    /**
     * Get bonification
     *
     * @return string 
     */
    public function getBonification()
    {
        return $this->bonification;
    }

    /**
     * Set plan
     *
     * @param string $plan
     * @return Quotient
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return string 
     */
    public function getPlan()
    {
        return $this->plan;
    }
}
