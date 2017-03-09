<?php

namespace NicholasCreativeMedia\FedExPHP\Ship\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomsClearanceDetail StructType
 * @subpackage Structs
 */
class CustomsClearanceDetail extends AbstractStructBase
{
    /**
     * The Brokers
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail[]
     */
    public $Brokers;
    /**
     * The ClearanceBrokerage
     * Meta informations extracted from the WSDL
     * - documentation: Interacts both with properties of the shipment and contractual relationship with the shipper.
     * - minOccurs: 0
     * @var string
     */
    public $ClearanceBrokerage;
    /**
     * The CustomsOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsOptionDetail
     */
    public $CustomsOptions;
    /**
     * The ImporterOfRecord
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party
     */
    public $ImporterOfRecord;
    /**
     * The RecipientCustomsId
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how the recipient is identified for customs purposes; the requirements on this information vary with destination country.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\RecipientCustomsId
     */
    public $RecipientCustomsId;
    /**
     * The DutiesPayment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment
     */
    public $DutiesPayment;
    /**
     * The DocumentContent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DocumentContent;
    /**
     * The CustomsValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $CustomsValue;
    /**
     * The FreightOnValue
     * Meta informations extracted from the WSDL
     * - documentation: Identifies responsibilities with respect to loss, damage, etc.
     * - minOccurs: 0
     * @var string
     */
    public $FreightOnValue;
    /**
     * The InsuranceCharges
     * Meta informations extracted from the WSDL
     * - documentation: Documents amount paid to third party for coverage of shipment content.
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money
     */
    public $InsuranceCharges;
    /**
     * The PartiesToTransactionAreRelated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PartiesToTransactionAreRelated;
    /**
     * The CommercialInvoice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoice
     */
    public $CommercialInvoice;
    /**
     * The Commodities
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity[]
     */
    public $Commodities;
    /**
     * The ExportDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDetail
     */
    public $ExportDetail;
    /**
     * The RegulatoryControls
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RegulatoryControls;
    /**
     * The DeclarationStatementDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsDeclarationStatementDetail
     */
    public $DeclarationStatementDetail;
    /**
     * Constructor method for CustomsClearanceDetail
     * @uses CustomsClearanceDetail::setBrokers()
     * @uses CustomsClearanceDetail::setClearanceBrokerage()
     * @uses CustomsClearanceDetail::setCustomsOptions()
     * @uses CustomsClearanceDetail::setImporterOfRecord()
     * @uses CustomsClearanceDetail::setRecipientCustomsId()
     * @uses CustomsClearanceDetail::setDutiesPayment()
     * @uses CustomsClearanceDetail::setDocumentContent()
     * @uses CustomsClearanceDetail::setCustomsValue()
     * @uses CustomsClearanceDetail::setFreightOnValue()
     * @uses CustomsClearanceDetail::setInsuranceCharges()
     * @uses CustomsClearanceDetail::setPartiesToTransactionAreRelated()
     * @uses CustomsClearanceDetail::setCommercialInvoice()
     * @uses CustomsClearanceDetail::setCommodities()
     * @uses CustomsClearanceDetail::setExportDetail()
     * @uses CustomsClearanceDetail::setRegulatoryControls()
     * @uses CustomsClearanceDetail::setDeclarationStatementDetail()
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail[] $brokers
     * @param string $clearanceBrokerage
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsOptionDetail $customsOptions
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $importerOfRecord
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RecipientCustomsId $recipientCustomsId
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $dutiesPayment
     * @param string $documentContent
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $customsValue
     * @param string $freightOnValue
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $insuranceCharges
     * @param bool $partiesToTransactionAreRelated
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoice $commercialInvoice
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity[] $commodities
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDetail $exportDetail
     * @param string[] $regulatoryControls
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsDeclarationStatementDetail $declarationStatementDetail
     */
    public function __construct(array $brokers = array(), $clearanceBrokerage = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsOptionDetail $customsOptions = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $importerOfRecord = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\RecipientCustomsId $recipientCustomsId = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $dutiesPayment = null, $documentContent = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $customsValue = null, $freightOnValue = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $insuranceCharges = null, $partiesToTransactionAreRelated = null, \NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoice $commercialInvoice = null, array $commodities = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDetail $exportDetail = null, array $regulatoryControls = array(), \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsDeclarationStatementDetail $declarationStatementDetail = null)
    {
        $this
            ->setBrokers($brokers)
            ->setClearanceBrokerage($clearanceBrokerage)
            ->setCustomsOptions($customsOptions)
            ->setImporterOfRecord($importerOfRecord)
            ->setRecipientCustomsId($recipientCustomsId)
            ->setDutiesPayment($dutiesPayment)
            ->setDocumentContent($documentContent)
            ->setCustomsValue($customsValue)
            ->setFreightOnValue($freightOnValue)
            ->setInsuranceCharges($insuranceCharges)
            ->setPartiesToTransactionAreRelated($partiesToTransactionAreRelated)
            ->setCommercialInvoice($commercialInvoice)
            ->setCommodities($commodities)
            ->setExportDetail($exportDetail)
            ->setRegulatoryControls($regulatoryControls)
            ->setDeclarationStatementDetail($declarationStatementDetail);
    }
    /**
     * Get Brokers value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail[]|null
     */
    public function getBrokers()
    {
        return $this->Brokers;
    }
    /**
     * Set Brokers value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail[] $brokers
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setBrokers(array $brokers = array())
    {
        foreach ($brokers as $customsClearanceDetailBrokersItem) {
            // validation for constraint: itemType
            if (!$customsClearanceDetailBrokersItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail) {
                throw new \InvalidArgumentException(sprintf('The Brokers property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail, "%s" given', is_object($customsClearanceDetailBrokersItem) ? get_class($customsClearanceDetailBrokersItem) : gettype($customsClearanceDetailBrokersItem)), __LINE__);
            }
        }
        $this->Brokers = $brokers;
        return $this;
    }
    /**
     * Add item to Brokers value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function addToBrokers(\NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail) {
            throw new \InvalidArgumentException(sprintf('The Brokers property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\BrokerDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Brokers[] = $item;
        return $this;
    }
    /**
     * Get ClearanceBrokerage value
     * @return string|null
     */
    public function getClearanceBrokerage()
    {
        return $this->ClearanceBrokerage;
    }
    /**
     * Set ClearanceBrokerage value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ClearanceBrokerageType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ClearanceBrokerageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $clearanceBrokerage
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setClearanceBrokerage($clearanceBrokerage = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\ClearanceBrokerageType::valueIsValid($clearanceBrokerage)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $clearanceBrokerage, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\ClearanceBrokerageType::getValidValues())), __LINE__);
        }
        $this->ClearanceBrokerage = $clearanceBrokerage;
        return $this;
    }
    /**
     * Get CustomsOptions value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsOptionDetail|null
     */
    public function getCustomsOptions()
    {
        return $this->CustomsOptions;
    }
    /**
     * Set CustomsOptions value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsOptionDetail $customsOptions
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setCustomsOptions(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsOptionDetail $customsOptions = null)
    {
        $this->CustomsOptions = $customsOptions;
        return $this;
    }
    /**
     * Get ImporterOfRecord value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party|null
     */
    public function getImporterOfRecord()
    {
        return $this->ImporterOfRecord;
    }
    /**
     * Set ImporterOfRecord value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $importerOfRecord
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setImporterOfRecord(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Party $importerOfRecord = null)
    {
        $this->ImporterOfRecord = $importerOfRecord;
        return $this;
    }
    /**
     * Get RecipientCustomsId value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\RecipientCustomsId|null
     */
    public function getRecipientCustomsId()
    {
        return $this->RecipientCustomsId;
    }
    /**
     * Set RecipientCustomsId value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\RecipientCustomsId $recipientCustomsId
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setRecipientCustomsId(\NicholasCreativeMedia\FedExPHP\Ship\StructType\RecipientCustomsId $recipientCustomsId = null)
    {
        $this->RecipientCustomsId = $recipientCustomsId;
        return $this;
    }
    /**
     * Get DutiesPayment value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment|null
     */
    public function getDutiesPayment()
    {
        return $this->DutiesPayment;
    }
    /**
     * Set DutiesPayment value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $dutiesPayment
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setDutiesPayment(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Payment $dutiesPayment = null)
    {
        $this->DutiesPayment = $dutiesPayment;
        return $this;
    }
    /**
     * Get DocumentContent value
     * @return string|null
     */
    public function getDocumentContent()
    {
        return $this->DocumentContent;
    }
    /**
     * Set DocumentContent value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\InternationalDocumentContentType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\InternationalDocumentContentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $documentContent
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setDocumentContent($documentContent = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\InternationalDocumentContentType::valueIsValid($documentContent)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $documentContent, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\InternationalDocumentContentType::getValidValues())), __LINE__);
        }
        $this->DocumentContent = $documentContent;
        return $this;
    }
    /**
     * Get CustomsValue value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }
    /**
     * Set CustomsValue value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $customsValue
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setCustomsValue(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $customsValue = null)
    {
        $this->CustomsValue = $customsValue;
        return $this;
    }
    /**
     * Get FreightOnValue value
     * @return string|null
     */
    public function getFreightOnValue()
    {
        return $this->FreightOnValue;
    }
    /**
     * Set FreightOnValue value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\FreightOnValueType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\FreightOnValueType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $freightOnValue
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setFreightOnValue($freightOnValue = null)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\FreightOnValueType::valueIsValid($freightOnValue)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freightOnValue, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\FreightOnValueType::getValidValues())), __LINE__);
        }
        $this->FreightOnValue = $freightOnValue;
        return $this;
    }
    /**
     * Get InsuranceCharges value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money|null
     */
    public function getInsuranceCharges()
    {
        return $this->InsuranceCharges;
    }
    /**
     * Set InsuranceCharges value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $insuranceCharges
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setInsuranceCharges(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Money $insuranceCharges = null)
    {
        $this->InsuranceCharges = $insuranceCharges;
        return $this;
    }
    /**
     * Get PartiesToTransactionAreRelated value
     * @return bool|null
     */
    public function getPartiesToTransactionAreRelated()
    {
        return $this->PartiesToTransactionAreRelated;
    }
    /**
     * Set PartiesToTransactionAreRelated value
     * @param bool $partiesToTransactionAreRelated
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setPartiesToTransactionAreRelated($partiesToTransactionAreRelated = null)
    {
        $this->PartiesToTransactionAreRelated = $partiesToTransactionAreRelated;
        return $this;
    }
    /**
     * Get CommercialInvoice value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoice|null
     */
    public function getCommercialInvoice()
    {
        return $this->CommercialInvoice;
    }
    /**
     * Set CommercialInvoice value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoice $commercialInvoice
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setCommercialInvoice(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CommercialInvoice $commercialInvoice = null)
    {
        $this->CommercialInvoice = $commercialInvoice;
        return $this;
    }
    /**
     * Get Commodities value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity[]|null
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }
    /**
     * Set Commodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity[] $commodities
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setCommodities(array $commodities = array())
    {
        foreach ($commodities as $customsClearanceDetailCommoditiesItem) {
            // validation for constraint: itemType
            if (!$customsClearanceDetailCommoditiesItem instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity) {
                throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity, "%s" given', is_object($customsClearanceDetailCommoditiesItem) ? get_class($customsClearanceDetailCommoditiesItem) : gettype($customsClearanceDetailCommoditiesItem)), __LINE__);
            }
        }
        $this->Commodities = $commodities;
        return $this;
    }
    /**
     * Add item to Commodities value
     * @throws \InvalidArgumentException
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function addToCommodities(\NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity) {
            throw new \InvalidArgumentException(sprintf('The Commodities property can only contain items of \NicholasCreativeMedia\FedExPHP\Ship\StructType\Commodity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Commodities[] = $item;
        return $this;
    }
    /**
     * Get ExportDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDetail|null
     */
    public function getExportDetail()
    {
        return $this->ExportDetail;
    }
    /**
     * Set ExportDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDetail $exportDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setExportDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\ExportDetail $exportDetail = null)
    {
        $this->ExportDetail = $exportDetail;
        return $this;
    }
    /**
     * Get RegulatoryControls value
     * @return string[]|null
     */
    public function getRegulatoryControls()
    {
        return $this->RegulatoryControls;
    }
    /**
     * Set RegulatoryControls value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RegulatoryControlType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RegulatoryControlType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $regulatoryControls
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setRegulatoryControls(array $regulatoryControls = array())
    {
        $invalidValues = array();
        foreach ($regulatoryControls as $customsClearanceDetailRegulatoryControlsItem) {
            if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\RegulatoryControlType::valueIsValid($customsClearanceDetailRegulatoryControlsItem)) {
                $invalidValues[] = var_export($customsClearanceDetailRegulatoryControlsItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RegulatoryControlType::getValidValues())), __LINE__);
        }
        $this->RegulatoryControls = $regulatoryControls;
        return $this;
    }
    /**
     * Add item to RegulatoryControls value
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RegulatoryControlType::valueIsValid()
     * @uses \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RegulatoryControlType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function addToRegulatoryControls($item)
    {
        // validation for constraint: enumeration
        if (!\NicholasCreativeMedia\FedExPHP\Ship\EnumType\RegulatoryControlType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \NicholasCreativeMedia\FedExPHP\Ship\EnumType\RegulatoryControlType::getValidValues())), __LINE__);
        }
        $this->RegulatoryControls[] = $item;
        return $this;
    }
    /**
     * Get DeclarationStatementDetail value
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsDeclarationStatementDetail|null
     */
    public function getDeclarationStatementDetail()
    {
        return $this->DeclarationStatementDetail;
    }
    /**
     * Set DeclarationStatementDetail value
     * @param \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsDeclarationStatementDetail $declarationStatementDetail
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
     */
    public function setDeclarationStatementDetail(\NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsDeclarationStatementDetail $declarationStatementDetail = null)
    {
        $this->DeclarationStatementDetail = $declarationStatementDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \NicholasCreativeMedia\FedExPHP\Ship\StructType\CustomsClearanceDetail
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
