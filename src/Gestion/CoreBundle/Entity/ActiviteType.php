<?php

namespace Gestion\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ActiviteType
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\CoreBundle\Entity\ActiviteTypeRepository")
 */
class ActiviteType
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
     * @Assert\NotBlank()
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

	/**
	 * @var ArrayCollection<Activites> $activites
	 *
     * @ORM\OneToMany(targetEntity="Gestion\CoreBundle\Entity\Activite", mappedBy="type", cascade={"all"})
     */
    private $activites;
	


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->activites = new \Doctrine\Common\Collections\ArrayCollection();
    }



    public function __toString()
    {
        return $this->nom;
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
     * Set nom
     *
     * @param string $nom
     * @return ActiviteType
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return ActiviteType
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Add activites
     *
     * @param \Gestion\CoreBundle\Entity\Activite $activites
     * @return ActiviteType
     */
    public function addActivite(\Gestion\CoreBundle\Entity\Activite $activites)
    {
        $this->activites[] = $activites;

        return $this;
    }

    /**
     * Remove activites
     *
     * @param \Gestion\CoreBundle\Entity\Activite $activites
     */
    public function removeActivite(\Gestion\CoreBundle\Entity\Activite $activites)
    {
        $this->activites->removeElement($activites);
    }

    /**
     * Get activites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivites()
    {
        return $this->activites;
    }
}
