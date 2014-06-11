<?php

namespace Gestion\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Activite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\CoreBundle\Entity\ActiviteRepository")
 */
class Activite
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
     * @ORM\ManyToOne(targetEntity="Gestion\CoreBundle\Entity\ActiviteType",inversedBy="activites")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;
	

	/**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var float
     * @Assert\Type(type="numeric")
     * @ORM\Column(name="prix_plein", type="decimal", scale=4, nullable=true)
     */
    private $prixPlein;

    /**
     * @var float
     * @Assert\Type(type="numeric")
     * @ORM\Column(name="prix_reduit", type="decimal", scale=4, nullable=true)
     */
    private $prixReduit;

    /**
     * @var float
     * @Assert\Type(type="numeric")
     * @ORM\Column(name="taux", type="decimal", scale=4, nullable=true)
     */
    private $taux;

    /**
     * @var float
     * @Assert\Type(type="numeric")
     * @ORM\Column(name="nb_max", type="decimal", scale=4, nullable=true)
     */
    private $nbMax;
    /**
     * @var float
     * @Assert\Type(type="numeric")
     * @ORM\Column(name="age_max", type="decimal", scale=4, nullable=true)
     */
    private $ageMax;
    /**
     * @var integer
     * @ORM\Column(name="periodicite", type="integer", nullable=true)
     */
    private $periodicite;

    /**
     * @var float
     * @Assert\Type(type="numeric")
     * @ORM\Column(name="plafond", type="decimal", scale=4, nullable=true)
     */
    private $plafond;

    /**
     * @var ArrayCollection<MembreType> $membreTypes
     * @ORM\ManyToMany(targetEntity="Gestion\CoreBundle\Entity\MembreType", inversedBy="activites")
     * @ORM\JoinTable(name="membre_type_activite")
     * @ORM\OrderBy({"nom" = "asc"})
     **/
    private $membreTypes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membreTypes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Activite
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
     * Set prixPlein
     *
     * @param string $prixPlein
     * @return Activite
     */
    public function setPrixPlein($prixPlein)
    {
        $this->prixPlein = $prixPlein;

        return $this;
    }

    /**
     * Get prixPlein
     *
     * @return string 
     */
    public function getPrixPlein()
    {
        return $this->prixPlein;
    }

    /**
     * Set prixReduit
     *
     * @param string $prixReduit
     * @return Activite
     */
    public function setPrixReduit($prixReduit)
    {
        $this->prixReduit = $prixReduit;

        return $this;
    }

    /**
     * Get prixReduit
     *
     * @return string 
     */
    public function getPrixReduit()
    {
        return $this->prixReduit;
    }

    /**
     * Set taux
     *
     * @param string $taux
     * @return Activite
     */
    public function setTaux($taux)
    {
        $this->taux = $taux;

        return $this;
    }

    /**
     * Get taux
     *
     * @return string 
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Set nbMax
     *
     * @param string $nbMax
     * @return Activite
     */
    public function setNbMax($nbMax)
    {
        $this->nbMax = $nbMax;

        return $this;
    }

    /**
     * Get nbMax
     *
     * @return string 
     */
    public function getNbMax()
    {
        return $this->nbMax;
    }

    /**
     * Set periodicite
     *
     * @param integer $periodicite
     * @return Activite
     */
    public function setPeriodicite($periodicite)
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    /**
     * Get periodicite
     *
     * @return integer 
     */
    public function getPeriodicite()
    {
        return $this->periodicite;
    }

    /**
     * Set plafond
     *
     * @param string $plafond
     * @return Activite
     */
    public function setPlafond($plafond)
    {
        $this->plafond = $plafond;

        return $this;
    }

    /**
     * Get plafond
     *
     * @return string 
     */
    public function getPlafond()
    {
        return $this->plafond;
    }

    /**
     * Set type
     *
     * @param \Gestion\CoreBundle\Entity\ActiviteType $type
     * @return Activite
     */
    public function setType(\Gestion\CoreBundle\Entity\ActiviteType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Gestion\CoreBundle\Entity\ActiviteType 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add membreTypes
     *
     * @param \Gestion\CoreBundle\Entity\MembreType $membreTypes
     * @return Activite
     */
    public function addMembreType(\Gestion\CoreBundle\Entity\MembreType $membreTypes)
    {
        $this->membreTypes[] = $membreTypes;

        return $this;
    }

    /**
     * Remove membreTypes
     *
     * @param \Gestion\CoreBundle\Entity\MembreType $membreTypes
     */
    public function removeMembreType(\Gestion\CoreBundle\Entity\MembreType $membreTypes)
    {
        $this->membreTypes->removeElement($membreTypes);
    }

    /**
     * Get membreTypes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembreTypes()
    {
        return $this->membreTypes;
    }

    /**
     * Set ageMax
     *
     * @param string $ageMax
     * @return Activite
     */
    public function setAgeMax($ageMax)
    {
        $this->ageMax = $ageMax;

        return $this;
    }

    /**
     * Get ageMax
     *
     * @return string 
     */
    public function getAgeMax()
    {
        return $this->ageMax;
    }
}
