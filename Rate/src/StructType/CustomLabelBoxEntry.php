<?php

namespace NicholasCreativeMedia\FedExPHP\Rate\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelBoxEntry StructType
 * Meta informations extracted from the WSDL
 * - documentation: Solid (filled) rectangular area on label.
 * @subpackage Structs
 */
class CustomLabelBoxEntry extends AbstractStructBase
{
    /**
     * The TopLeftCorner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition
     */
    public $TopLeftCorner;
    /**
     * The BottomRightCorner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition
     */
    public $BottomRightCorner;
    /**
     * Constructor method for CustomLabelBoxEntry
     * @uses CustomLabelBoxEntry::setTopLeftCorner()
     * @uses CustomLabelBoxEntry::setBottomRightCorner()
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $topLeftCorner
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $bottomRightCorner
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $topLeftCorner = null, \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $bottomRightCorner = null)
    {
        $this
            ->setTopLeftCorner($topLeftCorner)
            ->setBottomRightCorner($bottomRightCorner);
    }
    /**
     * Get TopLeftCorner value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition|null
     */
    public function getTopLeftCorner()
    {
        return $this->TopLeftCorner;
    }
    /**
     * Set TopLeftCorner value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $topLeftCorner
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelBoxEntry
     */
    public function setTopLeftCorner(\NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $topLeftCorner = null)
    {
        $this->TopLeftCorner = $topLeftCorner;
        return $this;
    }
    /**
     * Get BottomRightCorner value
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition|null
     */
    public function getBottomRightCorner()
    {
        return $this->BottomRightCorner;
    }
    /**
     * Set BottomRightCorner value
     * @param \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $bottomRightCorner
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelBoxEntry
     */
    public function setBottomRightCorner(\NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelPosition $bottomRightCorner = null)
    {
        $this->BottomRightCorner = $bottomRightCorner;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Rate\StructType\CustomLabelBoxEntry
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
