<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class Address
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'locality' => 'string',
        'region' => 'string',
        'postalCode' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company' => null,
        'address1' => null,
        'address2' => null,
        'locality' => null,
        'region' => null,
        'postalCode' => null,
        'country' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'company' => 'company',
        'address1' => 'address1',
        'address2' => 'address2',
        'locality' => 'locality',
        'region' => 'region',
        'postalCode' => 'postalCode',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company' => 'setCompany',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'locality' => 'setLocality',
        'region' => 'setRegion',
        'postalCode' => 'setPostalCode',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company' => 'getCompany',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'locality' => 'getLocality',
        'region' => 'getRegion',
        'postalCode' => 'getPostalCode',
        'country' => 'getCountry'
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
        return self::$swaggerModelName;
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
        $this->container['company'] = $data['company'] ?? null;
        $this->container['address1'] = $data['address1'] ?? null;
        $this->container['address2'] = $data['address2'] ?? null;
        $this->container['locality'] = $data['locality'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['postalCode'] = $data['postalCode'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null !== $this->container['company'] && (mb_strlen($this->container['company']) > 96)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 96.";
        }

        if (null !== $this->container['address1'] && (mb_strlen($this->container['address1']) > 96)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be smaller than or equal to 96.";
        }

        if (null !== $this->container['address2'] && (mb_strlen($this->container['address2']) > 96)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be smaller than or equal to 96.";
        }

        if (null !== $this->container['locality'] && (mb_strlen($this->container['locality']) > 96)) {
            $invalidProperties[] = "invalid value for 'locality', the character length must be smaller than or equal to 96.";
        }

        if (null !== $this->container['region'] && (mb_strlen($this->container['region']) > 96)) {
            $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 96.";
        }

        if (null !== $this->container['postalCode'] && (mb_strlen($this->container['postalCode']) > 24)) {
            $invalidProperties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 24.";
        }

        if (null !== $this->container['country'] && (mb_strlen($this->container['country']) > 32)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 32.";
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
        return \count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setCompany($company)
    {
        if (null !== $company && (mb_strlen($company) > 96)) {
            throw new \InvalidArgumentException('invalid length for $company when calling Address., must be smaller than or equal to 96.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string $address1 address1
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setAddress1($address1)
    {
        if (null !== $address1 && (mb_strlen($address1) > 96)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling Address., must be smaller than or equal to 96.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string $address2 address2
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setAddress2($address2)
    {
        if (null !== $address2 && (mb_strlen($address2) > 96)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling Address., must be smaller than or equal to 96.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string $locality City or locality
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setLocality($locality)
    {
        if (null !== $locality && (mb_strlen($locality) > 96)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling Address., must be smaller than or equal to 96.');
        }

        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region State or province
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setRegion($region)
    {
        if (null !== $region && (mb_strlen($region) > 96)) {
            throw new \InvalidArgumentException('invalid length for $region when calling Address., must be smaller than or equal to 96.');
        }

        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode ZIP Code or postal code
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setPostalCode($postalCode)
    {
        if (null !== $postalCode && (mb_strlen($postalCode) > 24)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling Address., must be smaller than or equal to 24.');
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country ISO-3166-1  ALPHA-2, ALPHA-3 or numeric
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setCountry($country)
    {
        if (null !== $country && (mb_strlen($country) > 32)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Address., must be smaller than or equal to 32.');
        }

        $this->container['country'] = $country;

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
        return $this->container[$offset] ?? null;
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
        if (null === $offset) {
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
        if (\defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


