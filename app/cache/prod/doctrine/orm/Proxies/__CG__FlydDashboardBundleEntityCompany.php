<?php

namespace Proxies\__CG__\Flyd\DashboardBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Company extends \Flyd\DashboardBundle\Entity\Company implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Flyd\\DashboardBundle\\Entity\\Company' . "\0" . 'id', 'name', 'addresses', 'contacts', 'job', 'entrance', 'origin', '' . "\0" . 'Flyd\\DashboardBundle\\Entity\\Company' . "\0" . 'createdAt', '' . "\0" . 'Flyd\\DashboardBundle\\Entity\\Company' . "\0" . 'updatedAt');
        }

        return array('__isInitialized__', '' . "\0" . 'Flyd\\DashboardBundle\\Entity\\Company' . "\0" . 'id', 'name', 'addresses', 'contacts', 'job', 'entrance', 'origin', '' . "\0" . 'Flyd\\DashboardBundle\\Entity\\Company' . "\0" . 'createdAt', '' . "\0" . 'Flyd\\DashboardBundle\\Entity\\Company' . "\0" . 'updatedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Company $proxy) {
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function addAddress(\Flyd\DashboardBundle\Entity\Address $address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAddress', array($address));

        return parent::addAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdress(\Flyd\DashboardBundle\Entity\Address $address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdress', array($address));

        return parent::removeAdress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddresses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddresses', array());

        return parent::getAddresses();
    }

    /**
     * {@inheritDoc}
     */
    public function addContact(\Flyd\DashboardBundle\Entity\Contact $contact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContact', array($contact));

        return parent::addContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContact(\Flyd\DashboardBundle\Entity\Contact $contact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContact', array($contact));

        return parent::removeContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getContacts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContacts', array());

        return parent::getContacts();
    }

    /**
     * {@inheritDoc}
     */
    public function setJob($job)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJob', array($job));

        return parent::setJob($job);
    }

    /**
     * {@inheritDoc}
     */
    public function getJob()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJob', array());

        return parent::getJob();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntrance($entrance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntrance', array($entrance));

        return parent::setEntrance($entrance);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntrance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntrance', array());

        return parent::getEntrance();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function updateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateDate', array());

        return parent::updateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function removeAddress(\Flyd\DashboardBundle\Entity\Address $addresses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAddress', array($addresses));

        return parent::removeAddress($addresses);
    }

    /**
     * {@inheritDoc}
     */
    public function setOrigin(\Flyd\DashboardBundle\Entity\Origin $origin = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrigin', array($origin));

        return parent::setOrigin($origin);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrigin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrigin', array());

        return parent::getOrigin();
    }

}
