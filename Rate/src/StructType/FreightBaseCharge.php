<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightBaseCharge StructType
 * Meta informations extracted from the WSDL
 * - documentation: Individual charge which contributes to the total base charge for the shipment.
 * @subpackage Structs
 */
class FreightBaseCharge extends AbstractStructBase
{
    /**
     * The FreightClass
     * Meta informations extracted from the WSDL
     * - documentation: Freight class for this line item.
     * - minOccurs: 0
     * @var string
     */
    public $FreightClass;
    /**
     * The RatedAsClass
     * Meta informations extracted from the WSDL
     * - documentation: Effective freight class used for rating this line item.
     * - minOccurs: 0
     * @var string
     */
    public $RatedAsClass;
    /**
     * The NmfcCode
     * Meta informations extracted from the WSDL
     * - documentation: NMFC Code for commodity.
     * - minOccurs: 0
     * @var string
     */
    public $NmfcCode;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided description for this commodity or class line.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Weight for this commodity or class line.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Weight
     */
    public $Weight;
    /**
     * The ChargeRate
     * Meta informations extracted from the WSDL
     * - documentation: Rate or factor applied to this line item.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money
     */
    public $ChargeRate;
    /**
     * The ChargeBasis
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the manner in which the chargeRate for this line item was applied.
     * - minOccurs: 0
     * @var string
     */
    public $ChargeBasis;
    /**
     * The ExtendedAmount
     * Meta informations extracted from the WSDL
     * - documentation: The net or extended charge for this line item.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money
     */
    public $ExtendedAmount;
    /**
     * Constructor method for FreightBaseCharge
     * @uses FreightBaseCharge::setFreightClass()
     * @uses FreightBaseCharge::setRatedAsClass()
     * @uses FreightBaseCharge::setNmfcCode()
     * @uses FreightBaseCharge::setDescription()
     * @uses FreightBaseCharge::setWeight()
     * @uses FreightBaseCharge::setChargeRate()
     * @uses FreightBaseCharge::setChargeBasis()
     * @uses FreightBaseCharge::setExtendedAmount()
     * @param string $freightClass
     * @param string $ratedAsClass
     * @param string $nmfcCode
     * @param string $description
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Weight $weight
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $chargeRate
     * @param string $chargeBasis
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $extendedAmount
     */
    public function __construct($freightClass = null, $ratedAsClass = null, $nmfcCode = null, $description = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Weight $weight = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $chargeRate = null, $chargeBasis = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $extendedAmount = null)
    {
        $this
            ->setFreightClass($freightClass)
            ->setRatedAsClass($ratedAsClass)
            ->setNmfcCode($nmfcCode)
            ->setDescription($description)
            ->setWeight($weight)
            ->setChargeRate($chargeRate)
            ->setChargeBasis($chargeBasis)
            ->setExtendedAmount($extendedAmount);
    }
    /**
     * Get FreightClass value
     * @return string|null
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }
    /**
     * Set FreightClass value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightClassType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightClassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $freightClass
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\FreightBaseCharge
     */
    public function setFreightClass($freightClass = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightClassType::valueIsValid($freightClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freightClass, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightClassType::getValidValues())), __LINE__);
        }
        $this->FreightClass = $freightClass;
        return $this;
    }
    /**
     * Get RatedAsClass value
     * @return string|null
     */
    public function getRatedAsClass()
    {
        return $this->RatedAsClass;
    }
    /**
     * Set RatedAsClass value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightClassType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightClassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ratedAsClass
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\FreightBaseCharge
     */
    public function setRatedAsClass($ratedAsClass = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightClassType::valueIsValid($ratedAsClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ratedAsClass, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightClassType::getValidValues())), __LINE__);
        }
        $this->RatedAsClass = $ratedAsClass;
        return $this;
    }
    /**
     * Get NmfcCode value
     * @return string|null
     */
    public function getNmfcCode()
    {
        return $this->NmfcCode;
    }
    /**
     * Set NmfcCode value
     * @param string $nmfcCode
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\FreightBaseCharge
     */
    public function setNmfcCode($nmfcCode = null)
    {
        // validation for constraint: string
        if (!is_null($nmfcCode) && !is_string($nmfcCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nmfcCode)), __LINE__);
        }
        $this->NmfcCode = $nmfcCode;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\FreightBaseCharge
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Weight value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Weight $weight
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\FreightBaseCharge
     */
    public function setWeight(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get ChargeRate value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money|null
     */
    public function getChargeRate()
    {
        return $this->ChargeRate;
    }
    /**
     * Set ChargeRate value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $chargeRate
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\FreightBaseCharge
     */
    public function setChargeRate(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $chargeRate = null)
    {
        $this->ChargeRate = $chargeRate;
        return $this;
    }
    /**
     * Get ChargeBasis value
     * @return string|null
     */
    public function getChargeBasis()
    {
        return $this->ChargeBasis;
    }
    /**
     * Set ChargeBasis value
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightChargeBasisType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightChargeBasisType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $chargeBasis
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\FreightBaseCharge
     */
    public function setChargeBasis($chargeBasis = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightChargeBasisType::valueIsValid($chargeBasis)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $chargeBasis, implode(', ', \NicholasCreativeMedia\FedExPHP\Rate\EnumType\FreightChargeBasisType::getValidValues())), __LINE__);
        }
        $this->ChargeBasis = $chargeBasis;
        return $this;
    }
    /**
     * Get ExtendedAmount value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money|null
     */
    public function getExtendedAmount()
    {
        return $this->ExtendedAmount;
    }
    /**
     * Set ExtendedAmount value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $extendedAmount
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\FreightBaseCharge
     */
    public function setExtendedAmount(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $extendedAmount = null)
    {
        $this->ExtendedAmount = $extendedAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\FreightBaseCharge
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
