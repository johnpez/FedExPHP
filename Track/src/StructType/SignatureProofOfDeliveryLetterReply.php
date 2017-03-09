<?php

namespace NicholasCreativeMedia\FedExPHP\Track\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignatureProofOfDeliveryLetterReply StructType
 * Meta informations extracted from the WSDL
 * - type: ns:SignatureProofOfDeliveryLetterReply
 * @subpackage Structs
 */
class SignatureProofOfDeliveryLetterReply extends AbstractStructBase
{
    /**
     * The HighestSeverity
     * Meta informations extracted from the WSDL
     * - documentation: This contains the severity type of the most severe Notification in the Notifications array.
     * - minOccurs: 1
     * @var string
     */
    public $HighestSeverity;
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - documentation: Information about the request/reply such was the transaction successful or not, and any additional information relevant to the request and/or reply. There may be multiple Notifications in a reply.
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[]
     */
    public $Notifications;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: Image of letter encoded in Base64 format.
     * - minOccurs: 1
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId
     */
    public $Version;
    /**
     * The TransactionDetail
     * Meta informations extracted from the WSDL
     * - documentation: Contains the CustomerTransactionDetail that is echoed back to the caller for matching requests and replies and a Localization element for defining the language/translation used in the reply data.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail
     */
    public $TransactionDetail;
    /**
     * The Letter
     * Meta informations extracted from the WSDL
     * - documentation: Image of letter encoded in Base64 format.
     * - minOccurs: 0
     * @var string
     */
    public $Letter;
    /**
     * Constructor method for SignatureProofOfDeliveryLetterReply
     * @uses SignatureProofOfDeliveryLetterReply::setHighestSeverity()
     * @uses SignatureProofOfDeliveryLetterReply::setNotifications()
     * @uses SignatureProofOfDeliveryLetterReply::setVersion()
     * @uses SignatureProofOfDeliveryLetterReply::setTransactionDetail()
     * @uses SignatureProofOfDeliveryLetterReply::setLetter()
     * @param string $highestSeverity
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[] $notifications
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId $version
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail $transactionDetail
     * @param string $letter
     */
    public function __construct($highestSeverity = null, array $notifications = array(), \NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId $version = null, \NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail $transactionDetail = null, $letter = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setNotifications($notifications)
            ->setVersion($version)
            ->setTransactionDetail($transactionDetail)
            ->setLetter($letter);
    }
    /**
     * Get HighestSeverity value
     * @return string
     */
    public function getHighestSeverity()
    {
        return $this->HighestSeverity;
    }
    /**
     * Set HighestSeverity value
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationSeverityType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationSeverityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterReply
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationSeverityType::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \NicholasCreativeMedia\FedExPHP\Track\EnumType\NotificationSeverityType::getValidValues())), __LINE__);
        }
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Notifications value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification[] $notifications
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterReply
     */
    public function setNotifications(array $notifications = array())
    {
        foreach ($notifications as $signatureProofOfDeliveryLetterReplyNotificationsItem) {
            // validation for constraint: itemType
            if (!$signatureProofOfDeliveryLetterReplyNotificationsItem instanceof \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification, "%s" given', is_object($signatureProofOfDeliveryLetterReplyNotificationsItem) ? get_class($signatureProofOfDeliveryLetterReplyNotificationsItem) : gettype($signatureProofOfDeliveryLetterReplyNotificationsItem)), __LINE__);
            }
        }
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Add item to Notifications value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification $item
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterReply
     */
    public function addToNotifications(\NicholasCreativeMedia\FedExPHP\Track\StructType\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notifications property can only contain items of \NicholasCreativeMedia\FedExPHP\Track\StructType\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notifications[] = $item;
        return $this;
    }
    /**
     * Get Version value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId $version
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterReply
     */
    public function setVersion(\NicholasCreativeMedia\FedExPHP\Track\StructType\VersionId $version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail|null
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    /**
     * Set TransactionDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail $transactionDetail
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterReply
     */
    public function setTransactionDetail(\NicholasCreativeMedia\FedExPHP\Track\StructType\TransactionDetail $transactionDetail = null)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    /**
     * Get Letter value
     * @return string|null
     */
    public function getLetter()
    {
        return $this->Letter;
    }
    /**
     * Set Letter value
     * @param string $letter
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterReply
     */
    public function setLetter($letter = null)
    {
        // validation for constraint: string
        if (!is_null($letter) && !is_string($letter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($letter)), __LINE__);
        }
        $this->Letter = $letter;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Track\StructType\SignatureProofOfDeliveryLetterReply
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
