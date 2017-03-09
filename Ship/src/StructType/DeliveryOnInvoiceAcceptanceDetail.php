<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryOnInvoiceAcceptanceDetail StructType
 * @subpackage Structs
 */
class DeliveryOnInvoiceAcceptanceDetail extends AbstractStructBase
{
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party
     */
    public $Recipient;
    /**
     * The TrackingId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the tracking id for the return, if preassigned.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId
     */
    public $TrackingId;
    /**
     * Constructor method for DeliveryOnInvoiceAcceptanceDetail
     * @uses DeliveryOnInvoiceAcceptanceDetail::setRecipient()
     * @uses DeliveryOnInvoiceAcceptanceDetail::setTrackingId()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId
     */
    public function __construct(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId = null)
    {
        $this
            ->setRecipient($recipient)
            ->setTrackingId($trackingId);
    }
    /**
     * Get Recipient value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeliveryOnInvoiceAcceptanceDetail
     */
    public function setRecipient(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get TrackingId value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId|null
     */
    public function getTrackingId()
    {
        return $this->TrackingId;
    }
    /**
     * Set TrackingId value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeliveryOnInvoiceAcceptanceDetail
     */
    public function setTrackingId(\NicholasCreativeMedia\FedExPHP\Ship\StructType\TrackingId $trackingId = null)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\DeliveryOnInvoiceAcceptanceDetail
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
