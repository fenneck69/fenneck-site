<?php

namespace Gestion\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Neutron\FormBundle\Model\MultiImageInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Gallerie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\CoreBundle\Entity\GallerieRepository.php")
 */
class Gallerie
{




    /**
     * @ORM\OneToMany(targetEntity="Gestion\CoreBundle\Entity\MultiImage", cascade={"all"},mappedBy="gallerie")
     * @ORM\OrderBy({"position" = "ASC"})
     * @ORM\JoinTable(
     *   inverseJoinColumns={@ORM\JoinColumn(unique=true,  onDelete="CASCADE")}
     * )
     * @Assert\Count(min=1,minMessage= "Vous devez ajouter au moins une photo")
     */
    private $items;


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
     * @ORM\Column(name="titre", type="string", length=255)
     * @Assert\NotNull()
     */
    private $titre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isAffiche", type="boolean")
     */
    private $isAffiche = true;
    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;



    public function __construct()
    {
        $this->items = new \Doctrine\Common\Collections\ArrayCollection();
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


    public function setCreated($created)
    {
        $this->created=$created;
        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }



    /**
     * Set titre
     *
     * @param string $titre
     * @return Gallerie
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set isAffiche
     *
     * @param boolean $isAffiche
     * @return Gallerie
     */
    public function setIsAffiche($isAffiche)
    {
        $this->isAffiche = $isAffiche;

        return $this;
    }

    /**
     * Get isAffiche
     *
     * @return boolean
     */
    public function getIsAffiche()
    {
        return $this->isAffiche;
    }




    /*******************GESTION ITEMS***************************/


    public function addItem(\Thrace\MediaBundle\Model\MultiImageInterface $item)
    {
        if (!$this->items->contains($item)){
            $item->setGallerie($this);
            $this->items->add($item);
        }
    }

    public function getItems()
    {
        return $this->items;
    }

    public function removeItem(\Thrace\MediaBundle\Model\MultiImageInterface $item)
    {
        if ($this->items->contains($item)){
            $this->items->removeElement($item);
        }
    }
}
