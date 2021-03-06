<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ApplicationUsers extends \App\Entity\ApplicationUsers implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'id', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'firstname', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'lastname', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'mobilenumber', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'address', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'userId', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'status', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'createAt', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'CreatedBy', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'lastActivityDate', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'subUsers', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'ParentId', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'profileImage', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'currentPlan', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'planStatus', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'prevPlan', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'addons'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'id', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'firstname', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'lastname', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'mobilenumber', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'address', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'userId', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'status', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'createAt', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'CreatedBy', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'lastActivityDate', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'subUsers', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'ParentId', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'profileImage', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'currentPlan', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'planStatus', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'prevPlan', '' . "\0" . 'App\\Entity\\ApplicationUsers' . "\0" . 'addons'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ApplicationUsers $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname(string $firstname): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname(string $lastname): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobilenumber(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobilenumber', []);

        return parent::getMobilenumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobilenumber(string $mobilenumber): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobilenumber', [$mobilenumber]);

        return parent::setMobilenumber($mobilenumber);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress(string $address): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId(): ?\App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserId', []);

        return parent::getUserId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserId(?\App\Entity\Users $userId): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserId', [$userId]);

        return parent::setUserId($userId);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(int $status): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateAt', []);

        return parent::getCreateAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreateAt(\DateTimeInterface $createAt): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreateAt', [$createAt]);

        return parent::setCreateAt($createAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(string $CreatedBy): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$CreatedBy]);

        return parent::setCreatedBy($CreatedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastActivityDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastActivityDate', []);

        return parent::getLastActivityDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastActivityDate(\DateTimeInterface $lastActivityDate): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastActivityDate', [$lastActivityDate]);

        return parent::setLastActivityDate($lastActivityDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubUsers(): ?\App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubUsers', []);

        return parent::getSubUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubUsers(?\App\Entity\ApplicationUsers $subUsers): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubUsers', [$subUsers]);

        return parent::setSubUsers($subUsers);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfileImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfileImage', []);

        return parent::getProfileImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfileImage(string $profileImage): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfileImage', [$profileImage]);

        return parent::setProfileImage($profileImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentPlan(): ?\App\Entity\UserPlan
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentPlan', []);

        return parent::getCurrentPlan();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentPlan(?\App\Entity\UserPlan $currentPlan): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentPlan', [$currentPlan]);

        return parent::setCurrentPlan($currentPlan);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlanStatus(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlanStatus', []);

        return parent::getPlanStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlanStatus(int $planStatus): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlanStatus', [$planStatus]);

        return parent::setPlanStatus($planStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrevPlan(): ?\App\Entity\UserPlan
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrevPlan', []);

        return parent::getPrevPlan();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrevPlan(?\App\Entity\UserPlan $prevPlan): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrevPlan', [$prevPlan]);

        return parent::setPrevPlan($prevPlan);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddons(): ?\App\Entity\UserAddons
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddons', []);

        return parent::getAddons();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddons(?\App\Entity\UserAddons $addons): \App\Entity\ApplicationUsers
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddons', [$addons]);

        return parent::setAddons($addons);
    }

}
