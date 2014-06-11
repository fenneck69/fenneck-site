<?php

namespace Gestion\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Remboursement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\CoreBundle\Entity\RemboursementRepository")
 * @Assert\Callback(methods={"isValid"})
 * @ORM\HasLifecycleCallbacks()
 */
class Remboursement
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
     * @ORM\ManyToOne(targetEntity="Gestion\CoreBundle\Entity\Membre",inversedBy="remboursements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $membre;
	
	/**
     * @ORM\ManyToOne(targetEntity="Gestion\CoreBundle\Entity\Activite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $activite;
	
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

	
	/**
     * @var float
     * @Assert\Type(type="numeric")
	 * @Assert\NotBlank()
     * @ORM\Column(name="prix", type="decimal", scale=4)
     */
    private $prix;
    /**
     * @var integer
     * @Assert\Type(type="numeric")
     * @Assert\NotBlank()
     * @ORM\Column(name="quantite", type="integer", scale=4)
     */
    private $quantite=1;
	/**
     * @var float
     * @ORM\Column(name="montantparticipation", type="decimal", scale=4)
     */
    private $montantParticipation;
	
	/**
     * @var float
     * @ORM\Column(name="montantcheque", type="decimal", scale=4, nullable=true)
     */
    private $montantCheque;
	
	   /**
     * @var boolean $valide
     * @ORM\Column(name="valide", type="boolean", nullable=true)
     */
    private $valide;

	
	
    /**
     * @var string
     * @ORM\Column(name="numcheque", type="string", length=255, nullable=true)
     */
    private $numCheque;
	
	/**
     * @var datetime $dateActivite
     *
     * @ORM\Column(type="datetime")
     */
    private $dateActivite;
    /********CALLABCK POUR ANNE UNIQUE / AGENCE**********/
	
    public function isValid($context)
    {
        global $kernel;
        if ('AppCache' == get_class($kernel)) {
            $kernel = $kernel->getKernel();
        }
        $em = $kernel->getContainer()->get('doctrine')->getEntityManager();

        /***********ON VERIFIE SI LE SALARIE DE LA FAMILLE A BIEN PLUS DE 6 MOIS D'ANCIENNETE !**************/
        $dateTestEmploye6Mois = clone $this->getMembre()->getFamille()->getDateEntree();
        $dateTestEmploye6Mois->add(new \DateInterval('P6M'));
        $dateTestNow = new \DateTime();
        if($dateTestNow->getTimestamp()<$dateTestEmploye6Mois->getTimestamp()) {
            $context->addViolation( "L'employé n'a pas l'ancienneté nécessaire (6 mois) pour bénéficié d'un remboursement", array(), null);
        }

        /***********ON VERIFIE SI LE MEMBRE EST UN ENFANT S'IL N'A PAS PLUS DE 16 ans !**************/
        if($this->getMembre()->getType()->getCode()=="enfant"){
            $dateTest = clone $this->getDateActivite();
            $dateTest->sub(new \DateInterval('P16Y'));
            if($dateTest->getTimestamp()>$this->getMembre()->getDateNaissance()->getTimestamp()) {
                $context->addViolation( "L'enfant a dépassé l'age maximum (16 ans) pour cette activité", array(), null);
            }
        }


        switch($this->getActivite()->getType()->getCode()){
            /*********** ON TRAITE LES ACTIVITE DE TYPE PRIX FIXE ET LE CAS DES CINEMAS **************/
            case 'prixfixe':
            case 'cinema':
                /***********ON VERIFIE QUE LA FAMILLE N'A PAS CUMULE PLUS DE FOIS QUE PERMIS DES REMBOURSEMENTS POUR CETTE ACTIVITE**************/
                $nbRemboursement = $em->getRepository('GestionCoreBundle:Remboursement')->getNbRemboursement(
                    $this->getMembre(),
                    $this->getActivite()
                );
                if($nbRemboursement>=$this->getActivite()->getNbMax()){
                    $context->addViolation("Le nombre de remboursement pour cette activité et cette famille est arrivé au plafond : (".$this->getActivite()." - Plafond : ".$this->getActivite()->getNbMax().")", array(), null);
                }elseif($this->getActivite()->getNbMax()-$nbRemboursement<$this->getQuantite()){
                    $context->addViolation("Quantite non dispo: (restante pour le mois/anne :".($this->getActivite()->getNbMax()-$nbRemboursement).")", array(), null);
                }
                break;
            case 'tauxnbplafond':
                /*********** ON TRAITE LES ACTIVITE DE TYPE TAUX FIXE AVEC UN PLAFOND **************/
                /***********ON VERIFIE QUE LE MEMBRE SOIT BIEN UN TYPE DE MEMBRE TOLERE DANS L'ACTIVITE**************/
                $isAllowed = false;
                foreach($this->getActivite()->getMembreTypes() as $membreType){
                    if($membreType->getCode()== $this->getMembre()->getType()->getCode()){
                        $isAllowed = true;
                    }
                }
                if(!$isAllowed){
                    $context->addViolation("Attention vous ne pouvez pas rembourser cette activité à un membre de type : ".$this->getMembre()->getType()->getNom()."", array(), null);
                }else{
                    /***********ON VERIFIE QUE LA FAMILLE N'A PAS CULUME PLUS DE FOIS QUE PERMIS DES REMBOURSEMENTS POUR CETTE ACTIVITE**************/
                    $nbRemboursement = $em->getRepository('GestionCoreBundle:Remboursement')->getNbRemboursement(
                        $this->getMembre(),
                        $this->getActivite()
                    );

                    if($nbRemboursement>=$this->getActivite()->getNbMax()){
                        $context->addViolation("Le nombre de remboursement pour cette activité et cette famille est arrivé au plafond : (".$this->getActivite()." - Plafond : ".$this->getActivite()->getNbMax().")", array(), null);
                    }elseif($this->getActivite()->getNbMax()-$nbRemboursement<$this->getQuantite()){
                        $context->addViolation("Quantite non dispo: (restante pour le mois/anne :".($this->getActivite()->getNbMax()-$nbRemboursement).")", array(), null);
                    }
                }

                break;
            case 'quotient':
                /*********** ON TRAITE LES ACTIVITE DEPENDANT DU SALAIRE ANNUEL DE L'EMPLOYE (CHEQUES VACS) **************/
                /***********ON VERIFIE QUE LA FAMILLE N'A PAS CULUME PLUS DE FOIS QUE PERMIS DES REMBOURSEMENTS POUR CETTE ACTIVITE**************/
                $nbRemboursement = $em->getRepository('GestionCoreBundle:Remboursement')->getNbRemboursement(
                    $this->getMembre(),
                    $this->getActivite()
                );

                if($nbRemboursement>=$this->getActivite()->getNbMax()){
                    $context->addViolation("Le nombre de remboursement pour cette activité et cette famille est arrivé au plafond : (".$this->getActivite()." - Plafond : ".$this->getActivite()->getNbMax().")", array(), null);
                }elseif($this->getActivite()->getNbMax()-$nbRemboursement<$this->getQuantite()){
                    $context->addViolation("Quantite non dispo: (restante pour le mois/anne :".($this->getActivite()->getNbMax()-$nbRemboursement).")", array(), null);
                }


                /* FIN DES TESTS */
                break;

        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function calculMontant(){
        switch($this->getActivite()->getType()->getCode()){
            case 'prixfixe':
            case 'cinema':
                $this->setPrix($this->getActivite()->getPrixPlein()*$this->getQuantite());
                $this->setMontantParticipation(($this->getActivite()->getPrixPlein()-$this->getActivite()->getPrixReduit())*$this->getQuantite());

                break;
            case 'tauxnbplafond':
                $participation = ($this->getActivite()->getTaux()/100)*$this->getPrix();
                if($participation > $this->getActivite()->getPlafond()){
                    $participation = $this->getActivite()->getPlafond();
                }
                $this->setMontantParticipation($participation*$this->getQuantite());
                break;
            case 'quotient':
                $this->setPrix($this->getMembre()->getFamille()->getQuotient()->getPlan());
                $this->setMontantParticipation($this->getMembre()->getFamille()->getQuotient()->getBonification());
                break;

        }
        $this->setMontantCheque($this->getMontantParticipation()*$this->getQuantite());


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
     * Set created
     *
     * @param \DateTime $created
     * @return Remboursement
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Remboursement
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Remboursement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Remboursement
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set montantParticipation
     *
     * @param string $montantParticipation
     * @return Remboursement
     */
    public function setMontantParticipation($montantParticipation)
    {
        $this->montantParticipation = $montantParticipation;

        return $this;
    }

    /**
     * Get montantParticipation
     *
     * @return string 
     */
    public function getMontantParticipation()
    {
        return $this->montantParticipation;
    }

    /**
     * Set montantCheque
     *
     * @param string $montantCheque
     * @return Remboursement
     */
    public function setMontantCheque($montantCheque)
    {
        $this->montantCheque = $montantCheque;

        return $this;
    }

    /**
     * Get montantCheque
     *
     * @return string 
     */
    public function getMontantCheque()
    {
        return $this->montantCheque;
    }

    /**
     * Set numCheque
     *
     * @param string $numCheque
     * @return Remboursement
     */
    public function setNumCheque($numCheque)
    {
        $this->numCheque = $numCheque;

        return $this;
    }

    /**
     * Get numCheque
     *
     * @return string 
     */
    public function getNumCheque()
    {
        return $this->numCheque;
    }

    /**
     * Set dateActivite
     *
     * @param \DateTime $dateActivite
     * @return Remboursement
     */
    public function setDateActivite($dateActivite)
    {
        $this->dateActivite = $dateActivite;

        return $this;
    }

    /**
     * Get dateActivite
     *
     * @return \DateTime 
     */
    public function getDateActivite()
    {
        return $this->dateActivite;
    }

    /**
     * Set membre
     *
     * @param \Gestion\CoreBundle\Entity\Membre $membre
     * @return Remboursement
     */
    public function setMembre(\Gestion\CoreBundle\Entity\Membre $membre)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \Gestion\CoreBundle\Entity\Membre 
     */
    public function getMembre()
    {
        return $this->membre;
    }

    /**
     * Set activite
     *
     * @param \Gestion\CoreBundle\Entity\Activite $activite
     * @return Remboursement
     */
    public function setActivite(\Gestion\CoreBundle\Entity\Activite $activite)
    {
        $this->activite = $activite;

        return $this;
    }

    /**
     * Get activite
     *
     * @return \Gestion\CoreBundle\Entity\Activite 
     */
    public function getActivite()
    {
        return $this->activite;
    }
	
    /**
     * Set valide
     *
     * @param boolean $valide
     */
    public function setValide($valide)
    {
        $this->valide = $valide;
    }

    /**
     * Get valide
     *
     * @return boolean 
     */
    public function getValide()
    {
        return $this->valide;
    }
	
}
