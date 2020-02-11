<?php
/**
 * FraudSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway API Specification.
 *
 * The documentation here is designed to provide all of the technical guidance required to consume and integrate with our APIs for payment processing. To learn more about our APIs please visit https://docs.firstdata.com/org/gateway.
 *
 * OpenAPI spec version: 6.9.1.20191223.002
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FirstData\FirstApi\Client\Model;

use \ArrayAccess;
use \FirstData\FirstApi\Client\ObjectSerializer;

/**
 * FraudSettings Class Doc Comment
 *
 * @category Class
 * @description Object that holds all fraud settings.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FraudSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FraudSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'blockedItems' => '\FirstData\FirstApi\Client\Model\BlockedItems',
        'maximumPurchaseAmount' => '\FirstData\FirstApi\Client\Model\MaximumPurchaseAmount[]',
        'lockoutTime' => '\FirstData\FirstApi\Client\Model\LockoutTime',
        'countryProfile' => '\FirstData\FirstApi\Client\Model\CountryProfile'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'blockedItems' => null,
        'maximumPurchaseAmount' => null,
        'lockoutTime' => null,
        'countryProfile' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'blockedItems' => 'blockedItems',
        'maximumPurchaseAmount' => 'maximumPurchaseAmount',
        'lockoutTime' => 'lockoutTime',
        'countryProfile' => 'countryProfile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blockedItems' => 'setBlockedItems',
        'maximumPurchaseAmount' => 'setMaximumPurchaseAmount',
        'lockoutTime' => 'setLockoutTime',
        'countryProfile' => 'setCountryProfile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blockedItems' => 'getBlockedItems',
        'maximumPurchaseAmount' => 'getMaximumPurchaseAmount',
        'lockoutTime' => 'getLockoutTime',
        'countryProfile' => 'getCountryProfile'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['blockedItems'] = isset($data['blockedItems']) ? $data['blockedItems'] : null;
        $this->container['maximumPurchaseAmount'] = isset($data['maximumPurchaseAmount']) ? $data['maximumPurchaseAmount'] : null;
        $this->container['lockoutTime'] = isset($data['lockoutTime']) ? $data['lockoutTime'] : null;
        $this->container['countryProfile'] = isset($data['countryProfile']) ? $data['countryProfile'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets blockedItems
     *
     * @return \FirstData\FirstApi\Client\Model\BlockedItems|null
     */
    public function getBlockedItems()
    {
        return $this->container['blockedItems'];
    }

    /**
     * Sets blockedItems
     *
     * @param \FirstData\FirstApi\Client\Model\BlockedItems|null $blockedItems blockedItems
     *
     * @return $this
     */
    public function setBlockedItems($blockedItems)
    {
        $this->container['blockedItems'] = $blockedItems;

        return $this;
    }

    /**
     * Gets maximumPurchaseAmount
     *
     * @return \FirstData\FirstApi\Client\Model\MaximumPurchaseAmount[]|null
     */
    public function getMaximumPurchaseAmount()
    {
        return $this->container['maximumPurchaseAmount'];
    }

    /**
     * Sets maximumPurchaseAmount
     *
     * @param \FirstData\FirstApi\Client\Model\MaximumPurchaseAmount[]|null $maximumPurchaseAmount maximumPurchaseAmount
     *
     * @return $this
     */
    public function setMaximumPurchaseAmount($maximumPurchaseAmount)
    {
        $this->container['maximumPurchaseAmount'] = $maximumPurchaseAmount;

        return $this;
    }

    /**
     * Gets lockoutTime
     *
     * @return \FirstData\FirstApi\Client\Model\LockoutTime|null
     */
    public function getLockoutTime()
    {
        return $this->container['lockoutTime'];
    }

    /**
     * Sets lockoutTime
     *
     * @param \FirstData\FirstApi\Client\Model\LockoutTime|null $lockoutTime lockoutTime
     *
     * @return $this
     */
    public function setLockoutTime($lockoutTime)
    {
        $this->container['lockoutTime'] = $lockoutTime;

        return $this;
    }

    /**
     * Gets countryProfile
     *
     * @return \FirstData\FirstApi\Client\Model\CountryProfile|null
     */
    public function getCountryProfile()
    {
        return $this->container['countryProfile'];
    }

    /**
     * Sets countryProfile
     *
     * @param \FirstData\FirstApi\Client\Model\CountryProfile|null $countryProfile countryProfile
     *
     * @return $this
     */
    public function setCountryProfile($countryProfile)
    {
        $this->container['countryProfile'] = $countryProfile;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


