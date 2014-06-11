<?php

namespace Gestion\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Thrace\MediaBundle\Model\FileInterface;

/**
 * Famille
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\CoreBundle\Entity\FamilleRepository")
 */
class Famille
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
     * @ORM\OneToOne(targetEntity="File", cascade={"all"}, orphanRemoval=true)
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    protected $rib;
    /**
     * @var datetime $dateEntree
     *
     * @ORM\Column(type="date")
     */
    private $dateEntree;
    /**
     * @ORM\ManyToOne(targetEntity="Gestion\CoreBundle\Entity\Quotient")
     * @ORM\JoinColumn(nullable=false)
     */
    private $quotient;

    /**
     * @ORM\ManyToOne(targetEntity="Gestion\CoreBundle\Entity\Agence")
     * @ORM\JoinColumn(nullable=false)
     */
    private $agence;


    /**
     * @var ArrayCollection<Membres> $membres
     *
     * @ORM\OneToMany(targetEntity="Gestion\CoreBundle\Entity\Membre", mappedBy="famille", cascade={"all"})
     */
    private $membres;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membres = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set prenom
     *
     * @param string $prenom
     * @return Famille
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setRib(FileInterface $rib = null)
    {
        $this->rib = $rib;
    }

    public function getRib()
    {
        return $this->rib;
    }

    /**
     * Set quotient
     *
     * @param \Gestion\CoreBundle\Entity\Quotient $quotient
     * @return Famille
     */
    public function setQuotient(\Gestion\CoreBundle\Entity\Quotient $quotient)
    {
        $this->quotient = $quotient;

        return $this;
    }

    /**
     * Get quotient
     *
     * @return \Gestion\CoreBundle\Entity\Quotient 
     */
    public function getQuotient()
    {
        return $this->quotient;
    }

    /**
     * Set agence
     *
     * @param \Gestion\CoreBundle\Entity\Agence $agence
     * @return Famille
     */
    public function setAgence(\Gestion\CoreBundle\Entity\Agence $agence)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return \Gestion\CoreBundle\Entity\Agence 
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Add membres
     *
     * @param \Gestion\CoreBundle\Entity\Membre $membres
     * @return Famille
     */
    public function addMembre(\Gestion\CoreBundle\Entity\Membre $membres)
    {
        $membres->setFamille($this);
        $this->membres[] = $membres;

        return $this;
    }
    public function setMembres($membres)
    {
        foreach($membres as $membre){

            $this->addMembre($membre);
        }
       return $this;
    }
    /**
     * Remove membres
     *
     * @param \Gestion\CoreBundle\Entity\Membre $membres
     */
    public function removeMembre(\Gestion\CoreBundle\Entity\Membre $membres)
    {
        $this->membres->removeElement($membres);
    }

    /**
     * Get membres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembres()
    {
        return $this->membres;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Famille
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
     * Set dateEntree
     *
     * @param \DateTime $dateEntree
     * @return Famille
     */
    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    /**
     * Get dateEntree
     *
     * @return \DateTime 
     */
    public function getDateEntree()
    {
        return $this->dateEntree;
    }
}
