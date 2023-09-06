<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $PictureName
 * @property integer $PictureSystemVersion
 * @property \DTS\eBaySDK\Trading\Enums\PictureSetCodeType $PictureSet
 * @property \DTS\eBaySDK\Trading\Types\Base64BinaryType $PictureData
 * @property \DTS\eBaySDK\Trading\Enums\PictureUploadPolicyCodeType $PictureUploadPolicy
 * @property string[] $ExternalPictureURL
 * @property integer $ExtensionInDays
 */
class UploadSiteHostedPicturesRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PictureName' => [ // MUST NOT be used as eBay returns errors if set
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureName'
        ],
        'PictureSystemVersion' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureSystemVersion'
        ],
        'PictureSet' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureSet'
        ],
        'PictureData' => [
            'type' => 'DTS\eBaySDK\Trading\Types\Base64BinaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureData'
        ],
        'PictureUploadPolicy' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PictureUploadPolicy'
        ],
        'ExternalPictureURL' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'ExternalPictureURL'
        ],
        'ExtensionInDays' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ExtensionInDays'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'UploadSiteHostedPicturesRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
