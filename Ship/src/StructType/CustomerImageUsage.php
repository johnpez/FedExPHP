<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerImageUsage StructType
 * @subpackage Structs
 */
class CustomerImageUsage extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * Constructor method for CustomerImageUsage
     * @uses CustomerImageUsage::setType()
     * @uses CustomerImageUsage::setId()
     * @param string $type
     * @param string $id
     */
    public function __construct($type = null, $id = null)
    {
        $this
            ->setType($type)
            ->setId($id);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\CustomerImageUsageType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\CustomerImageUsageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerImageUsage
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\CustomerImageUsageType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\CustomerImageUsageType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ImageId::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ImageId::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $id
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerImageUsage
     */
    public function setId($id = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ImageId::valueIsValid($id)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $id, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ImageId::getValidValues())), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomerImageUsage
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
