<?php
/**
 * AVSResponse
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
 * AVSResponse Class Doc Comment
 *
 * @category Class
 * @description The processor address validation response for compliance.
 * @package  FirstData\FirstApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AVSResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AVSResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'streetMatch' => 'string',
        'postalCodeMatch' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'streetMatch' => null,
        'postalCodeMatch' => null
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
        'streetMatch' => 'streetMatch',
        'postalCodeMatch' => 'postalCodeMatch'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'streetMatch' => 'setStreetMatch',
        'postalCodeMatch' => 'setPostalCodeMatch'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'streetMatch' => 'getStreetMatch',
        'postalCodeMatch' => 'getPostalCodeMatch'
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

    const STREET_MATCH_Y = 'Y';
    const STREET_MATCH_N = 'N';
    const STREET_MATCH_NO_INPUT_DATA = 'NO_INPUT_DATA';
    const STREET_MATCH_NOT_CHECKED = 'NOT_CHECKED';
    const POSTAL_CODE_MATCH_Y = 'Y';
    const POSTAL_CODE_MATCH_N = 'N';
    const POSTAL_CODE_MATCH_NO_INPUT_DATA = 'NO_INPUT_DATA';
    const POSTAL_CODE_MATCH_NOT_CHECKED = 'NOT_CHECKED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStreetMatchAllowableValues()
    {
        return [
            self::STREET_MATCH_Y,
            self::STREET_MATCH_N,
            self::STREET_MATCH_NO_INPUT_DATA,
            self::STREET_MATCH_NOT_CHECKED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPostalCodeMatchAllowableValues()
    {
        return [
            self::POSTAL_CODE_MATCH_Y,
            self::POSTAL_CODE_MATCH_N,
            self::POSTAL_CODE_MATCH_NO_INPUT_DATA,
            self::POSTAL_CODE_MATCH_NOT_CHECKED,
        ];
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
        $this->container['streetMatch'] = isset($data['streetMatch']) ? $data['streetMatch'] : null;
        $this->container['postalCodeMatch'] = isset($data['postalCodeMatch']) ? $data['postalCodeMatch'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStreetMatchAllowableValues();
        if (!is_null($this->container['streetMatch']) && !in_array($this->container['streetMatch'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'streetMatch', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPostalCodeMatchAllowableValues();
        if (!is_null($this->container['postalCodeMatch']) && !in_array($this->container['postalCodeMatch'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'postalCodeMatch', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets streetMatch
     *
     * @return string|null
     */
    public function getStreetMatch()
    {
        return $this->container['streetMatch'];
    }

    /**
     * Sets streetMatch
     *
     * @param string|null $streetMatch Response if street matches that on file.
     *
     * @return $this
     */
    public function setStreetMatch($streetMatch)
    {
        $allowedValues = $this->getStreetMatchAllowableValues();
        if (!is_null($streetMatch) && !in_array($streetMatch, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'streetMatch', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['streetMatch'] = $streetMatch;

        return $this;
    }

    /**
     * Gets postalCodeMatch
     *
     * @return string|null
     */
    public function getPostalCodeMatch()
    {
        return $this->container['postalCodeMatch'];
    }

    /**
     * Sets postalCodeMatch
     *
     * @param string|null $postalCodeMatch Response if postal code matches that on file.
     *
     * @return $this
     */
    public function setPostalCodeMatch($postalCodeMatch)
    {
        $allowedValues = $this->getPostalCodeMatchAllowableValues();
        if (!is_null($postalCodeMatch) && !in_array($postalCodeMatch, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'postalCodeMatch', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['postalCodeMatch'] = $postalCodeMatch;

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


