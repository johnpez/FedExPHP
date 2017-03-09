<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariableHandlingCharges StructType
 * @subpackage Structs
 */
class VariableHandlingCharges extends AbstractStructBase
{
    /**
     * The VariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money
     */
    public $VariableHandlingCharge;
    /**
     * The FixedVariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money
     */
    public $FixedVariableHandlingCharge;
    /**
     * The PercentVariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money
     */
    public $PercentVariableHandlingCharge;
    /**
     * The TotalCustomerCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money
     */
    public $TotalCustomerCharge;
    /**
     * Constructor method for VariableHandlingCharges
     * @uses VariableHandlingCharges::setVariableHandlingCharge()
     * @uses VariableHandlingCharges::setFixedVariableHandlingCharge()
     * @uses VariableHandlingCharges::setPercentVariableHandlingCharge()
     * @uses VariableHandlingCharges::setTotalCustomerCharge()
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $variableHandlingCharge
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $fixedVariableHandlingCharge
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $percentVariableHandlingCharge
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $totalCustomerCharge
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $variableHandlingCharge = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $fixedVariableHandlingCharge = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $percentVariableHandlingCharge = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $totalCustomerCharge = null)
    {
        $this
            ->setVariableHandlingCharge($variableHandlingCharge)
            ->setFixedVariableHandlingCharge($fixedVariableHandlingCharge)
            ->setPercentVariableHandlingCharge($percentVariableHandlingCharge)
            ->setTotalCustomerCharge($totalCustomerCharge);
    }
    /**
     * Get VariableHandlingCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money|null
     */
    public function getVariableHandlingCharge()
    {
        return $this->VariableHandlingCharge;
    }
    /**
     * Set VariableHandlingCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $variableHandlingCharge
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\VariableHandlingCharges
     */
    public function setVariableHandlingCharge(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $variableHandlingCharge = null)
    {
        $this->VariableHandlingCharge = $variableHandlingCharge;
        return $this;
    }
    /**
     * Get FixedVariableHandlingCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money|null
     */
    public function getFixedVariableHandlingCharge()
    {
        return $this->FixedVariableHandlingCharge;
    }
    /**
     * Set FixedVariableHandlingCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $fixedVariableHandlingCharge
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\VariableHandlingCharges
     */
    public function setFixedVariableHandlingCharge(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $fixedVariableHandlingCharge = null)
    {
        $this->FixedVariableHandlingCharge = $fixedVariableHandlingCharge;
        return $this;
    }
    /**
     * Get PercentVariableHandlingCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money|null
     */
    public function getPercentVariableHandlingCharge()
    {
        return $this->PercentVariableHandlingCharge;
    }
    /**
     * Set PercentVariableHandlingCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $percentVariableHandlingCharge
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\VariableHandlingCharges
     */
    public function setPercentVariableHandlingCharge(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $percentVariableHandlingCharge = null)
    {
        $this->PercentVariableHandlingCharge = $percentVariableHandlingCharge;
        return $this;
    }
    /**
     * Get TotalCustomerCharge value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money|null
     */
    public function getTotalCustomerCharge()
    {
        return $this->TotalCustomerCharge;
    }
    /**
     * Set TotalCustomerCharge value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $totalCustomerCharge
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\VariableHandlingCharges
     */
    public function setTotalCustomerCharge(\NicholasCreativeMedia\FedExPHP\Rate\StructType\Money $totalCustomerCharge = null)
    {
        $this->TotalCustomerCharge = $totalCustomerCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\VariableHandlingCharges
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
