<?php

namespace Proxies\__CG__\Gestion\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Activite extends \Gestion\CoreBundle\Entity\Activite implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'id', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'type', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'nom', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'prixPlein', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'prixReduit', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'taux', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'nbMax', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'ageMax', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'periodicite', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'plafond', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'membreTypes');
        }

        return array('__isInitialized__', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'id', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'type', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'nom', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'prixPlein', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'prixReduit', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'taux', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'nbMax', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'ageMax', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'periodicite', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'plafond', '' . "\0" . 'Gestion\\CoreBundle\\Entity\\Activite' . "\0" . 'membreTypes');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Activite $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixPlein($prixPlein)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixPlein', array($prixPlein));

        return parent::setPrixPlein($prixPlein);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixPlein()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixPlein', array());

        return parent::getPrixPlein();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrixReduit($prixReduit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrixReduit', array($prixReduit));

        return parent::setPrixReduit($prixReduit);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrixReduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrixReduit', array());

        return parent::getPrixReduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaux($taux)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaux', array($taux));

        return parent::setTaux($taux);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaux()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaux', array());

        return parent::getTaux();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbMax($nbMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbMax', array($nbMax));

        return parent::setNbMax($nbMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbMax', array());

        return parent::getNbMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeriodicite($periodicite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeriodicite', array($periodicite));

        return parent::setPeriodicite($periodicite);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeriodicite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeriodicite', array());

        return parent::getPeriodicite();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlafond($plafond)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlafond', array($plafond));

        return parent::setPlafond($plafond);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlafond()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlafond', array());

        return parent::getPlafond();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(\Gestion\CoreBundle\Entity\ActiviteType $type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', array($type));

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', array());

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function addMembreType(\Gestion\CoreBundle\Entity\MembreType $membreTypes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMembreType', array($membreTypes));

        return parent::addMembreType($membreTypes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMembreType(\Gestion\CoreBundle\Entity\MembreType $membreTypes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMembreType', array($membreTypes));

        return parent::removeMembreType($membreTypes);
    }

    /**
     * {@inheritDoc}
     */
    public function getMembreTypes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMembreTypes', array());

        return parent::getMembreTypes();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgeMax($ageMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgeMax', array($ageMax));

        return parent::setAgeMax($ageMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgeMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgeMax', array());

        return parent::getAgeMax();
    }

}
