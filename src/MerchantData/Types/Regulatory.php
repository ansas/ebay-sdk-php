<?php

namespace DTS\eBaySDK\MerchantData\Types;

use DTS\eBaySDK\Types\BaseType;

/**
 * @property \DTS\eBaySDK\MerchantData\Types\Manufacturer $Manufacturer
 * @property \DTS\eBaySDK\MerchantData\Types\ResponsiblePerson $ResponsiblePersons
 */
class Regulatory extends BaseType
{
    private static $propertyTypes = [
        'Manufacturer' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\Manufacturer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Manufacturer'
        ],
        'ResponsiblePersons' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\ResponsiblePersons',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ResponsiblePersons'
        ],
    ];

    public function __construct(array $values = [])
    {
        [$parentValues, $childValues] = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
