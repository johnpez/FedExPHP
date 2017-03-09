<?php

namespace NicholasCreativeMedia\FedExPHP\Track\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactAndAddress StructType
 * @subpackage Structs
 */
class ContactAndAddress extends AbstractStructBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\Contact
     */
    public $Contact;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\Address
     */
    public $Address;
    /**
     * Constructor method for ContactAndAddress
     * @uses ContactAndAddress::setContact()
     * @uses ContactAndAddress::setAddress()
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Contact $contact
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Address $address
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Track\StructType\Contact $contact = null, \NicholasCreativeMedia\FedExPHP\Track\StructType\Address $address = null)
    {
        $this
            ->setContact($contact)
            ->setAddress($address);
    }
    /**
     * Get Contact value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Contact $contact
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\ContactAndAddress
     */
    public function setContact(\NicholasCreativeMedia\FedExPHP\Track\StructType\Contact $contact = null)
    {
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Get Address value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\Address|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Address $address
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\ContactAndAddress
     */
    public function setAddress(\NicholasCreativeMedia\FedExPHP\Track\StructType\Address $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\ContactAndAddress
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
