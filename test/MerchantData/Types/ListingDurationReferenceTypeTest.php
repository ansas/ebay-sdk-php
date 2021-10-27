<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\MerchantData\Types;

use DTS\eBaySDK\MerchantData\Types\ListingDurationReferenceType;

class ListingDurationReferenceTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ListingDurationReferenceType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\ListingDurationReferenceType', $this->obj);
    }

    public function testExtendsIntegerType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\IntegerType', $this->obj);
    }
}
