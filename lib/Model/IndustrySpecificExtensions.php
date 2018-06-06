<?php

namespace FirstData\ApiClient\Model;

use \ArrayAccess;
use \FirstData\ApiClient\ObjectSerializer;


/**
 * Class IndustrySpecificExtensions
 *
 * @category Class
 * @package  FirstData\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IndustrySpecificExtensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IndustrySpecificExtensions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'airline' => Airline::class,
        'lodging' => Lodging::class,
        'carRental' => CarRental::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'airline' => null,
        'lodging' => null,
        'carRental' => null
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
        'airline' => 'airline',
        'lodging' => 'lodging',
        'carRental' => 'carRental'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'airline' => 'setAirline',
        'lodging' => 'setLodging',
        'carRental' => 'setCarRental'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'airline' => 'getAirline',
        'lodging' => 'getLodging',
        'carRental' => 'getCarRental'
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
        $this->container['airline'] = $data['airline'] ?? null;
        $this->container['lodging'] = $data['lodging'] ?? null;
        $this->container['carRental'] = $data['carRental'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
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
     * Gets airline
     *
     * @return \FirstData\ApiClient\Model\Airline
     */
    public function getAirline()
    {
        return $this->container['airline'];
    }

    /**
     * Sets airline
     *
     * @param \FirstData\ApiClient\Model\Airline $airline airline
     *
     * @return $this
     */
    public function setAirline($airline)
    {
        $this->container['airline'] = $airline;

        return $this;
    }

    /**
     * Gets lodging
     *
     * @return \FirstData\ApiClient\Model\Lodging
     */
    public function getLodging()
    {
        return $this->container['lodging'];
    }

    /**
     * Sets lodging
     *
     * @param \FirstData\ApiClient\Model\Lodging $lodging lodging
     *
     * @return $this
     */
    public function setLodging($lodging)
    {
        $this->container['lodging'] = $lodging;

        return $this;
    }

    /**
     * Gets carRental
     *
     * @return \FirstData\ApiClient\Model\CarRental
     */
    public function getCarRental()
    {
        return $this->container['carRental'];
    }

    /**
     * Sets carRental
     *
     * @param \FirstData\ApiClient\Model\CarRental $carRental carRental
     *
     * @return $this
     */
    public function setCarRental($carRental)
    {
        $this->container['carRental'] = $carRental;

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


